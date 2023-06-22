import cv2
import os

# os.environ['HOME'] = r'C:\Users\Mohamed Attar'  # Replace with the actual home directory path
os.environ['USERPROFILE'] = r'C:\Users\Mohamed Attar'  # Replace with the actual home directory path

import easyocr
from ultralytics import YOLO
import json

def crop_image_r_m_l(img, x1: float = 0.93, x2: float = 0.99, y1: float = 0.6) -> tuple:
    """
    Crops the given image into three parts: right, middle, and left.

    The image is cropped based on the provided fractions of the image dimensions
    along the x-axis (horizontal) and y-axis (vertical). The default values are
    set to crop the rightmost portion of the image.

    Args:
        img (numpy.ndarray): The input image as a NumPy array.
        x1 (float): The fraction of the image width to start cropping from (default: 0.93).
        x2 (float): The fraction of the image width to end cropping at (default: 0.99).
        y1 (float): The fraction of the image height to determine the middle portion (default: 0.6).

    Returns:
        tuple: A tuple containing three cropped images: right, middle, and left.

    """
    x, y, _ = img.shape  # Get the dimensions of the image (height, width, channels)

    # Calculate the x-coordinates for cropping
    x1 = int(x * x1)
    x2 = int(x * x2)

    # Crop the image horizontally based on the x-coordinates
    img = img[x1:x2, :]

    # Calculate the y-coordinates for cropping
    y2 = int(y * y1)
    y1 = int(y * 0.4)

    # Crop the image vertically into three parts: left, middle, and right
    img_left = img[:, :y1]
    img_middle = img[:, y1:y2]
    img_right = img[:, y2:]

    return img_right, img_middle, img_left



def get_bank_id(text: str) -> str:
    """
    Extracts the bank ID from the given text.

    If the text contains a '#' character, it splits the text at the '#' and
    returns the first part as the bank ID. Otherwise, it removes the last three
    characters from the text and returns the remaining part as the bank ID.

    Args:
        text (str): The input text containing the bank ID.

    Returns:
        str: The extracted bank ID.

    """
    if '#' in text:  # Check if '#' character is present in the text
        bank_id = text.split('#')[0]  # Split the text at '#' and get the first part
    else:
        bank_id = text[:-3]  # Remove the last three characters from the text

    return bank_id




def ocr_detect(img: str, reader: easyocr.Reader) -> str:
    """
    Performs OCR (Optical Character Recognition) on the given image using the provided reader.

    The OCR reader is used to extract text from the image. The function then filters the extracted
    text to include only specific characters: '0', '1', '2', '#', '3', '4', '5', '6', '7', '8', '9'.

    Args:
        img (str): The path to the input image.
        reader (easyocr.Reader): The OCR reader object for text extraction.

    Returns:
        str: The filtered text containing only the specified characters.

    """
    result = reader.readtext(img)  # Perform OCR on the image
    t = ''

    # Extract the text from the OCR result
    for i in result:
        t += i[-2]

    filtered_text = ''

    # Filter the text to include only specific characters
    for i in t:
        if i in ['0', '1', '2', '#', '3', '4', '5', '6', '7', '8', '9']:
            filtered_text += i

    return filtered_text

def looping_in_img(img, num_of_loops=6) -> tuple:
    """
    Loops through the image to extract bank ID, OCR text, and price text.

    The function iteratively crops different portions of the image and performs OCR
    to extract the bank ID, OCR text, and price text. It continues looping until
    all three values are obtained or the specified number of loops is reached.

    Args:
        img: The input image.
        num_of_loops (int): The maximum number of loops to perform (default: 6).

    Returns:
        tuple: A tuple containing the extracted bank ID, price text, and OCR text.

    """
    x1, x2, y1 =  0.93, 0.98, 0.6
    bank_id = ocr_text = price_text = ''
    reader = easyocr.Reader(['en'])

    for _ in range(num_of_loops):
        img_right, img_middle, img_left = crop_image_r_m_l(img, x1, x2, y1)

        if bank_id.count('#') < 1:
            bank_id = ocr_detect(img_right, reader)
        if len(ocr_text) < 5:
            ocr_text = ocr_detect(img_left, reader)
        if len(price_text) < 2:
            price_text = ocr_detect(img_middle, reader)

        if bank_id and ocr_text and price_text:
            break
        elif bank_id:
            y1 -= 0.04
        elif ocr_text:
            y1 += 0.04
        else:
            x1 -= 0.05
            x2 -= 0.025

    return bank_id, price_text, ocr_text


def get_info_from_img2(img):
    img=cv2.imread(img)
    # yolo_predection(img)
    price=ocr=''
    # croped_img=r'C:\Users\hp\Desktop\invoice\images\camera\1.jpg'
    bank_id,price_text,ocr=looping_in_img(img)

    bank_id = get_bank_id(bank_id)
    price = get_price(price_text)
    return bank_id,price,ocr


def yolo_predection(img):
    # results = model.predict(source=img,save_crop=True,device='gpu')
    model = YOLO(r"C:\Users\hp\Desktop\invoice\models\best.pt")

    model.predict(source=img,save_crop=True,device='cpu')



def get_price(text: str):
    """
    Extracts the price from the given text.

    The function checks if the text ends with '00' or starts with '00' and extracts
    the price accordingly. If the text is empty or doesn't match the conditions,
    None is returned.

    Args:
        text (str): The input text containing the price.

    Returns:
        float: The extracted price as a float value, or None if the text is empty or doesn't match the conditions.

    """
    if text == '':
        return None
    elif text[-1] == '0' and text[-2] == '0':
        price = float(text) / 100
        return price
    elif text[1] == '0' and text[0] == '0':
        price = float(text[3:])
        return price

current_dir = os.path.dirname(os.path.abspath(__file__))
image_path='image.png'
print(get_info_from_img2(f'{current_dir}/{image_path}'), 'success operation')

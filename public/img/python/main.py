from cv2 import imread
from easyocr import Reader
from ultralytics import YOLO
from shutil import rmtree
import os


def crop_image_r_m_l(img, x1: float = 0.93, x2: float = 0.99, y1: float = 0.6):
    x, y, _ = img.shape
    x1 = int(x * x1)
    x2 = int(x * x2)
    img = img[x1:x2, :]
    y1 = int(y * 0.4)
    y2 = int(y * 0.6)
    img_left = img[:, :y1]
    img_middel = img[:, y1:y2]
    img_right = img[:, y2:]
    return img_right, img_middel, img_left


def get_price(text):
	if text == '':
		return ''
	elif text[-1]=='0' and text[-2]=='0':
		price=float(text)/100
		return price

	elif text[1]=='0' and text[0]=='0':
		price=float(text[3:])
	return price

def get_bank_id(text):
    if "#" in text:
        bank_id = text.split("#")[0]
        return bank_id
    else:
        return text[:-3]


def ocr_detect(img, reader):
    # Specify the languages you want to recognize
    result = reader.readtext(img)
    t = ""
    for i in result:
        t += i[-2]
    filtered_text = ""
    for i in t:
        if i in ["0", "1", "2", "#", "3", "4", "5", "6", "7", "8", "9"]:
            filtered_text += i

    return filtered_text


# ##################################


def looping_in_img(img, num_0f_loops=5):
    t, x1, x2, y1 = 1, 0.93, 0.98, 0.6
    bank_id = ocr_text = price_text = ""
    reader = Reader(["en"])
    for i in range(num_0f_loops):
        img_right, img_midel, img_left = crop_image_r_m_l(img, x1, x2, y1)
        if bank_id.count("#") < 1:
            bank_id = ocr_detect(img_right, reader)
        if len(ocr_text) < 5:
            left_text = ocr_detect(img_left, reader)
        if len(price_text) < 2:
            price_text = ocr_detect(img_midel, reader)

        if bank_id and left_text and price_text:
            break

        elif bank_id:
            y1 -= 0.04
        elif left_text:
            y1 += 0.04
        else:
            x1 -= 0.05
            x2 -= 0.025

    return bank_id, price_text, left_text


def yolo_predection(img, source=r"C:\Users\hp\Desktop\invoice\models\best.pt"):
    # results = model.predict(source=img,save_crop=True,device='gpu')
    model = YOLO(source)
    model.predict(source=img, save_crop=True, device="cpu")


def get_info_from_img(img, model_output_dir):
    img = imread(img)
    yolo_predection(img, os.path.dirname(os.path.abspath(__file__)) + "/best.pt")
    croped_img = find_largest_image(model_output_dir)
    bank_id, price_text, ocr = looping_in_img(croped_img)
    bank_id = get_bank_id(bank_id)
    price = get_price(price_text)
    try:
        rmtree("runs/detect")
    except:
        ...

    bank_id=bank_id.replace('#','')
    ocr=ocr.replace('#','')

    return (bank_id, price, ocr)


def find_largest_image(directory="runs/detect"):
    largest_width = 0
    largest_height = 0
    largest_image = None

    # Stack to keep track of directories to visit
    stack = [directory]

    while stack:
        current_dir = stack.pop()

        for filename in os.listdir(current_dir):
            filepath = os.path.join(current_dir, filename)

            if os.path.isdir(filepath):
                stack.append(filepath)
            elif filename.endswith(".jpg") or filename.endswith(".png"):
                image = imread(filepath)
                height, width, _ = image.shape

                if width > largest_width and height > largest_height:
                    largest_width = width
                    largest_height = height
                    largest_image = image
    return largest_image


current_dir = os.path.dirname(os.path.abspath(__file__))
print(get_info_from_img(f"{current_dir}/image.jpg", "runs/detect"), 'success operation')

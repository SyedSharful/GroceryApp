import requests
from bs4 import BeautifulSoup
import csv
import urllib


url = 'https://www.coupons.com/coupons/'

response = requests.get(url)

if response.status_code == 200:
    soup = BeautifulSoup(response.text, 'html.parser')
    coupon_divs = soup.find_all('div', {'class': 'pod-info'})
    image_tags = soup.find_all('div', {'class': 'img'})
    image_urls = [img['pod-image'] for img in image_tags]


    # Download the images
    for url in image_urls:
        urllib.request.urlretrieve(url, 'image.jpg')
    #price = soup.find_all('h2', {'class': 'summary'})

    # Writing to CSV file
    file = open("allCoupons.csv",'w')
    writer = csv.writer(file)
    writer.writerow(["Brand", "Save", "Details"])
    
    for coupon in coupon_divs:
        brand = coupon.find('p', {'class': 'brand'}).text
        save = coupon.find('h2', {'class': 'summary'}).text
        details = coupon.find('p', {'class': 'details'}).text

        # coupon_desc = coupon.find('div', {'class': 'coupon-desc'}).text.strip()
        # coupon_code = coupon.find('div', {'class': 'coupon-code'}).text.strip()
        writer.writerow([brand, save, details])

        print('Brand:', brand)
        print('Save:', save)
        print('Details:', details)
        # print('Description:', coupon_desc)
        # print('Code:', coupon_code)
        print('-' * 50)
    
    file.close()
else:
    print('Error:', response.status_code)

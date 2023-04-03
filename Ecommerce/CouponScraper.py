import requests
from bs4 import BeautifulSoup

url = 'https://www.coupons.com/coupons/'

response = requests.get(url)

if response.status_code == 200:
    soup = BeautifulSoup(response.content, 'html.parser')
    coupon_divs = soup.find_all('div', {'class': 'pod-info'})
    price = soup.find_all('h2', {'class': 'summary'})

    for coupon in coupon_divs:
        coupon_title = coupon.find('div', {'class': 'pod-info'}).text.strip()
        price = coupon.find('h2', {'class': 'summary'}).text.strip()

        # coupon_desc = coupon.find('div', {'class': 'coupon-desc'}).text.strip()
        # coupon_code = coupon.find('div', {'class': 'coupon-code'}).text.strip()
        
        print('Coupon:', coupon_title)
        print('Price:', price)
        # print('Description:', coupon_desc)
        # print('Code:', coupon_code)
        print('-' * 50)
else:
    print('Error:', response.status_code)


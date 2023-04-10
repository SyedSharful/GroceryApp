import requests
from bs4 import BeautifulSoup
import urllib

# Make a request to the website
url = 'https://www.coupons.com/coupons/'
response = requests.get(url)

# Parse the HTML with BeautifulSoup
soup = BeautifulSoup(response.text, 'html.parser')

# Find all div tags with class "pod-image" and extract the img src attribute
image_divs = soup.find_all('div', {'class': 'pod-media'})
image_urls = [div.find('img')['src'] for div in image_divs]

# Download the images
for url in image_urls:
    if url.startswith('//'):
        # Some image URLs are relative, so we need to add the protocol
        url = 'https:' + url
    urllib.request.urlretrieve(url, url.split('/')[-1])

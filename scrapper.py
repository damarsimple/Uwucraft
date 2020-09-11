from bs4 import BeautifulSoup
import requests
import csv

url = "https://minecraft.gamepedia.com/Advancement"

# Make a GET request to fetch the raw HTML content
html_content = requests.get(url).text

# Parse the html content
soup = BeautifulSoup(html_content, "lxml")
data = {}
csv_writer = csv.writer(open('test2.csv', mode='w'), delimiter=',',
                        quotechar='"', quoting=csv.QUOTE_MINIMAL)
advancement_table = soup.find_all(
    "table", attrs={"class": "wikitable", "data-description": "advancements"})
headings = []
data = []

advancement_table_data = advancement_table[1].tbody.find_all("tr")

for th in advancement_table_data[1].find_all("th"):
    headings.append(th.text.replace("\n", " ").strip())
print(headings)
csv_writer.writerow(headings)
for table in advancement_table:
    advancement_table_data = table.tbody.find_all("tr")

    for th in advancement_table_data[1].find_all("th"):
        headings.append(th.text.replace("\n", " ").strip())

    for table in advancement_table_data:
        if table.td is None:
            print("none")
        else:
            subtab = table.find_all("td")
            tabdata = []
            for tab in subtab:
                tabdata.append(tab.text.replace("\n", " ").strip())
            data.append(tabdata)

for d in data:
    csv_writer.writerow(d)

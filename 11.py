from selenium import webdriver
#opening ondutyleave
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/login.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('username').send_keys("17007")
driver.find_element_by_name('password').send_keys("swe123")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()
driver.find_element_by_name('od').click()

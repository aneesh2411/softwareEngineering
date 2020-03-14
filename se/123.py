from selenium import webdriver

#SuccessLogin
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/login.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('username').send_keys("17007")
driver.find_element_by_name('password').send_keys("swe123")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()

#FailedLogin
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/login.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('username').send_keys("17007")
driver.find_element_by_name('password').send_keys("swe12345")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()


#register
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/register.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('AdminName').send_keys("Haswanth")
driver.find_element_by_name('UserName').send_keys("hashw")
driver.find_element_by_name('MobileNumber').send_keys("9123456789")
driver.find_element_by_name('Email').send_keys("9123456789")
driver.find_element_by_name('Password').send_keys("1234")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()

#failed-register(username already exists)
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/register.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('AdminName').send_keys("Haswanth")
driver.find_element_by_name('UserName').send_keys("17007")
driver.find_element_by_name('MobileNumber').send_keys("9123456789")
driver.find_element_by_name('Email').send_keys("9123456789")
driver.find_element_by_name('Password').send_keys("1234")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()

#failed-register(incorrect mobile number format)
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/register.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('AdminName').send_keys("Haswanth")
driver.find_element_by_name('UserName').send_keys("hass")
driver.find_element_by_name('MobileNumber').send_keys("912")
driver.find_element_by_name('Email').send_keys("9123456789")
driver.find_element_by_name('Password').send_keys("1234")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()

#failed-register(empty fields)
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/register.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('AdminName').send_keys("Haswanth")
driver.find_element_by_name('UserName').send_keys("")
driver.find_element_by_name('MobileNumber').send_keys("912")
driver.find_element_by_name('Email').send_keys("9123456789")
driver.find_element_by_name('Password').send_keys("1234")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()

#searching
from selenium import webdriver
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/login.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('username').send_keys("17007")
driver.find_element_by_name('password').send_keys("swe123")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()
driver.find_element_by_name('valueToSearch').send_keys("17007")
driver.find_element_by_xpath('//button[@class="btn search_course_btn"]').click()

#opening ordinaryleave
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/login.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('username').send_keys("17007")
driver.find_element_by_name('password').send_keys("swe123")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()
driver.find_element_by_name('ord').click()

#opening medicalleave
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/login.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('username').send_keys("17007")
driver.find_element_by_name('password').send_keys("swe123")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()
driver.find_element_by_name('med').click()

#opening ondutyleave
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/login.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('username').send_keys("17007")
driver.find_element_by_name('password').send_keys("swe123")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()
driver.find_element_by_name('od').click()

#about
driver = webdriver.Chrome('C:/Webdriver/chromedriver.exe')
driver.get('http://localhost/od/trms/login.php')
NEXT_BUTTON_XPATH = '//button[@type="submit" and @name="login"]'
driver.find_element_by_name('username').send_keys("17007")
driver.find_element_by_name('password').send_keys("swe123")
driver.find_element_by_xpath('//button[@class="btn btn-success btn-flat m-b-30 m-t-30"]').click()
driver.find_element_by_name('valueToSearch').click()

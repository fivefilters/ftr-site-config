requires_login: yes

login_uri: https://www.rums.ms/login/
login_username_field: log
login_password_field: pwd

login_extra_fields: rememberme=forever
login_extra_fields: submit=
login_extra_fields: testcookie=1
login_extra_fields: redirect_to=https://www.rums.ms/

not_logged_in_xpath: //div[contains(concat(' ',normalize-space(@class),' '),' paywallStoerer ')]

test_url: https://www.rums.ms/briefe/busch-2020-10-02/

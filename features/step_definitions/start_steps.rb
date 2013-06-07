Given /I am on the start page/ do
  visit "http://localhost:6666"
end

Then /^I should see "(.*)"$/ do |text|
  assert_contain /#{Regexp.escape(text)}/m
end

When(/^I enter my username "([^"]*)"$/) do |username|
  fill_in "Username", :with => username
end

When(/^I submit the form$/) do
  click_button "Register"
end

When(/^goto the userlist$/) do
  visit "http://localhost:6666/user"
end
Given /I am on the start page/ do
  visit "http://localhost:6666/foo"
end

Then /^I should see "(.*)"$/ do |text|
  assert !!(response_body =~ /#{Regexp.escape text}/m), response_body
end

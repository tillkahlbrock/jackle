Feature:
  Blahaha

  Scenario:
    Given I am on the start page
    When I enter my username "superCoolerUser"
    And I submit the form
    And goto the userlist
    Then I should see "superCoolerUser"

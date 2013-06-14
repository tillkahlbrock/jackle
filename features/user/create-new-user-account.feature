Feature: Creating a new user account
  As a visitor
  I want to create a user account
  In order to take action under my personal profile

  Scenario: Visitor receives a confirmation email when he creates a new user account
    Given I am on the start page
    When I click on the link "create new user account"
    And I enter a username
    And I enter a email address
    And I submit the form
    Then I should receive a confirmation email
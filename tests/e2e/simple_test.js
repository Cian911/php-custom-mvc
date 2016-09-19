module.exports = { // addapted from: https://git.io/vodU0
  'test-title': function(browser) {
    browser
      .url('https://ciangallagher.net')
      .waitForElementVisible('body')
      .assert.title("Cian's Blog")
      .saveScreenshot('ciangallagher-title.png')
      .end();
  },

  'test-meta': function(browser) {
    browser
      .url('https://ciangallagher.net')
      .waitForElementVisible('body')
      .assert.attributeEquals("meta[property='og:title']", "content", "https://ciangallagher.net/")
  },

  'test-login': function(browser) {
    browser
      .url('https://ciangallagher.net/login')
      .waitForElementVisible('body')
      .setValue('input[name="username"]', 'cian')
      .setValue('input[name="password"]', 'password')
      .click('button')
  },
};
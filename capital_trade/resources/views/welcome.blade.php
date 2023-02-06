@include('includes.header')
    <main>
      <div class="intro_container">
        <div class="hint_box">
          <div>
            <h3 class="hint">We Are Leading International Company In The World</h3>
            <h3 class="hint">in <span>Trading </span></h3>
          </div>
        </div>
        <div>
          <p class="company_brief">
            A mission to harness the power of Bitcoin and technology to enable individual sovereignty and eventually garner the next evolution of humanity. id imperdiet et, porttitor at sem.
          </p>
        </div>

        
        <div class="action_box">
          <div class="social">
            <a href="/" class="social_link">
              <i class="fa-brands fa-2x fa-facebook-f"></i>
            </a>
            <a href="/" class="social_link">
              <i class="fa-brands fa-2x fa-twitter"></i
            ></a>
            <a href="/" class="social_link">
              <i class="fa-brands fa-2x fa-instagram"></i>
            </a>
          </div>
          <a href="/" class="explore-btn">Explore our Packages</a>
        </div>
      </div>
      <div class="cryptohopper-web-widget" data-id="1" data-table_style="dark" data-realtime="on" data-table_length="6"></div>

      <div class="services">
        <div class="service_list_container">
          <h1 class="service_label">Capital Trade</h1>
          <div class="service_category">
            <div class="category">
              <h3 class="service_type">5+ Years Of Undefeated trade</h3>
              <h3 class="service_type">Services</h3>

              <p class="service_brief">
                Capital Trade is committed to leading a wave of change; by connecting with, educating and empowering younger generations to reimagine, redefine and reengineer their lives, and the world.
              </p>

              <a href="/" class="service_learn_more">Learn more</a>
            </div>
            <div class="category">
              <h3 class="service_type">Bot Trading</h3>
             

              <p class="service_brief">
                Cryptocurrencies are known for being incredibly volatile, with prices fluctuating dramatically even in the space of minutes. Investors also have the opportunity to take part in cryptocurrency trading around the world and at any hour of the day. Combined, these factors limit the effectiveness of human cryptocurrency trading in several ways.
              </p>

              <a href="/" class="service_learn_more">Learn more</a>
            </div>
            <div class="category">
              <h3 class="service_type">CryptoCurrency</h3>
              

              <p class="service_brief">
                Trading cryptocurrency CFDs ("contracts for difference") is a great way to diversify your portfolio and hedge risks. Primestocktrades Trading Limited has carved a niche for itself in the Crypto trading market in the United Kingdom, offering the optimal trading experience.
              </p>

              <a href="/architectural" class="service_learn_more">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="tradingview-widget-container mb-1-5m">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [{
                    "proName": "OANDA:SPX500USD",
                    "title": "S&P 500"
                },
                {
                    "proName": "OANDA:NAS100USD",
                    "title": "Nasdaq 100"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "BTC/USD"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "ETH/USD"
                }
            ],
            "colorTheme": "light",
            "isTransparent": false,
            "displayMode": "regular",
            "locale": "en"
        }
        </script>
    </div>
      <div class="case-study">
        <div class="case-box">
          <div class="case">
            <h3 class="case-title">Sustainablity</h3>

            <div class="case-content">
              <h4>Committed To Keep People's Assets Safe</h4>
              <p>
                We seek to provide access to tools and information that allows people to empower themselves (both financially and philosophically) as a means towards economic and intellectual sovereignty.
              </p>

              <a href="" class="view-case">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="tradingview-widget-container__widget"></div>
      <div class="contact">
        <div class="contact-container">
          <h3>Ready to get started?</h3>
          <div class="form">
            <form name="contact" netlify>
              <input
                type="email"
                name="email"
                placeholder="E-mail"
                class="email_input"
              />
              <button type="submit" class="submit-btn">Send request</button>
            </form>
          </div>
        </div>
      </div>
    </main>
@include('includes.footer')

   
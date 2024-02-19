![image](https://raw.githubusercontent.com/siddheshkatare/country_state_city_api/3fe0e2e744d50c23010f368cce0fc89a575feb4c/public/assets/images/world-logo.svg) 
## Country State City API

<a href="https://csc.sidsworld.co.in/" class="theme-link" target="_blank">Visit Website-<code>https://csc.sidsworld.co.in/</code></a>

<article class="docs-article" id="section-2">
    <header class="docs-header">
        <h1 class="docs-heading">APIs</h1>
        <section class="docs-intro">
            <p>To begin using our API, simply explore our documentation. Our endpoints are open and available for anyone to access, making it easy for you to integrate geographical data into your applications without any authentication requirements.</p>
        </section>
    </header>
    <section class="docs-section" id="item-2-1">
        <h2 class="section-heading">Regions</h2>
        <p>Get details about regions, including id, names, translations, and wikiDataId. </p>
        <h4>Get All Regions:</h4>
        <p>Get a list of all regions</p>
        <p>Method: <code>GET</code></p>
        <p>Path: <code>/api/regions</code></p>
        <p>Example: <a href="https://csc.sidsworld.co.in/api/regions" class="theme-link" target="_blank"><code>/api/regions</code></a></p>
        <h5>Response:</h5>
        <div class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"regions"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Africa"</span>,
            <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"kr\":\"아프리카\",\"pt-BR\":\"África\",\"pt\":\"África\",\"nl\":\"Afrika\",\"hr\":\"Afrika\",\"fa\":\"آفریقا\",\"de\":\"Afrika\",\"es\":\"África\",\"fr\":\"Afrique\",\"ja\":\"アフリカ\",\"it\":\"Africa\",\"cn\":\"非洲\",\"tr\":\"Afrika\"}"</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q15"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
        </div>
    </section>
    <section class="docs-section" id="item-2-2">
        <h2 class="section-heading">Subregions</h2>
        <p>Get details about subregions, including is names, region_id, translations and wikiDataId.
        </p>
        <h4>Get All Subregions:</h4>
        <p>Get a list of all subregions</p>
        <p>Method: <code>GET</code></p>
        <p>Path: <code>/api/subregions</code></p>
        <p>Example: <a href="https://csc.sidsworld.co.in/api/subregions" class="theme-link" target="_blank"><code>/api/subregions</code></a></p>
        <h5>Response:</h5>
        <div class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"subregions"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Afghanistan"</span>,
            <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"korean\":\"서아프리카\",\"portuguese\":\"África Ocidental\",\"dutch\":\"West-Afrika\",\"croatian\":\"Zapadna Afrika\",\"persian\":\"غرب آفریقا\",\"german\":\"Westafrika\",\"spanish\":\"África Occidental\",\"french\":\"Afrique de l'Ouest\",\"japanese\":\"西アフリカ\",\"italian\":\"Africa occidentale\",\"chinese\":\"西非\"}"</span>,
            <span class="hljs-attr">"region_id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
        </div>
        </br>
        <h4>Get Subregion By Region Id:</h4>
        <p>Get all subregions that comes under provided region id</p>
        <p>Method: <code>GET</code></p>
        <p>Path: <code>/api/subregions</code></p>
        <p>Parameters: <code>regionId</code></p>
        <p>Example: <a href="https://csc.sidsworld.co.in/api/subregions?regionId=1" class="theme-link" target="_blank"><code>/api/subregions?regionId=1</code></a></p>
        <h5>Response:</h5>
        <div class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"subregions"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Afghanistan"</span>,
            <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"korean\":\"서아프리카\",\"portuguese\":\"África Ocidental\",\"dutch\":\"West-Afrika\",\"croatian\":\"Zapadna Afrika\",\"persian\":\"غرب آفریقا\",\"german\":\"Westafrika\",\"spanish\":\"África Occidental\",\"french\":\"Afrique de l'Ouest\",\"japanese\":\"西アフリカ\",\"italian\":\"Africa occidentale\",\"chinese\":\"西非\"}"</span>,
            <span class="hljs-attr">"region_id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
        </div>
    </section>
    <section class="docs-section" id="item-2-3">
        <h2 class="section-heading">Countries</h2>
        <p>Get details about countries, including names, ISO codes, translations, etc. </p>
        <h4>Get All Countries:</h4>
        <p>Get a list of all countries</p>
        <p>Method: <code>GET</code></p>
        <p>Path: <code>/api/countries</code></p>
        <p>Example: <a href="https://csc.sidsworld.co.in/api/countries" class="theme-link" target="_blank"><code>/api/countries</code></a></p>
        <h5>Response:</h5>
        <div class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"countries"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Afghanistan"</span>,
            <span class="hljs-attr">"iso3"</span>: <span class="hljs-number">AFG</span>,
            <span class="hljs-attr">"numeric_code"</span>: <span class="hljs-string">"004"</span>,
            <span class="hljs-attr">"iso2"</span>: <span class="hljs-string">"AF"</span>,
            <span class="hljs-attr">"phonecode"</span>: <span class="hljs-string">"93"</span>,
            <span class="hljs-attr">"capital"</span>: <span class="hljs-string">"Kabul"</span>,
            <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"AFN"</span>,
            <span class="hljs-attr">"currency_name"</span>: <span class="hljs-string">"Afghan afghani"</span>,
            <span class="hljs-attr">"currency_symbol"</span>: <span class="hljs-string">"؋"</span>,
            <span class="hljs-attr">"tld"</span>: <span class="hljs-string">".af"</span>,
            <span class="hljs-attr">"native"</span>: <span class="hljs-string">"افغانستان"</span>,
            <span class="hljs-attr">"region"</span>: <span class="hljs-string">"Asia"</span>,
            <span class="hljs-attr">"region_id"</span>: <span class="hljs-number">3</span>,
            <span class="hljs-attr">"subregion"</span>: <span class="hljs-string">"Southern Asia"</span>,
            <span class="hljs-attr">"subregion_id"</span>: <span class="hljs-number">14</span>,
            <span class="hljs-attr">"nationality"</span>: <span class="hljs-string">"Afghan"</span>,
            <span class="hljs-attr">"timezones"</span>: <span class="hljs-string">"[{\"zoneName\":\"Asia/Kabul\",\"gmtOffset\":16200,\"gmtOffsetName\":\"UTC+04:30\",\"abbreviation\":\"AFT\",\"tzName\":\"Afghanistan Time\"}]"</span>,
            <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"kr\":\"아프가니스탄\",\"pt-BR\":\"Afeganistão\",\"pt\":\"Afeganistão\",\"nl\":\"Afghanistan\",\"hr\":\"Afganistan\",\"fa\":\"افغانستان\",\"de\":\"Afghanistan\",\"es\":\"Afganistán\",\"fr\":\"Afghanistan\",\"ja\":\"アフガニスタン\",\"it\":\"Afghanistan\",\"cn\":\"阿富汗\",\"tr\":\"Afganistan\"}"</span>,
            <span class="hljs-attr">"latitude"</span>: <span class="hljs-string">"33.00000000"</span>,
            <span class="hljs-attr">"longitude"</span>: <span class="hljs-string">"65.00000000"</span>,
            <span class="hljs-attr">"emoji"</span>: <span class="hljs-string">"🇦🇫"</span>,
            <span class="hljs-attr">"emojiU"</span>: <span class="hljs-string">"U+1F1E6 U+1F1EB"</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
        </div>
        </br>
        <h4>Get Country By Id:</h4>
        <p>Get single country by id</p>
        <p>Method: <code>GET</code></p>
        <p>Path: <code>/api/countries</code></p>
        <p>Parameters: <code>id</code></p>
        <p>Example: <a href="https://csc.sidsworld.co.in/api/countries?id=1" class="theme-link" target="_blank"><code>/api/countries?id=1</code></a></p>
        <h5>Response:</h5>
        <div class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"country"</span>:{
        <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Afghanistan"</span>,
        <span class="hljs-attr">"iso3"</span>: <span class="hljs-number">AFG</span>,
        <span class="hljs-attr">"numeric_code"</span>: <span class="hljs-string">"004"</span>,
        <span class="hljs-attr">"iso2"</span>: <span class="hljs-string">"AF"</span>,
        <span class="hljs-attr">"phonecode"</span>: <span class="hljs-string">"93"</span>,
        <span class="hljs-attr">"capital"</span>: <span class="hljs-string">"Kabul"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"AFN"</span>,
        <span class="hljs-attr">"currency_name"</span>: <span class="hljs-string">"Afghan afghani"</span>,
        <span class="hljs-attr">"currency_symbol"</span>: <span class="hljs-string">"؋"</span>,
        <span class="hljs-attr">"tld"</span>: <span class="hljs-string">".af"</span>,
        <span class="hljs-attr">"native"</span>: <span class="hljs-string">"افغانستان"</span>,
        <span class="hljs-attr">"region"</span>: <span class="hljs-string">"Asia"</span>,
        <span class="hljs-attr">"region_id"</span>: <span class="hljs-number">3</span>,
        <span class="hljs-attr">"subregion"</span>: <span class="hljs-string">"Southern Asia"</span>,
        <span class="hljs-attr">"subregion_id"</span>: <span class="hljs-number">14</span>,
        <span class="hljs-attr">"nationality"</span>: <span class="hljs-string">"Afghan"</span>,
        <span class="hljs-attr">"timezones"</span>: <span class="hljs-string">"[{\"zoneName\":\"Asia/Kabul\",\"gmtOffset\":16200,\"gmtOffsetName\":\"UTC+04:30\",\"abbreviation\":\"AFT\",\"tzName\":\"Afghanistan Time\"}]"</span>,
        <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"kr\":\"아프가니스탄\",\"pt-BR\":\"Afeganistão\",\"pt\":\"Afeganistão\",\"nl\":\"Afghanistan\",\"hr\":\"Afganistan\",\"fa\":\"افغانستان\",\"de\":\"Afghanistan\",\"es\":\"Afganistán\",\"fr\":\"Afghanistan\",\"ja\":\"アフガニスタン\",\"it\":\"Afghanistan\",\"cn\":\"阿富汗\",\"tr\":\"Afganistan\"}"</span>,
        <span class="hljs-attr">"latitude"</span>: <span class="hljs-string">"33.00000000"</span>,
        <span class="hljs-attr">"longitude"</span>: <span class="hljs-string">"65.00000000"</span>,
        <span class="hljs-attr">"emoji"</span>: <span class="hljs-string">"🇦🇫"</span>,
        <span class="hljs-attr">"emojiU"</span>: <span class="hljs-string">"U+1F1E6 U+1F1EB"</span>,
        <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
    },
}
</code>
</pre>
        </div>
    </section>
    <section class="docs-section" id="item-2-4">
        <h2 class="section-heading">States</h2>
        <p>Get a list of states by country, including names, country_id, country_code, type, etc. </p>
        <h4>Get States By Country Id :</h4>
        <p>Get a list of all states by country id</p>
        <p>Method: <code>GET</code></p>
        <p>Path: <code>/api/states/{countryId}</code></p>
        <p>Example: <a href="https://csc.sidsworld.co.in/api/states/101" class="theme-link" target="_blank"><code>/api/countries/101</code></a></p>
        <h5>Response:</h5>
        <div class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"states"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Andaman and Nicobar Islands"</span>,
            <span class="hljs-attr">"country_id"</span>: <span class="hljs-number">101</span>,
            <span class="hljs-attr">"country_code"</span>: <span class="hljs-string">"IN"</span>,
            <span class="hljs-attr">"fips_code"</span>: <span class="hljs-string">"01"</span>,
            <span class="hljs-attr">"iso2"</span>: <span class="hljs-string">"AF"</span>,
            <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Union territory"</span>,
            <span class="hljs-attr">"latitude"</span>: <span class="hljs-string">"11.74008670"</span>,
            <span class="hljs-attr">"longitude"</span>: <span class="hljs-string">"92.65864010"</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
        </div>
    </section>
    <section class="docs-section" id="item-2-5">
        <h2 class="section-heading">City</h2>
        <p>Get list of all cities in a state, including names, state_id, state_code, country_id, etc.
        </p>
        <h4>Get All Cities:</h4>
        <p>Get a list of all cities</p>
        <p>Method: <code>GET</code></p>
        <p>Path: <code>/api/cities</code></p>
        <p>Example: <a href="https://csc.sidsworld.co.in/api/cities/4008" class="theme-link" target="_blank"><code>/api/cities/4008</code></a></p>
        <h5>Response:</h5>
        <div class="docs-code-block">
            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"countries"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Andaman and Nicobar Islands"</span>,
            <span class="hljs-attr">"state_id"</span>: <span class="hljs-number">4008</span>,
            <span class="hljs-attr">"state_code"</span>: <span class="hljs-string">"MH"</span>,
            <span class="hljs-attr">"country_id"</span>: <span class="hljs-number">101</span>,
            <span class="hljs-attr">"country_code"</span>: <span class="hljs-string">"IN"</span>,
            <span class="hljs-attr">"latitude"</span>: <span class="hljs-string">"21.25665000"</span>,
            <span class="hljs-attr">"longitude"</span>: <span class="hljs-string">"77.51006000"</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q490886"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
        </div>
    </section>
</article>
<article class="docs-article" id="section-3">
    <header class="docs-header">
        <h1 class="docs-heading">Key Features</h1>
        <section class="docs-intro">
            <p>Our API, built on Laravel, offers fast, reliable performance with comprehensive, regularly updated geographical data, ensuring easy integration for developers.</p>
        </section>
    </header>
    <section class="docs-section" id="item-3-1">
        <h2 class="section-heading">Efficiency</h2>
        <p>Our API, built on Laravel, guarantees rapid response times and dependable performance, ensuring a seamless experience for your applications.</p>
    </section>
    <section class="docs-section" id="item-3-2">
        <h2 class="section-heading">Comprehensive Data</h2>
        <p>Access an extensive database containing detailed information on countries, states, and cities across the globe, catering to diverse geographical needs.</p>
    </section>
    <section class="docs-section" id="item-3-3">
        <h2 class="section-heading">Easy Integration</h2>
        <p>Seamlessly integrate our API into your applications with ease, thanks to our meticulously documented endpoints and user-friendly data structure.</p>
    </section>
    <section class="docs-section" id="item-3-4">
        <h2 class="section-heading">Regular Updates</h2>
        <p>Stay up-to-date with the latest geographical information as our database undergoes frequent updates, ensuring that you always have access to accurate and current data.</p>
    </section>
</article>
<article class="docs-article" id="section-4">
    <header class="docs-header">
        <h1 class="docs-heading">Start Building Today</h1>
        <section class="docs-intro">
            <p>Unlock the power of geographical data with the Country State City API. Dive into our documentation and start building innovative applications that leverage the richness of location-based information.</p>
        </section>
    </header>
</article>
<article class="docs-article" id="section-5">
    <header class="docs-header">
        <h1 class="docs-heading">Credits</h1>
        <section class="docs-intro">
            <p>We extend our gratitude to <a href="https://github.com/dr5hn" target="_blank" rel="noopener noreferrer">Darshan Gada</a> for providing the open-source database used in our API. You can find the repository at
                <a href="http://github.com/dr5hn/countries-states-cities-database" target="_blank" rel="noopener noreferrer">
                                    https://github.com/dr5hn/countries-states-cities-database</a>.
            </p>
        </section>
    </header>
</article>
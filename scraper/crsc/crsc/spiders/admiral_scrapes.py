# -*- coding: utf-8 -*-
import scrapy


class AdmiralScrapesSpider(scrapy.Spider):
    name = "admiral-scrapes"
    allowed_domains = ["congressrental.com.au"]
    start_urls = (
        'http://www.congressrental.com.au/',
    )

    def parse(self, response):
        pass

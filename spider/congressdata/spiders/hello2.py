# -*- coding: utf-8 -*-
import scrapy


class Hello2Spider(scrapy.Spider):
    name = "hello2"
    allowed_domains = ["congressrental.com.au"]
    start_urls = (
        'http://www.congressrental.com.au/',
    )

    def parse(self, response):
        pass

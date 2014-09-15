# -*- coding: utf-8 -*-
import scrapy


class HelloSpider(scrapy.Spider):
    name = "hello"
    allowed_domains = ["http://congressrental.com.au"]
    start_urls = (
        'http://www.http://congressrental.com.au/',
    )

    def parse(self, response):
        pass

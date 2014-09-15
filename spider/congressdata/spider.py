#!/usr/bin/python
from scrapy.spider     import BaseSpider
from scrapy.selector     import HtmlXPathSelector
from nettuts.items    import NettutsItem
from scrapy.http    import Request

name         = "idontcare"
allowed_domains    = ["congressrental.com.au"]
start_urls    = ["http://congressrental.com.au"]


def parse(self, response):
    hxs     = HtmlXPathSelector(response)
    pages     = hxs.select('//div[@id="content"]/text()').extract()
    for title in titles:
        item = NettutsItem()
        item["title"] = title
        yield item


# def parse(self, response):
#     hxs     = HtmlXPathSelector(response)
#     titles     = hxs.select('//h1[@class="post_title"]/a/text()').extract()
#     for title in titles:
#         item = NettutsItem()
#         item["title"] = title
#         yield item
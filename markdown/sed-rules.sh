cat posts3.txt |
sed 's/\(^M\\$\|^\\\)//g'  |
sed 's/^##!TITLE.*$/\r\n============================================================\r\n&/g' |
sed 's/^##!CONTENT:[ \t]*/&\r\n============================================================\r\n/g' |
sed 's/\(^##!\|^##\)/<[/g'  |
sed 's/<p><strong>\(.*\)<\/strong><\/p>/###\1/g'  |
sed 's/<p><br\/><\/p>/\r\n/g' |
sed 's/\(<br>\|<br \/>\)/\n/g' |
sed 's/\(<p>\|<\/p>\)/\r\n\r\n/g' |
sed 's/\(<b>\|<\/b>\|<b \/>\)/**/g' |
sed 's/\(<i>\|<\/i>\|<i \/>\)/*/g' |
tr -s '\n\r'  |
sed 's/<strong class="sub-title-header">\(.*\)<\/strong>/####\1/g' |
sed 's/^###\([^#]\)/## \1/g'  |
sed 's/<strong>\(.*\)<\/strong>/####\1/g' |
sed 's/<img .*src/<img src/g' |
sed 's/<a .*href/<a href/g' |
sed 's/\(<img src="[^"]*"\).*>/\1>/g' |
sed 's/\(<a href="[^"]*"\).*>/\1>/g' |
sed 's/\(^\|[ ]*\)<\(div\|p\|span\|<!--\).*>//g'  |
sed 's/• / - /g' |
sed 's/ • / - /g' |
sed 's/^ - [ ]*/ - /g' |
sed 's/<a name=".*>####\([0-9]\.\)/\1 /g' |
sed 's/&nbsp;//g' |
sed 's/^\([0-9]\..*\)<\/a>/\1/g' |
grep -v '<!-- Instance' |
tr -s '\r\n' |
sed 's/^..TITLE:.*$/--file--\r\n&/g' |
sed 's/^[=]*$//g' |
tr -s '\n' |
sed 's/<\/div>//g' > seds.txt

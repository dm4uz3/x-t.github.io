function ReadFile(file)
{
    x = ""
    while ((getline y < file) > 0) {
        x = x FS y
    }
    return x
}

BEGIN {
    r_noscript = ReadFile("resources/noscript.html")
    r_contact = ReadFile("resources/contact.html")
    r_navbar = ReadFile("resources/navbar.html")
    r_ripterry = ReadFile("resources/rip_terry.html")
    r_cat = ReadFile("resources/cat.html")
    r_copyright = ReadFile("resources/copyright.html")
    r_head = ReadFile("resources/stdhead.html")
    r_terry = ReadFile("resources/terry2.html")
    r_oss = ReadFile("resources/oss.html")
}

{
gsub(/<!-- NOSCRIPT -->/, r_noscript)
gsub(/<!-- CONTACT -->/, r_contact)
gsub(/<!-- NAVBAR -->/, r_navbar)
gsub(/<!-- RIP_TERRY -->/, r_ripterry)
gsub(/<!-- CAT -->/, r_cat)
gsub(/<!-- COPYRIGHT -->/, r_copyright)
gsub(/<!-- HEAD -->/, r_head)
gsub(/<!-- TERRY -->/, r_terry)
gsub(/<!-- OSS -->/, r_oss)
print
}

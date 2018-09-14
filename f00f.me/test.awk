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
}

{
gsub(/<!-- NOSCRIPT -->/, r_noscript)
gsub(/<!-- CONTACT -->/, r_contact)
gsub(/<!-- NAVBAR -->/, r_navbar)
gsub(/<!-- RIP_TERRY -->/, r_ripterry)
gsub(/<!-- CAT -->/, r_cat)
gsub(/<!-- COPYRIGHT -->/, r_copyright)
gsub(/<!-- HEAD -->/, r_head)
print
}

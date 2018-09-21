function ReadFile(file)
{
    x = ""
    while ((getline y < file) > 0) {
        x = x FS y FS "\n"
    }
    return x
}

BEGIN {
    r_noscript = ReadFile("resources/noscript.html")
    r_overlays = ReadFile("resources/overlays.html")
    r_navbar = ReadFile("resources/navbar.html")
    r_ripterry = ReadFile("resources/rip_terry.html")
    r_cat = ReadFile("resources/cat.html")
    r_copyright = ReadFile("resources/copyright.html")
    r_head = ReadFile("resources/stdhead.html")
    r_terry = ReadFile("resources/terry2.html")
    r_oss = ReadFile("resources/oss.html")
    r_comfycat = ReadFile("resources/comfycat.html")
    r_setup = ReadFile("resources/setup.html")
    r_header = ReadFile("resources/header.html")

    citation_i = 1
    citations = ""
}

/<!-- DESC / {
    gsub(/<!-- DESC /, "")
    gsub(/ -->/, "")
    gsub(/^[ \t]+/, "", $0)
    printf "<meta name=\"description\" content=%s>\n", $0
    next
}

/<!-- CITE / {
    gsub(/<!-- CITE /, "")
    gsub(/ -->/, "")
    gsub(/^[ \t]+/, "", $0)
    gsub(/"\""/, "", $0);
    citations = sprintf("%s\n<p id=\"c-%d\"><small>[%d]: %s</small></p>", citations, citation_i, citation_i, substr($0, 2, length($0) - 2))
    printf "<span class=\"sup\"><a href=\"#c-%d\" onclick=\"lightcite('c-%d')\">[%d]</a></span>\n", citation_i, citation_i, citation_i
    citation_i++
    next
}

{
    gsub(/<!-- NOSCRIPT -->/, r_noscript)
    gsub(/<!-- OVERLAYS -->/, r_overlays)
    gsub(/<!-- NAVBAR -->/, r_navbar)
    gsub(/<!-- RIP_TERRY -->/, r_ripterry)
    gsub(/<!-- CAT -->/, r_cat)
    gsub(/<!-- COPYRIGHT -->/, r_copyright)
    gsub(/<!-- HEAD -->/, r_head)
    gsub(/<!-- TERRY -->/, r_terry)
    gsub(/<!-- OSS -->/, r_oss)
    gsub(/<!-- COMFYCAT -->/, r_comfycat)
    gsub(/<!-- SETUP -->/, r_setup)
    gsub(/<!-- HEADER -->/, r_header)
    gsub(/<!-- CITATIONS -->/, citations)
    print
}

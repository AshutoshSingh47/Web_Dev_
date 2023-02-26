function myLang(evt, lang) {
    let tabContent = document.getElementsByClassName('tabContents');
    for (let i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = 'none';
    }
    
    console.log("a");
    let tabLinks = document.getElementsByClassName('btn');
    for (let i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active", " ");
        console.log("b");
    }

    document.getElementById(lang).style.display = "block";
    evt.currentTarget.className += " active";
    console.log("c");
}

function projectClick() {
    setActive('project')
   const div =  this.document.getElementById("displayTag");
   const Name =  this.document.getElementById("clickedName");
   Name.innerText = 'Project'
   
    // div.innerHTML = "   \n" +
    //     "                <p>Project ID</p>" +
    //     "                <p>Title</p>" +
    //     "                <p>Leader</p>" +
    //     "                <p>Description</p>" +
    //     "                <p>Edit</p>" +
    //     "            \n" +
    //     "            <p>1</p>" +
    //     "                <p>Project1</p>" +
    //     "                <p>Germany</p>" +
    //     "                <p>Test text Test text Test text Test text Test text Test text Test text Test text Test text</p>" +
    //     "                <p><button>edit</button></p>\n" +
    //     "                <td>2</td>" +
    //     "                <td>Project2</td>" +
    //     "                <td>Mexico</td>" +
    //     "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>" +
    //     "                <td><button>edit</button></td>" +
    //     "                <td>3</td>\n" +
    //     "                <td>Project3</td>\n" +
    //     "                <td>Austria</td>\n" +
    //     "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
    //     "                <td><button>edit</button></td>\n" +
    //     "            </tr>\n"+
    //     "            <tr>\n" +
    //     "                <td>4</td>\n" +
    //     "                <td>Project4</td>\n" +
    //     "                <td>Austria</td>\n" +
    //     "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
    //     "                <td><button>edit</button></td>\n" +
    //     "            </tr>\n"+
    //     "            <tr>\n" +
    //     "                <td>5</td>\n" +
    //     "                <td>Project5</td>\n" +
    //     "                <td>Austria</td>\n" +
    //     "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
    //     "                <td><button>edit</button></td>\n" +
    //     "            </tr>\n"

}

function eventClick() {
    setActive('event')
    const table =  this.document.getElementById("displayTag");
    const Name =  this.document.getElementById("clickedName");
    Name.innerText = 'Event'
    table.innerHTML = "    <tr>\n" +
        "                <th>Event ID</th>\n" +
        "                <th>Title</th>\n" +
        "                <th>Time</th>\n" +
        "                <th>Description</th>\n" +
        "                <th>Edit</th>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>1</td>\n" +
        "                <td>Event1</td>\n" +
        "                <td>Monday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>2</td>\n" +
        "                <td>Event2</td>\n" +
        "                <td>Tuesday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>3</td>\n" +
        "                <td>Event3</td>\n" +
        "                <td>Sunday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"+
        "            <tr>\n" +
        "                <td>3</td>\n" +
        "                <td>Event4</td>\n" +
        "                <td>Friday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"+
        "            <tr>\n" +
        "                <td>4</td>\n" +
        "                <td>Event5</td>\n" +
        "                <td>Monday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"+
    "            <tr>\n" +
    "                <td>5</td>\n" +
    "                <td>Event6</td>\n" +
    "                <td>Monday</td>\n" +
    "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
    "                <td><button>edit</button></td>\n" +
    "            </tr>\n"+
    "            <tr>\n" +
    "                <td>6</td>\n" +
    "                <td>Event7</td>\n" +
    "                <td>Monday</td>\n" +
    "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
    "                <td><button>edit</button></td>\n" +
    "            </tr>\n"

}

function contactClick() {
    setActive('contact')
    const table =  this.document.getElementById("displayTag");
    const Name =  this.document.getElementById("clickedName");
    Name.innerText = 'Contact'
    table.innerHTML = "    <tr>\n" +
        "                <th>Name</th>\n" +
        "                <th>Phone</th>\n" +
        "                <th>emailaddress</th>\n" +
        "                <th>Edit</th>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>Alfreds Futterkiste</td>\n" +
        "                <td>6822394212</td>\n" +
        "                <td>home@gmail.com</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>Centro comercial Moctezuma</td>\n" +
        "                <td>6822394212</td>\n" +
        "                <td>home@gmail.com</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>Ernst Handel</td>\n" +
        "                <td>R6822394212</td>\n" +
        "                <td>home@gmail.com</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"
}

function refresUserName() {
   const name =  sessionStorage.getItem("username")
    nameString = name?  name:  "Null";
    this.document.getElementById('username').innerText = nameString
}

function setActive(tag) {
    const a = this.document.getElementById(tag);
    const vmenue = this.document.getElementsByClassName('vertical-menu')
    const clear_as = vmenue[0].getElementsByTagName("a");
    for(let clear_a of clear_as){
        clear_a.removeAttribute("class")
    }
    a.setAttribute("class","active");

}

function signout() {
        sessionStorage.clear();
        window.location.href="index.html"
}

function ifLogin() {
    if(sessionStorage.getItem("name")){
        return true
    }else return false;
}
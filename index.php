<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Store App</title>
        <link rel="stylesheet" href="_/css/jquery.mobile.css" type="text/css"/>
        <link rel="stylesheet" href="_/css/styles.css" type="text/css"/>
    </head>
    <body>
        <div data-role="page" data-title="Store App :: Login" id="login">
            <div data-role="header">
                <h1>Login</h1>
            </div>
            <div data-role="content">
                <form action="#">
                    <label for="name">Username:</label> <input type="text" id="name"/>
                    <label for="name">Password:</label> <input type="password" id="name"/>
                    <a href="#home" data-role="button">Login</a>
                </form>
            </div>
        </div>
        
        <div data-role="page" data-title="Store App :: Home" id="home">
            <div data-role="header">
                <a href="#login" data-role="button">Logout</a>
                <h1>Stores</h1>
            </div>
            <div data-role="content">
                <ul data-role="listview" data-autodividers="true" data-filter="true">
                    <li><a href="#selection" data-transition="slide">Store 01</a></li>
                    <li><a href="#selection" data-transition="slide">Store 02</a></li>
                    <li><a href="#selection" data-transition="slide">Store 03</a></li>
                    <li><a href="#selection" data-transition="slide">Store 04</a></li>
                    <li><a href="#selection" data-transition="slide">Store 05</a></li>
                    <li><a href="#selection" data-transition="slide">Store 06</a></li>
                    <li><a href="#selection" data-transition="slide">Store 07</a></li>
                    <li><a href="#selection" data-transition="slide">Store 08</a></li>
                    <li><a href="#selection" data-transition="slide">Store 09</a></li>
                    <li><a href="#selection" data-transition="slide">Store 10</a></li>
                    <li><a href="#selection" data-transition="slide">Store 11</a></li>
                    <li><a href="#selection" data-transition="slide">Store 12</a></li>
                    <li><a href="#selection" data-transition="slide">Store 13</a></li>
                    <li><a href="#selection" data-transition="slide">Store 14</a></li>
                    <li><a href="#selection" data-transition="slide">Store 15</a></li>
                    <li><a href="#selection" data-transition="slide">Store 16</a></li>
                    <li><a href="#selection" data-transition="slide">Store 17</a></li>
                    <li><a href="#selection" data-transition="slide">Store 18</a></li>
                    <li><a href="#selection" data-transition="slide">Store 19</a></li>
                    <li><a href="#selection" data-transition="slide">Store 20</a></li>
                    <li><a href="#selection" data-transition="slide">Store 21</a></li>
                    <li><a href="#selection" data-transition="slide">Store 22</a></li>
                    <li><a href="#selection" data-transition="slide">Store 23</a></li>
                    <li><a href="#selection" data-transition="slide">Store 24</a></li>
                    <li><a href="#selection" data-transition="slide">Store 25</a></li>
                    <li><a href="#selection" data-transition="slide">Store 26</a></li>
                    <li><a href="#selection" data-transition="slide">Store 27</a></li>
                    <li><a href="#selection" data-transition="slide">Store 28</a></li>
                    <li><a href="#selection" data-transition="slide">Store 29</a></li>
                    <li><a href="#selection" data-transition="slide">Store 30</a></li>
                </ul>
            </div>
        </div>
        <div data-role="page" data-title="Store App :: Home" id="selection">
            <div data-role="header">
                <a data-role="button" data-rel="back" data-icon="back" data-iconpos="notext">Back</a>
                <a href="#login" data-role="button" data-icon="home" data-iconpos="notext">Home</a>
                <h1>Departments</h1>
            </div>
            <div data-role="content">
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <a href="#sales">
                        <div class="movietitle">Weekly Sales</div>
                        <img src="_/images/weeklySales.jpg" alt="Video: What is Adobe Edge?" width="100px">
                    </a>
                </div>
                <div class="ui-block-b">
                    <a href="#sales">
                        <div class="movietitle">Grocery</div>
                        <img src="_/images/grocery.jpg" alt="Video: Understanding the Edge Interface" width="100px">
                    </a>
                </div>
                <div class="ui-block-a">
                    <a href="#sales">
                        <div class="movietitle">Meat</div>
                        <img src="_/images/meat.jpg" alt="Video: Create Toggle button" width="100px">
                    </a>
                </div>
                <div class="ui-block-b">
                    <a href="#sales">
                        <div class="movietitle">Dairy</div>
                        <img src="_/images/dairy.jpg" alt="Video: Build an image uploader" width="100px">
                    </a>
                </div>
                <div class="ui-block-a">
                    <a href="#sales">
                        <div class="movietitle">Frozen</div>
                        <img src="_/images/frozen.jpg" alt="Video: Create Toggle button" width="100px">
                    </a>
                </div>
                <div class="ui-block-b">
                    <a href="#sales">
                        <div class="movietitle">Deli</div>
                        <img src="_/images/deli.jpg" alt="Video: Build an image uploader" width="100px">
                    </a>
                </div>
                <div class="ui-block-a">
                    <a href="#sales">
                        <div class="movietitle">Produce</div>
                        <img src="_/images/produce.jpg" alt="Video: Create Toggle button" width="100px">
                    </a>
                </div>
                <div class="ui-block-b">
                    <a href="#sales">
                        <div class="movietitle">Team/Labor</div>
                        <img src="_/images/teamlabor.jpg" alt="Video: Build an image uploader" width="100px">
                    </a>
                </div>
            </div>
            </div>
        </div>
        
        <div data-role="page" id="sales" data-title="Store App :: Sales">
            <div data-role="header">
                <a data-role="button" data-rel="back" data-icon="back" data-iconpos="notext">Back</a>
                <a href="#login" data-role="button" data-icon="home" data-iconpos="notext">Home</a>
                <h1>Sales</h1>
            </div>
            <div data-role="content">
                <table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive salesDetailTable">
                  <thead>
                    <tr>
                      <th data-priority="1">Date</th>
                      <th data-priority="persist">Current Year</th>
                      <th data-priority="2">Prev YR 1</th>
                      <th data-priority="3"><abbr title="Rotten Tomato Rating">Prev YR 2</abbr></th>
                      <th data-priority="4">Prev YR 3</th>
                      <th data-priority="5">Projection</th>
                      <th data-priority="6">+/-</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Week 1</th>
                      <td>$300</td>
                      <td>$150</td>
                      <td>$100</td>
                      <td>$50</td>
                      <td>$200</td>
                      <td>+</td>
                    </tr>
                    <tr>
                      <th>Week 2</th>
                      <td>$300</td>
                      <td>$150</td>
                      <td>$100</td>
                      <td>$50</td>
                      <td>$250</td>
                      <td>+</td>
                    </tr>
                    <tr>
                      <th>Week 3</th>
                      <td>$300</td>
                      <td>$150</td>
                      <td>$100</td>
                      <td>$50</td>
                      <td>$300</td>
                      <td>=</td>
                    </tr>
                    <tr>
                      <th>Week 4</th>
                      <td>$300</td>
                      <td>$150</td>
                      <td>$100</td>
                      <td>$50</td>
                      <td>$270</td>
                      <td>+</td>
                    </tr>
                    <tr>
                      <th>Week 5</th>
                      <td>$300</td>
                      <td>$150</td>
                      <td>$100</td>
                      <td>$50</td>
                      <td>$400</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <th>Week 6</th>
                      <td>$300</td>
                      <td>$150</td>
                      <td>$100</td>
                      <td>$50</td>
                      <td>$500</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <th>Week 7</th>
                      <td>$300</td>
                      <td>$150</td>
                      <td>$100</td>
                      <td>$50</td>
                      <td>$300</td>
                      <td>=</td>
                    </tr>
                    <tr>
                      <th>Week 8</th>
                      <td>$300</td>
                      <td>$150</td>
                      <td>$100</td>
                      <td>$50</td>
                      <td>$200</td>
                      <td>+</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td>$2,400.00</td>
                      <td>$1,200.00</td>
                      <td>$800</td>
                      <td>$400.00</td>
                      <td>$2,425.00</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <th>% Inc / Dec</th>
                      <td>50%</td>
                      <td>33%</td>
                      <td>50%</td>
                      <td>Base</td>
                      <td>-0.01%</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <script src="_/javascript/jquery.js"></script>
        <script src="_/javascript/jquery.mobile.js"></script>
    </body>
</html>

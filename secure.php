<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
      SQL Injection Demo
    </title>
  </head>
 <!--

This piece of awesomeness wrought by:

Sagar Savla - http://sagz.in (dedicated to V.K.S.)
-->
  <body>
    <h1 align="center">
      Secure form
    </h1><br>
    <form name="cont" method="post" action="secprocess.php" id="cont">
      <center>
        <table>
          <tr>
            <td align="right">
               <input type="reset" value="Clear"> Username:
            </td>
            <td>
              <input type="text" required name="user" placeholder="User id" maxlength="10" size = "15" >
            </td>
          </tr>
          <tr>
            <td align="right">
              Password:
			  <br/>
			  <br/>
            </td>
            <td>
              <input id="pass" type="text" required placeholder="Password" name="pass" maxlength="10" size " 15 "><br/><br/>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><br/>
              <input type="submit" value="Submit Information">
            </td>
          </tr>
        </table>
      </center>
    </form>
  </body>
</html>
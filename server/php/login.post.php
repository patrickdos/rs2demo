<?PHP
require_once 'sdk.class.php';

$loginUsername = isset($_POST["un"]) ? $_POST["un"] : "";
$loginPassword = isset($_POST["pa"]) ? $_POST["pa"] : "";
$bucket = isset($_POST["bucket"]) ? $_POST["bucket"] : "" ;

if ( $_POST["un"] == "" || $_POST["pa"] == "" || $_POST["bucket"] == "" )
	{
	echo "AccessKey ,secretKey or bucket can't be empty";
	exit(0) ;
	}
	

require_once 'sdk.class.php';
$s3 = new AmazonS3($loginUsername,$loginPassword );


$host="demo.scality.com";
$uri = "";
$aclHeaderToSign = "";
$contentMD5 = "" ;
$contentType = "" ;
$method = "GET";
$resource = "/".$bucket;

$httpDate = gmdate("D, d M Y H:i:s O", time()) ;
$stringToSign = "$method\n$contentMD5\n$contentType\n$httpDate\n$aclHeaderToSign$resource";
$signature =  base64_encode(mhash(MHASH_SHA1,$stringToSign,$loginPassword));

$uri = "$host$resource";
$curl = curl_init(); 
$header[] = "Authorization: AWS $loginUsername:$signature" ; 
$header[] = "Date: $httpDate";

curl_setopt ($curl, CURLOPT_URL, $uri);
//curl_setopt ($curl, CURLOPT_FAILONERROR, 1);
curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($curl, CURLOPT_HEADER, 0);
curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_TIMEOUT, 10); 
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
$data =  curl_exec($curl);
$resultCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl); 

$xml = simplexml_load_string($data);

if( $resultCode == "200" )
    {
	  session_start();
	  $_SESSION['AWS_KEY'] =  $loginUsername;
	  $_SESSION['AWS_SECRET_KEY'] =  $loginPassword;
	  $_SESSION['BUCKET'] = $bucket ;
	  $_SESSION['Token'] = md5($loginUsername);
     	  echo "success";
    } 
    else{
	if ( $resultCode == "404" )
		{
		if (  $xml->Code == "NoSuchBucket" )	
			{			
			if ($s3->create_bucket($bucket) )
				{
	  			session_start();
	  			$_SESSION['AWS_KEY'] =  $loginUsername;
	  			$_SESSION['AWS_SECRET_KEY'] =  $loginPassword;
	  			$_SESSION['BUCKET'] = $bucket ;
	  			$_SESSION['Token'] = md5($loginUsername);
     				echo "success";
				}
			}
			else
				echo "NoSuchBucket" ;
			
		}
	else
		echo $xml->Code;
    }

?>

/**
 * 
 */

/**
 * @author internousdev
 *
 */
public class ChkLoadJdcb {

	/**
	 * @param args
	 */
	public static void main(String[] args) 
		// TODO 自動生成されたメソッド・スタブ
		throws InstantiationException,IllegalAccessException {
			String msg = "";
			try {
				Class.forName("com.mysql.jdbc.Driver").newInstance();
				msg = "ドライバのロードに成功しました";
			}catch (ClassNotFoundException e){
				msg = "ドライバのロードに失敗しました";
			}
			System.out.println(msg);
			}
		
	}



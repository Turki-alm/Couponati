<?php
namespace App\Hellpers;

class MailForms {
    

    public static function sendRequest($data){

        return '
            <!DOCTYPE html>
            <html>
            <style>
                table, th, td {
                border:1px solid black;
                }
            </style>
            <body>
                <table style="width:100%">
                    <tr>
                        <th>الاسم بالكامل:</th>
                        <td>'.$data["full_name"].'</td>
                    </tr>
                    <tr>
                        <th>البريد الاكترونى:</th>
                        <td>'.$data["email"].'</td>
                    </tr>
                    <tr>
                        <th>رقم الهاتف:</th>
                        <td>'.$data["phone"].'</td>
                    </tr>
                    <tr>
                        <th>رابط المتجر:</th>
                        <td>'.$data["website"].'</td>
                    </tr>
                    <tr>
                        <th>اسم العلامة التجارية:</th>
                        <td>'.$data["trade_mark"].'</td>
                    </tr>
                    <tr>
                        <th>متوسط عدد الطلبات شهرياً: </th>
                        <td>'.$data["monthly_orders_average"].'</td>
                    </tr>
                    <tr>
                        <th>متوسط سلة المشتريات:</th>
                        <td>'.$data["purchases_average"].'</td>
                    </tr>
                </table>

                <p><a href="'.URL.'requests" style="width: 50%;text-decoration: none;font-size: 20px;margin-left: 22%;display: block;text-align: center;color: white!important;background: #00447d;border-color: gold;padding: 10px;">الذهاب الى لوحة التحكم</a></p>
            </body>
            </html>
            ';

       
    }
 
    ///////////////////
  
    static function recoveryMailForm($data){
        return '
        <!DOCTYPE html>
        <html>
        <style>
            table, th, td {
            border:1px solid black;
            }
        </style>
        <body>
            <h4>تم تغيير كلمة المرور بناءاً على طلبك لاستعادة الحساب</h4>
            <table style="width:100%">
                <tr>
                    <th>البريد الاكترونى:</th>
                    <td>'.$data["email"].'</td>
                </tr>
                <tr>
                    <th>رقم الهاتف:</th>
                    <td>'.$data["newPassword"].'</td>
                </tr>
            </table>

            <p><a href="'.URL.'coupons" style="width: 50%;text-decoration: none;font-size: 20px;margin-left: 22%;display: block;text-align: center;color: white!important;background: #00447d;border-color: gold;padding: 10px;">تسجيل الدخول</a></p>
        </body>
        </html>
        ';
    }
    ///////////////////
  
  
      
}



# Get-Value-sens-M3

# هذا العمل متطلب لدى شركة الأساليب الذكية
# محتويات الملف 
<br />
1-index.html(نقوم بعرض القيم المخزنه في قاعدة البيانات )
<br />
2-getValue.php(نقوم بسحب قيمة الحساس وحفظها في قاعدة البيانات )
<br />
3-showValue.php(هذا الملف خاص بعرض البيانات التي قمنا بتخزينها وعرضها )

# طريقة عمل الموقع
<br/>
اولا نقوم بادخال قيمة للحساس عن طريق الرابط التالي:
<br/>
<br/>
https://smartmethod.000webhostapp.com/getValuse.php?sens= + "قيمة الحساس "
<br />
<br />
مثال :
<br />
<br />
https://smartmethod.000webhostapp.com/getValuse.php?sens=100
<br />
<br />
(سنقوم بادخال القيم موقتا هكذا الى ان نقوم بربطه معا الحساس لاخذ القيم الصحيحه)
<br />
<br />
ثانيا يمكننا عرض القيم التي تم حفظها عن طريق الرابط التالي :
https://fahad438.github.io/Get-Value-sens-M3/

# شرح للمهمه كاملة
الجزء الاول من المهمه:
<br />
<br />
قمنا بسحب قيم الحساس عن طريق GET 
<br />
<br />
![image](https://user-images.githubusercontent.com/86566999/181141689-5059fdda-e0a4-4b25-b2dd-1e307189ac51.png)
<br />
<br />
الجزء الثاني من المهمه:
<br />
<br />
بعد ذلك قمنا بانشاء قاعدة بيانات لتخزين قيم الحساس كما هو موضح في الصور التالية:
<br />
<br />
![image](https://user-images.githubusercontent.com/86566999/181141937-fdc5966c-fa98-4d58-9f93-5c3aa88ea044.png)
<br />
<br />
![image](https://user-images.githubusercontent.com/86566999/181142058-b2af427b-f97b-48c2-9a68-26d3a406e438.png)
<br />
<br />
الجزء الثالث من المهمه:

تخزين قيم الحساس في قاعدة البيانات عن طريق الرابط التالي:
https://smartmethod.000webhostapp.com/getValuse.php?sens= + "قيمة الحساس "
<br />
<br />
مثال :
<br />
<br />
https://smartmethod.000webhostapp.com/getValuse.php?sens=100
<br />
<br />

(سنقوم بادخال القيم موقتا هكذا الى ان نقوم بربطه معا الحساس لاخذ القيم الصحيحه)
<br />
<br />
هذا هو الكود الخاص بادخال البيانات الى قاعدة البيانات:
<br />
<br />
![image](https://user-images.githubusercontent.com/86566999/181144284-99f941ba-91d1-44f3-89e7-97aa95a5ef1a.png)
<br />
<br />
اذا تم ادخال البيانات بشكل صحيح سيتم طباعة : 
Done

اذا كان هناك اي خطا في الكويري سيتم طباعة :
incorrect SQL
<br />
<br />
بعض القيم التي تم حظفها في قاعدة البيانات:
<br />
<br />
![image](https://user-images.githubusercontent.com/86566999/181145176-aa89b28f-168c-4558-8392-0eae957ac101.png)

<br />
<br />
الجزء الاخير من المهمه:
<br />
<br />
عرض جميع البيانات المدخلة الى قاعدة البيانات في صفحة 
index.html
<br />
<br />
الكود الخاص بسحب البيانات من قاعدة البيانات وعرضها:
<br />
<br />
![image](https://user-images.githubusercontent.com/86566999/181144874-ad884c4a-b2b2-4297-80f1-a10cae31adf3.png)
<br />
<br />





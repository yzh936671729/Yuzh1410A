var app = getApp()  
Page({  
  data: {
    top: [{icon: "../../images/user_bg.png"},
           ],
    dao: [{icon: "../../images/111.png",       name: "待付款"},
          {icon: "../../images/222.png",       name: "待收货"},
          {icon: "../../images/333.png",       name: "已收货"},
          {icon: "../../images/444.png",       name: "已取消"},
          {icon: "../../images/555.png",       name: "售后"},
           ],
    di: [{icon: "../../images/collct.png",       name: "我的收藏"},
         {icon: "../../images/service.png",      name: "联系客服"},
         {icon: "../../images/about.png",        name: "关于我们"},
           ],
     }, 
  onLoad: function () {
    console.log('onLoad test');  
  }  
}) 
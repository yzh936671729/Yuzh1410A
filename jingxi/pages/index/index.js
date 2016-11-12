var app = getApp()  
Page({  
  data: {  
    //   imgUrls: [  
    //    {  
    //       link:'/pages/index/index',  
    //       url:'../../images/banner1.jpg'   
    //    },{  
    //       link:'/pages/index/index',  
    //       url:'../../images/banner2.jpg'   
    //    },{  
    //       link:'/pages/index/index',  
    //       url:'../../images/banner3.jpg'   
    //    }   
    // ],
    // navs: [{icon: "../../images/nav01.png",  name: "大聚惠"},
    //        {icon: "../../images/nav02.png", name: "海外购"},
    //        {icon: "../../images/nav03.png", name: "超市百货"},
    //        {icon: "../../images/nav04.png", name: "厂家直销"},
    //        {icon: "../../images/nav05.png", name: "美食娱乐"},
    // ],
    // sckh:[{sckh: "../../images/scyh0.jpg", name:"海绵包包"},
    //       {sckh: "../../images/scyh3.png", name:"韩国代购"},
    //       {sckh: "../../images/scyh4.png", name:"ARC潮店"},
    //       {sckh: "../../images/scyh1.png", name:"欧力女装"},
    // ], 
    // jxcx:[{jxcx: "../../images/d_sp_01.jpg", name:"收款海绵包包 ￥68.00 $75.00"},
    //       {jxcx: "../../images/d_sp_02.png", name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //       {jxcx: "../../images/d_sp_03.png", name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //       {jxcx: "../../images/d_sp_04.png", name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //       {jxcx: "../../images/d_sp_05.png", name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //       {jxcx: "../../images/d_sp_06.png", name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    // ],         
    indicatorDots: true,  
    autoplay: true,  
    interval: 5000,  
    duration: 1000,  
    userInfo: {}  
  },  
  //事件处理函数
    swiperchange: function(e) {
        //console.log(e.detail.current)
    },
    onLoad: function () {  
    var that = this 
    console.log('onLoad test');
        wx.request({
                url: 'http://localhost/11/laravel/public/',
                method: 'GET',
                data: {},
                header: {
                    'Accept': 'application/json'
                },
                success: function(res) {
                    that.setData({
                        // console.log(res.data);
                        images: res.data
                    })
                }
        })
        wx.request({
                url: 'http://localhost/11/laravel/public/nav',
                method: 'GET',
                data: {},
                header: {
                    'Accept': 'application/json'
                },
                success: function(res) {
                    that.setData({
                        // console.log(res.data);
                        nav: res.data
                    })
                }
        }) 
        wx.request({
                url: 'http://localhost/11/laravel/public/sckh',
                method: 'GET',
                data: {},
                header: {
                    'Accept': 'application/json'
                },
                success: function(res) {
                    that.setData({
                        // console.log(res.data);
                        sckh: res.data
                    })
                }
        }) 
    }
    
})

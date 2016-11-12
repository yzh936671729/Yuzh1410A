var app = getApp()
Page({
  data: {
     carts: [
      {cid:1008,title:'Zippo打火机',image:'../../images/fl_02.png',num:'1',price:'198.0',sum:'198.0',selected:true},
      {cid:1012,title:'iPhone7 Plus',image:'../../images/fl_03.png',num:'1',price:'7188.0',sum:'7188.0',selected:true},
      {cid:1031,title:'得力订书机',image:'../../images/fl_08.png',num:'3',price:'15.0',sum:'45.0',selected:false
       }]
 },

 bindMinus: function(e) {
    var index = parseInt(e.currentTarget.dataset.index);
    var num = this.data.carts[index].num;
    // 如果只有1件了，就不允许再减了
    if (num > 1) {
      num --;
    }
    // 只有大于一件的时候，才能normal状态，否则disable状态
    var minusStatus = num <= 1 ? 'disabled' : 'normal';
    // 购物车数据
    var carts = this.data.carts;
    carts[index].num = num;
    // 按钮可用状态
    var minusStatuses = this.data.minusStatuses;
    minusStatuses[index] = minusStatus;
    // 将数值与状态写回
    this.setData({
      carts: carts,
      minusStatuses: minusStatuses
    });
  },
  bindPlus: function(e) {
    var index = parseInt(e.currentTarget.dataset.index);
    var num = this.data.carts[index].num;
    // 自增
    num ++;
    // 只有大于一件的时候，才能normal状态，否则disable状态
    var minusStatus = num <= 1 ? 'disabled' : 'normal';
    // 购物车数据
    var carts = this.data.carts;
    carts[index].num = num;
    // 按钮可用状态
    var minusStatuses = this.data.minusStatuses;
    minusStatuses[index] = minusStatus;
    // 将数值与状态写回
    this.setData({
      carts: carts,
      minusStatuses: minusStatuses
    });
  },

bindCheckbox: function(e) {
  /*绑定点击事件，将checkbox样式改变为选中与非选中*/
  //拿到下标值，以在carts作遍历指示用
  var index = parseInt(e.currentTarget.dataset.index);
  //原始的icon状态
  var selected = this.data.carts[index].selected;
  var carts = this.data.carts;
  // 对勾选状态取反
  carts[index].selected = !selected;
  // 写回经点击修改后的数组
  this.setData({
    carts: carts
  });
},
bindSelectAll: function() {
   // 环境中目前已选状态
   var selectedAllStatus = this.data.selectedAllStatus;
   // 取反操作
   selectedAllStatus = !selectedAllStatus;
   // 购物车数据，关键是处理selected值
   var carts = this.data.carts;
   // 遍历
   for (var i = 0; i < carts.length; i++) {
     carts[i].selected = selectedAllStatus;
   }
   this.setData({
     selectedAllStatus: selectedAllStatus,
     carts: carts
   });
 },
 bindCheckout: function() {
   // 初始化toastStr字符串
   var toastStr = 'cid:';
   // 遍历取出已勾选的cid
   for (var i = 0; i < this.data.carts.length; i++) {
     if (this.data.carts[i].selected) {
       toastStr += this.data.carts[i].cid;
       toastStr += ' ';
     }
   }
   //存回data
   this.setData({
     toastHidden: false,
     toastStr: toastStr
   });
 },
 bindToastChange: function() {
   this.setData({
     toastHidden: true
   });
 },
 sum: function() {
    var carts = this.data.carts;
    // 计算总金额
    var total = 0;
    for (var i = 0; i < carts.length; i++) {
      if (carts[i].selected) {
        total += carts[i].num * carts[i].price;
      }
    }
    // 写回经点击修改后的数组
    this.setData({
      carts: carts,
      total: '￥' + total
    });
  }
})
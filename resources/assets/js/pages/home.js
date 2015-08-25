module.exports = {
  template: require('./home.html'),
  data: function(){
    return   {
        selectedStock: {},
        stocks:[]
      };
  },
  components: {
    stockDetailHeader: require('../comps/stockDetailHeader')
  },
  ready: function(){
    this.$http.get('/api/v1/stocks', function(response){
      this.stocks = response;
      this.selectedStock = this.stocks[0];
    })
  },
  methods:{
    setSelectedStock: function(stock){
      this.selectedStock = stock;
    }
  },
  computed: {
    prices: function(){
      return this.selectedStock.ask;
    }
  }
}

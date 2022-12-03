[
{
"id":5000,
"type":"amy",
"name":"\u611f\u8c22\u5927\u5bb6\u8fd9\u6bb5\u65f6\u95f4\u7684\u4f7f\u7528,\u6a59\u5b50\u8fd9\u8fb9\u5df2\u4e0d\u518d\u7ef4\u62a4,\u4fdd\u7559\u767e\u5ea6\u76f4\u94fe\u53ef\u7528",
"model":"\u6bcf\u5929\u4e0d\u5b9a\u65f6\u66f4\u65b0\u6a21\u5f0f\uff0c\u8bf7\u70b9\u4e0a\u65b9\u4e0b\u8f7d\u56fe\u6807\u66f4\u65b0\u6a21\u5f0f\u554a"},
{"id":5001,
"type":"amy",
"name":"\u65b0\u514d\u6d41:ml.wezyo.com \u5728\u8fd9\u8fb9\u540c\u6837\u63d0\u4f9b\u4e86\u516c\u76ca\u514d\u6d41,\u6709\u9700\u8981\u53ef\u81ea\u884c\u67e5\u770b",
"model":"\u6bcf\u5929\u4e0d\u5b9a\u65f6\u66f4\u65b0\u6a21\u5f0f\uff0c\u8bf7\u70b9\u4e0a\u65b9\u4e0b\u8f7d\u56fe\u6807\u66f4\u65b0\u6a21\u5f0f\u554a"},
{
"id":5002,
"type":"amy",
"name":"2022-12-4",
"model":"\u6bcf\u5929\u4e0d\u5b9a\u65f6\u66f4\u65b0\u6a21\u5f0f\uff0c\u8bf7\u70b9\u4e0a\u65b9\u4e0b\u8f7d\u56fe\u6807\u66f4\u65b0\u6a21\u5f0f\u554a"},
{"id":5003,
"type":"amy",
"name":"\u767e\u5ea6\u76f4\u8fde-\u53ef\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"\/\/LogFile\": \"amy4.log\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"baidu\",
    \"ProxyType\": \"baidu\",
    \"baiduSettings\": {
      \"Secret\": \"kyy_free\",
      \"DestAddr\": \"157.0.148.53:443\",
      \"Amy4ServerAddr\": \"193.38.50.151:80\",
      \"ServerKey\": \"ml.wezyo.com\"
    }
  }],
  \"Routers\": []
}"},
{"id":5004,
"type":"amy",
"name":"\u767e\u5ea6\u76f4\u8fde2-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"cloudnproxy.baidu.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: cloudnproxy.baidu.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5005,
"type":"amy",
"name":"\u767e\u5ea6\u76f4\u8fde3-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"t7z.cupid.iqiyi.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: t7z.cupid.iqiyi.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5006,
"type":"amy",
"name":"\u767e\u5ea6\u76f4\u8fde-\u5907\u7528\u6a21\u5f0f-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"69.165.74.168:443\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"cloudnproxy.baidu.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: cloudnproxy.baidu.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5007,
"type":"amy",
"name":"\u767e\u5ea6\u76f4\u8fde-\u53ef\u6e38\u620f\u3001\u770b\u89c6\u9891-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"120.48.21.141:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"cloudnproxy.baidu.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: cloudnproxy.baidu.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5008,
"type":"amy",
"name":"\u817e\u8baf\u738b\u5361\u300140G\u5185-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"game.gtimg.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: game.gtimg.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5009,
"type":"amy",
"name":"\u817e\u8baf\u738b\u53612\u300140G\u5185-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"puui.qpic.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: puui.qpic.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5010,
"type":"amy",
"name":"\u5927\u738b\u5361-\u5907\u7528\u6a21\u5f0f-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"69.165.74.168:443\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"game.gtimg.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: game.gtimg.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5011,
"type":"amy",
"name":"\u5927\u738b\u5361-\u53ef\u6e38\u620f\u3001\u770b\u89c6\u9891-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"120.48.21.141:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"game.gtimg.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: game.gtimg.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5012,
"type":"amy",
"name":"\u9489\u94891 \u9002\u7528\uff1a\u963f\u91cc\u5b9d\u5361\u3001\u6c83\u6d3e0\u5143\u963f\u91cc\u6743\u76ca\u5305\u3001\u51b0\u9489\u9489\u5361\u7b49\u963f\u91cc\u7cfb-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"tms.dingtalk.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: tms.dingtalk.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5013,
"type":"amy",
"name":"\u9489\u94892-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"down.dingtalk.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: down.dingtalk.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5014,
"type":"amy",
"name":"\u9489\u94893-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"alidocs.dingtalk.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: alidocs.dingtalk.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5015,
"type":"amy",
"name":"\u9489\u9489-\u5907\u7528\u6a21\u5f0f-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"69.165.74.168:443\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"tms.dingtalk.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: tms.dingtalk.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5016,
"type":"amy",
"name":"\u9489\u9489-\u53ef\u6e38\u620f\u3001\u770b\u89c6\u9891-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"120.48.21.141:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"tms.dingtalk.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: tms.dingtalk.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5017,
"type":"amy",
"name":"\u5408\u4f5cA \u9002\u7528\uff1a\u6296\u97f3/\u5934\u6761\u5b9a\u5411\u5305 \u5218\u90a6\u5361\u3001\u5bfc\u5b66\u6613\u5b66\u5361\u3001\u7535\u4fe1\u5927\u9ed1\u725b\u3001\u5c0f\u6b6a\u5361\u7b49-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"dm.toutiao.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: dm.toutiao.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5018,
"type":"amy",
"name":"\u5408\u4f5cA-\u53ef\u6e38\u620f\u3001\u770b\u89c6\u9891-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"120.48.21.141:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"dm.toutiao.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: dm.toutiao.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5019,
"type":"amy",
"name":"\u5408\u4f5cA-\u5907\u7528\u6a21\u5f0f-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"69.165.74.168:443\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"dm.toutiao.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: dm.toutiao.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{
"id":5020,
"type":"amy",
"name":"\u7535\u4fe1\u505c\u673a-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"http\",
    \"ProxyType\": \"http\",
    \"httpSettings\": {
      \"HttpAddrs\": [\"10.0.0.200:80\"],
      \"HttpModify\": {
        \"DelLine\": [\"x-online-host\", \"host\"],
        \"SetFirst\": \"[M] [U] [V]\\r\\nX-Online-Host:[H]\\r\\nHost:a.189.cn\\r\\n\"
      }
    }
  }, 
{
    \"Tag\": \"tunnel\",
    \"ProxyType\": \"http\",
    \"httpSettings\": {
      \"TunnelAddrs\": [\"193.38.50.151:80\"],
      \"TunnelModify\": {
        \"SetFirst\": \"[M] [H]@a.189.cn [V]\\r\\nUser-Agent: baiduboxapp\\r\\n\"
      },
      \"Amy4ServerAddr\": \"193.38.50.151:80\",
      \"ServerKey\": \"ml.wezyo.com\"
      }
  }],
  \"Routers\": [{
    \"OutTags\": [\"http\"],
    \"Rules\": {
      \"Network\": [\"udp\"],
      \"DPort\": [\"53\"]
    }
  }, {
    \"OutTags\": [\"tunnel\"],
    \"Rules\": {
      \"!Protocol\": [\"http\"]
    }
  }]
}"},
{"id":5021,
"type":"amy",
"name":"\u7535\u4fe1\u505c\u673a2-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"a.189.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: a.189.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5022,
"type":"amy",
"name":"\u505c\u673a-\u5907\u7528\u6a21\u5f0f-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"69.165.74.168:443\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"a.189.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: a.189.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5023,
"type":"amy",
"name":"\u505c\u673a-\u53ef\u6e38\u620f\u3001\u770b\u89c6\u9891-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"120.48.21.141:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"a.189.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: a.189.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5024,
"type":"amy",
"name":"\u5168\u56fd\u8054\u901a\u624b\u5385\u3001\u5e7f\u897f\u3001\u91cd\u5e86 \u53ef\u514d\uff0c\u5177\u4f53\u81ea\u6d4b-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"pull.free.video.10010.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: pull.free.video.10010.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5025,
"type":"amy",
"name":"\u5168\u56fd\u8054\u901a\u516c\u514d\uff0cWAP\u63a5\u5165\u70b9\u3001\u6ce8\u610f\u8981\u7528WAP\u63a5\u5165\u70b9 \u770b\u6e05\u695a\uff0c\u5177\u4f53\u81ea\u6d4b-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"listen.10155.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: listen.10155.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5026,
"type":"amy",
"name":"\u54d4\u54e9\u54d4\u54e9 \u9002\u7528\uff1a22\u5361\u300133\u5361\u3001B\u7ad9\u5b9a\u5411\u7b49-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"i0.hdslb.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: i0.hdslb.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5026,
"type":"amy",
"name":"\u54d4\u54e9\u54d4\u54e9-\u5907\u7528\u6a21\u5f0f-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"69.165.74.168:443\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"i0.hdslb.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: i0.hdslb.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5027,
"type":"amy",
"name":"\u54d4\u54e9\u54d4\u54e9-\u53ef\u6e38\u620f\u3001\u770b\u89c6\u9891-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"120.48.21.141:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"i0.hdslb.com\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: i0.hdslb.com\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5028,
"type":"amy",
"name":"\u5929\u7ffc\u4e91\u76d81 \u9002\u7528\uff1a\u7535\u4fe1\u5929\u7ffc\u4e91\u76d8\u5b9a\u5411\u6d41\u91cf\u5305-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"http\",
    \"ProxyType\": \"http\",
    \"httpSettings\": {
      \"HttpAddrs\": [\"10.0.0.200:80\"],
      \"HttpModify\": {
        \"DelLine\": [\"x-online-host\", \"host\"],
       \"SetFirst\": \"[M] [U] [V]\\r\\nX-Online-Host:[H]\\r\\nHost:download.cloud.189.cn\\r\\n\"
      },
     \"TunnelAddrs\": [\"10.0.0.200:80\"],
     \"TunnelModify\": {
       \"SetFirst\": \"[M] [H]@download.cloud.189.cn [V]\\r\\n\"
      },
     \"Amy4ServerAddr\": \"193.38.50.151:80\",
     \"ServerKey\": \"ml.wezyo.com\",
     \"HttpPool\": {
       \"MaxConn\": 20,
       \"MinConn\": 3,
       \"DialSpeed\": 9,
       \"IdleSec\": 57
      },
     \"TunnelPool\": {
       \"MaxConn\": 30,
       \"MinConn\": 5,
       \"DialSpeed\": 9,
       \"IdleSec\": 57
      }
    }
  }]
}"},
{"id":5029,
"type":"amy",
"name":"\u5929\u7ffc\u4e91\u76d82-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"193.38.50.151:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"download.cloud.189.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: download.cloud.189.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5030,
"type":"amy",
"name":"\u5929\u7ffc\u4e91\u76d8-\u5907\u7528\u6a21\u5f0f-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"69.165.74.168:443\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"download.cloud.189.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: download.cloud.189.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"},
{"id":5031,
"type":"amy",
"name":"\u5929\u7ffc\u4e91\u76d8-\u53ef\u6e38\u620f\u3001\u770b\u89c6\u9891-\u5df2\u505c\u7528",
"model":"{
  \"Socks5ListenAddr\": \":10800\",
  \"PidFile\": \"amy4.pid\",
  \"DnsListenAddr\": \":10530\",
  \"\/\/\": \"\u4e0d\u8981\u778eJB\u4e71\u4fee\u6539\",
  \"AmyOuts\": [{
    \"Tag\": \"ANet\",
    \"ProxyType\": \"ANet\",
    \"ANetSettings\": {
      \"DestAddrs\": [\"120.48.21.141:80\"],
      \"DestAddrsStrategy\": \"IP\",
      \"ServerKey\": \"ml.wezyo.com\",
      \"FFHost\": \"download.cloud.189.cn\",
      \"HTTPRequest\": \"GET \/ HTTP\/1.1\\r\\nHost: download.cloud.189.cn\\r\\n\\r\\n\",
            \"TCPPool\": {
        \"MaxConn\": 60,
        \"MinConn\": 5,
        \"DialSpeed\": 15,
        \"IdleSec\": 115
      }
    }
  }],
  \"Routers\": []
}"}
]
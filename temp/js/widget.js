(function (e) {
    var t = {};
    function n(r) {
      if (t[r]) return t[r].exports;
      var o = (t[r] = { i: r, l: !1, exports: {} });
      return e[r].call(o.exports, o, o.exports, n), (o.l = !0), o.exports;
    }
    (n.m = e),
      (n.c = t),
      (n.d = function (e, t, r) {
        n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r });
      }),
      (n.r = function (e) {
        "undefined" !== typeof Symbol &&
          Symbol.toStringTag &&
          Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
          Object.defineProperty(e, "__esModule", { value: !0 });
      }),
      (n.t = function (e, t) {
        if ((1 & t && (e = n(e)), 8 & t)) return e;
        if (4 & t && "object" === typeof e && e && e.__esModule) return e;
        var r = Object.create(null);
        if (
          (n.r(r),
          Object.defineProperty(r, "default", { enumerable: !0, value: e }),
          2 & t && "string" != typeof e)
        )
          for (var o in e)
            n.d(
              r,
              o,
              function (t) {
                return e[t];
              }.bind(null, o)
            );
        return r;
      }),
      (n.n = function (e) {
        var t =
          e && e.__esModule
            ? function () {
                return e["default"];
              }
            : function () {
                return e;
              };
        return n.d(t, "a", t), t;
      }),
      (n.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t);
      }),
      (n.p = "/"),
      n((n.s = 12));
  })({
    "0029": function (e, t) {
      e.exports =
        "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(
          ","
        );
    },
    "0185": function (e, t, n) {
      var r = n("e5fa");
      e.exports = function (e) {
        return Object(r(e));
      };
    },
    "01f9": function (e, t, n) {
      "use strict";
      var r = n("2d00"),
        o = n("5ca1"),
        i = n("2aba"),
        a = n("32e9"),
        c = n("84f2"),
        s = n("41a0"),
        u = n("7f20"),
        l = n("38fd"),
        p = n("2b4c")("iterator"),
        f = !([].keys && "next" in [].keys()),
        d = "@@iterator",
        h = "keys",
        _ = "values",
        m = function () {
          return this;
        };
      e.exports = function (e, t, n, v, y, g, b) {
        s(n, t, v);
        var w,
          x,
          C,
          k = function (e) {
            if (!f && e in O) return O[e];
            switch (e) {
              case h:
                return function () {
                  return new n(this, e);
                };
              case _:
                return function () {
                  return new n(this, e);
                };
            }
            return function () {
              return new n(this, e);
            };
          },
          S = t + " Iterator",
          P = y == _,
          A = !1,
          O = e.prototype,
          $ = O[p] || O[d] || (y && O[y]),
          T = $ || k(y),
          j = y ? (P ? k("entries") : T) : void 0,
          E = ("Array" == t && O.entries) || $;
        if (
          (E &&
            ((C = l(E.call(new e()))),
            C !== Object.prototype &&
              C.next &&
              (u(C, S, !0), r || "function" == typeof C[p] || a(C, p, m))),
          P &&
            $ &&
            $.name !== _ &&
            ((A = !0),
            (T = function () {
              return $.call(this);
            })),
          (r && !b) || (!f && !A && O[p]) || a(O, p, T),
          (c[t] = T),
          (c[S] = m),
          y)
        )
          if (((w = { values: P ? T : k(_), keys: g ? T : k(h), entries: j }), b))
            for (x in w) x in O || i(O, x, w[x]);
          else o(o.P + o.F * (f || A), t, w);
        return w;
      };
    },
    "02f4": function (e, t, n) {
      var r = n("4588"),
        o = n("be13");
      e.exports = function (e) {
        return function (t, n) {
          var i,
            a,
            c = String(o(t)),
            s = r(n),
            u = c.length;
          return s < 0 || s >= u
            ? e
              ? ""
              : void 0
            : ((i = c.charCodeAt(s)),
              i < 55296 ||
              i > 56319 ||
              s + 1 === u ||
              (a = c.charCodeAt(s + 1)) < 56320 ||
              a > 57343
                ? e
                  ? c.charAt(s)
                  : i
                : e
                ? c.slice(s, s + 2)
                : a - 56320 + ((i - 55296) << 10) + 65536);
        };
      };
    },
    "0390": function (e, t, n) {
      "use strict";
      var r = n("02f4")(!0);
      e.exports = function (e, t, n) {
        return t + (n ? r(e, t).length : 1);
      };
    },
    "03ca": function (e, t, n) {
      "use strict";
      var r = n("f2fe");
      function o(e) {
        var t, n;
        (this.promise = new e(function (e, r) {
          if (void 0 !== t || void 0 !== n)
            throw TypeError("Bad Promise constructor");
          (t = e), (n = r);
        })),
          (this.resolve = r(t)),
          (this.reject = r(n));
      }
      e.exports.f = function (e) {
        return new o(e);
      };
    },
    "0423": function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "æ™‚ä¾¡ç·é¡ãƒ©ãƒ³ã‚¯",
          mcap: "æ™‚ä¾¡ç·é¡",
          "24h_volume": "24æ™‚é–“å–å¼•é«˜",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "ä»®æƒ³é€šè²¨ä¾¡æ ¼æ¯”è¼ƒ",
          crypto_market_cap_comparison: "ä»®æƒ³é€šè²¨æ™‚ä¾¡ç·é¡æ¯”è¼ƒ",
        },
        coin_price_static_headline_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "24Hæœ€é«˜å€¤",
          "24h_low": "24Hæœ€å®‰å€¤",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        beam_widget: { powered_by: "Powered by %{name_start}%{name}%{name_end}" },
        coin_ticker_widget: {
          "24h_high": "24Hæœ€é«˜å€¤",
          "24h_low": "24Hæœ€å®‰å€¤",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "ä»®æƒ³é€šè²¨ãƒ‡ãƒ¼ã‚¿ä¸€è¦§",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "24Hå–å¼•é«˜",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "å–å¼•æ‰€",
          pair: "é€šè²¨ãƒšã‚¢",
          price: "ä¾¡æ ¼",
          volume: "å–å¼•é«˜",
          trust_score: "ãƒˆãƒ©ã‚¹ãƒˆã‚¹ã‚³ã‚¢",
          view_price_chart: "ä¾¡æ ¼ãƒãƒ£ãƒ¼ãƒˆã‚’è¡¨ç¤º",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "056c": function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "ç¸½å¸‚å€¼æŽ’å",
          mcap: "ç¸½å¸‚å€¼",
          "24h_volume": "24 å°æ™‚äº¤æ˜“é‡",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} æä¾›",
          crypto_price_comparison: "åŠ å¯†è²¨å¹£åŒ¯çŽ‡æ¯”è¼ƒ",
          crypto_market_cap_comparison: "åŠ å¯†è²¨å¹£ç¸½å¸‚å€¼æ¯”è¼ƒ",
        },
        coin_price_static_headline_widget: {
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} æä¾›",
        },
        coin_price_chart_widget: {
          "24h_high": "24 å°æ™‚é«˜åƒ¹",
          "24h_low": "24 å°æ™‚ä½Žåƒ¹",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} ç‚ºæ‚¨æä¾›",
        },
        coin_price_marquee_widget: {
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} æä¾›",
        },
        coin_list_widget: {
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} ç‚ºæ‚¨æä¾›",
        },
        beam_widget: {
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} æä¾›",
        },
        coin_ticker_widget: {
          "24h_high": "24 å°æ™‚é«˜åƒ¹",
          "24h_low": "24 å°æ™‚ä½Žåƒ¹",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} æä¾›",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} æä¾›",
        },
        coin_heatmap_widget: {
          title: "åŠ å¯†è²¨å¹£æ¨¹ç‹€åœ–",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} æä¾›",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "24 å°æ™‚äº¤æ˜“é‡",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "äº¤æ˜“æ¨™çš„",
          pair: "å°",
          price: "åƒ¹æ ¼",
          volume: "äº¤æ˜“é‡",
          trust_score: "ä¿¡ä»»åˆ†æ•¸",
          view_price_chart: "æŸ¥çœ‹åŒ¯çŽ‡èµ°å‹¢åœ–",
          powered_by: "æ­¤æœå‹™æ˜¯ç”± %{name_start}%{name}%{name_end} æä¾›",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "0825": function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "Classifica cap. di mercato",
          mcap: "Cap. di mercato",
          "24h_volume": "Volume nelle ultime 24 ore",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "Prezzi delle criptovalute aÂ confronto",
          crypto_market_cap_comparison:
            "Capitalizzazione di mercato delle criptovalute aÂ confronto",
        },
        coin_price_static_headline_widget: {
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "Massimo in 24 ore",
          "24h_low": "Minimo in 24 ore",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
        },
        beam_widget: { powered_by: "Offerto da %{name_start}%{name}%{name_end}" },
        coin_ticker_widget: {
          "24h_high": "Massimo in 24 ore",
          "24h_low": "Minimo in 24 ore",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "Mappa ad albero delle criptovalute",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "Volume nelle 24 ore",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "Exchange",
          pair: "Coppia",
          price: "Prezzo",
          volume: "Volume",
          trust_score: "Punteggio di fiducia",
          view_price_chart: "Vedi il grafico dei prezzi",
          powered_by: "Offerto da %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "0965": function (e, t, n) {
      n("384f"), (e.exports = n("a7d3").parseFloat);
    },
    "097d": function (e, t, n) {
      "use strict";
      var r = n("5ca1"),
        o = n("8378"),
        i = n("7726"),
        a = n("ebd6"),
        c = n("bcaa");
      r(r.P + r.R, "Promise", {
        finally: function (e) {
          var t = a(this, o.Promise || i.Promise),
            n = "function" == typeof e;
          return this.then(
            n
              ? function (n) {
                  return c(t, e()).then(function () {
                    return n;
                  });
                }
              : e,
            n
              ? function (n) {
                  return c(t, e()).then(function () {
                    throw n;
                  });
                }
              : e
          );
        },
      });
    },
    "0a0a": function (e, t, n) {
      var r = n("da3c"),
        o = n("a7d3"),
        i = n("b457"),
        a = n("fda1"),
        c = n("3adc").f;
      e.exports = function (e) {
        var t = o.Symbol || (o.Symbol = i ? {} : r.Symbol || {});
        "_" == e.charAt(0) || e in t || c(t, e, { value: a.f(e) });
      };
    },
    "0bfb": function (e, t, n) {
      "use strict";
      var r = n("cb7c");
      e.exports = function () {
        var e = r(this),
          t = "";
        return (
          e.global && (t += "g"),
          e.ignoreCase && (t += "i"),
          e.multiline && (t += "m"),
          e.unicode && (t += "u"),
          e.sticky && (t += "y"),
          t
        );
      };
    },
    "0d58": function (e, t, n) {
      var r = n("ce10"),
        o = n("e11e");
      e.exports =
        Object.keys ||
        function (e) {
          return r(e, o);
        };
    },
    "0f01": function (e, t, n) {
      "use strict";
      var r = n("e9ac"),
        o = r("%Object%"),
        i = r("%TypeError%"),
        a = r("%String%"),
        c = n("c46d"),
        s = n("2057"),
        u = n("c612"),
        l = n("5975"),
        p = n("bb53"),
        f = n("21d0"),
        d = n("2f17"),
        h = n("a0d3"),
        _ = {
          ToPrimitive: d,
          ToBoolean: function (e) {
            return !!e;
          },
          ToNumber: function (e) {
            return +e;
          },
          ToInteger: function (e) {
            var t = this.ToNumber(e);
            return s(t)
              ? 0
              : 0 !== t && u(t)
              ? l(t) * Math.floor(Math.abs(t))
              : t;
          },
          ToInt32: function (e) {
            return this.ToNumber(e) >> 0;
          },
          ToUint32: function (e) {
            return this.ToNumber(e) >>> 0;
          },
          ToUint16: function (e) {
            var t = this.ToNumber(e);
            if (s(t) || 0 === t || !u(t)) return 0;
            var n = l(t) * Math.floor(Math.abs(t));
            return p(n, 65536);
          },
          ToString: function (e) {
            return a(e);
          },
          ToObject: function (e) {
            return this.CheckObjectCoercible(e), o(e);
          },
          CheckObjectCoercible: function (e, t) {
            if (null == e) throw new i(t || "Cannot call method on " + e);
            return e;
          },
          IsCallable: f,
          SameValue: function (e, t) {
            return e === t ? 0 !== e || 1 / e === 1 / t : s(e) && s(t);
          },
          Type: function (e) {
            return null === e
              ? "Null"
              : "undefined" === typeof e
              ? "Undefined"
              : "function" === typeof e || "object" === typeof e
              ? "Object"
              : "number" === typeof e
              ? "Number"
              : "boolean" === typeof e
              ? "Boolean"
              : "string" === typeof e
              ? "String"
              : void 0;
          },
          IsPropertyDescriptor: function (e) {
            if ("Object" !== this.Type(e)) return !1;
            var t = {
              "[[Configurable]]": !0,
              "[[Enumerable]]": !0,
              "[[Get]]": !0,
              "[[Set]]": !0,
              "[[Value]]": !0,
              "[[Writable]]": !0,
            };
            for (var n in e) if (h(e, n) && !t[n]) return !1;
            var r = h(e, "[[Value]]"),
              o = h(e, "[[Get]]") || h(e, "[[Set]]");
            if (r && o)
              throw new i(
                "Property Descriptors may not be both accessor and data descriptors"
              );
            return !0;
          },
          IsAccessorDescriptor: function (e) {
            return (
              "undefined" !== typeof e &&
              (c(this, "Property Descriptor", "Desc", e),
              !(!h(e, "[[Get]]") && !h(e, "[[Set]]")))
            );
          },
          IsDataDescriptor: function (e) {
            return (
              "undefined" !== typeof e &&
              (c(this, "Property Descriptor", "Desc", e),
              !(!h(e, "[[Value]]") && !h(e, "[[Writable]]")))
            );
          },
          IsGenericDescriptor: function (e) {
            return (
              "undefined" !== typeof e &&
              (c(this, "Property Descriptor", "Desc", e),
              !this.IsAccessorDescriptor(e) && !this.IsDataDescriptor(e))
            );
          },
          FromPropertyDescriptor: function (e) {
            if ("undefined" === typeof e) return e;
            if (
              (c(this, "Property Descriptor", "Desc", e),
              this.IsDataDescriptor(e))
            )
              return {
                value: e["[[Value]]"],
                writable: !!e["[[Writable]]"],
                enumerable: !!e["[[Enumerable]]"],
                configurable: !!e["[[Configurable]]"],
              };
            if (this.IsAccessorDescriptor(e))
              return {
                get: e["[[Get]]"],
                set: e["[[Set]]"],
                enumerable: !!e["[[Enumerable]]"],
                configurable: !!e["[[Configurable]]"],
              };
            throw new i(
              "FromPropertyDescriptor must be called with a fully populated Property Descriptor"
            );
          },
          ToPropertyDescriptor: function (e) {
            if ("Object" !== this.Type(e))
              throw new i("ToPropertyDescriptor requires an object");
            var t = {};
            if (
              (h(e, "enumerable") &&
                (t["[[Enumerable]]"] = this.ToBoolean(e.enumerable)),
              h(e, "configurable") &&
                (t["[[Configurable]]"] = this.ToBoolean(e.configurable)),
              h(e, "value") && (t["[[Value]]"] = e.value),
              h(e, "writable") &&
                (t["[[Writable]]"] = this.ToBoolean(e.writable)),
              h(e, "get"))
            ) {
              var n = e.get;
              if ("undefined" !== typeof n && !this.IsCallable(n))
                throw new TypeError("getter must be a function");
              t["[[Get]]"] = n;
            }
            if (h(e, "set")) {
              var r = e.set;
              if ("undefined" !== typeof r && !this.IsCallable(r))
                throw new i("setter must be a function");
              t["[[Set]]"] = r;
            }
            if (
              (h(t, "[[Get]]") || h(t, "[[Set]]")) &&
              (h(t, "[[Value]]") || h(t, "[[Writable]]"))
            )
              throw new i(
                "Invalid property descriptor. Cannot both specify accessors and a value or writable attribute"
              );
            return t;
          },
        };
      e.exports = _;
    },
    "0f7c": function (e, t, n) {
      "use strict";
      var r = n("688e");
      e.exports = Function.prototype.bind || r;
    },
    "0f89": function (e, t, n) {
      var r = n("6f8a");
      e.exports = function (e) {
        if (!r(e)) throw TypeError(e + " is not an object!");
        return e;
      };
    },
    "103a": function (e, t, n) {
      var r = n("da3c").document;
      e.exports = r && r.documentElement;
    },
    "11e9": function (e, t, n) {
      var r = n("52a7"),
        o = n("4630"),
        i = n("6821"),
        a = n("6a99"),
        c = n("69a8"),
        s = n("c69a"),
        u = Object.getOwnPropertyDescriptor;
      t.f = n("9e1e")
        ? u
        : function (e, t) {
            if (((e = i(e)), (t = a(t, !0)), s))
              try {
                return u(e, t);
              } catch (n) {}
            if (c(e, t)) return o(!r.f.call(e, t), e[t]);
          };
    },
    "11ff": function (e, t, n) {
      var r = n("da3c").parseFloat,
        o = n("633a").trim;
      e.exports =
        1 / r(n("702a") + "-0") !== -1 / 0
          ? function (e) {
              var t = o(String(e), 3),
                n = r(t);
              return 0 === n && "-" == t.charAt(0) ? -0 : n;
            }
          : r;
    },
    12: function (e, t, n) {
      e.exports = n("856e");
    },
    "12fd": function (e, t, n) {
      var r = n("6f8a"),
        o = n("da3c").document,
        i = r(o) && r(o.createElement);
      e.exports = function (e) {
        return i ? o.createElement(e) : {};
      };
    },
    "12fd9": function (e, t) {},
    "148f": function (e, t, n) {
      "use strict";
      var r = function () {
          var e = this,
            t = e.$createElement,
            n = e._self._c || t;
          return n(
            "div",
            {
              staticClass: "cg-container cg-flex cg-flex-column cg-relative",
              class: e.containerClass,
              style: [e.containerStyle, e.backgroundColorStyle],
            },
            [
              e.loading
                ? n("h1", { staticClass: "cg-p-4" }, [e._v("Loading...")])
                : "" !== e.errorMessage
                ? n("h1", { staticClass: "cg-p-4" }, [e._v(e._s(e.errorMessage))])
                : n("CoinDetails", {
                    attrs: {
                      apiCoinData: e.apiCoinData,
                      currency: e.currency,
                      pricingHighlightClass: e.pricingHighlightClass,
                      utmParams: e.utmParams,
                      currencyCode: e.currencyCode,
                    },
                  }),
              n(
                "div",
                {
                  staticClass:
                    "cg-flex cg-flex-row cg-justify-between cg-items-center cg-px-2 cg-py-1 cg-footer",
                },
                [
                  n("div", {
                    staticClass: "cg-bold cg-xs",
                    domProps: { innerHTML: e._s(e.poweredByCoinGecko) },
                  }),
                  n("div", [
                    n(
                      "a",
                      {
                        staticClass:
                          "cg-nowrap cg-primary-color-dark cg-no-underline cg-xs",
                        attrs: {
                          href: e.linkToPriceChart("price_charts"),
                          target: "_blank",
                        },
                      },
                      [e._v(e._s(e.viewPriceChart))]
                    ),
                  ]),
                ]
              ),
            ],
            1
          );
        },
        o = [],
        i = (n("4917"), n("7f7f"), n("59ad")),
        a = n.n(i),
        c = (n("c5f6"), n("cadf"), n("551c"), n("097d"), n("e8ba")),
        s = n("d525"),
        u = n("1f69"),
        l = n("c1e2"),
        p = n("9add"),
        f = 400,
        d = {
          name: "CoingeckoCoinTickerWidget",
          mixins: [Object(u["a"])(f), Object(l["a"])()],
          components: { CoinDetails: p["a"] },
          props: {
            backgroundColor: { type: String, default: "#ffffff" },
            coinId: { type: String, default: "bitcoin" },
            currency: { type: String, default: "usd" },
            locale: { type: String, default: "en" },
            width: { type: Number, default: 0 },
          },
          data: function () {
            return {
              loading: !0,
              apiCoinData: {},
              polyglot: {},
              errorMessage: "",
              pricingHighlightClass: null,
            };
          },
          methods: {
            formatCurrency: function (e) {
              return Object(c["formatCurrency"])(e, this.currency, this.locale);
            },
            fetchCoinData: function () {
              var e = this;
              (this.loading = !0),
                (this.errorMessage = ""),
                fetch(
                  "https://api.coingecko.com/api/v3/coins/".concat(
                    this.coinId.toLowerCase(),
                    "?developer_data=false&community_data=false&tickers=false"
                  )
                )
                  .then(function (e) {
                    return e.json();
                  })
                  .then(function (t) {
                    (e.loading = !1), (e.apiCoinData = t);
                  })
                  .catch(function () {
                    (e.loading = !1),
                      (e.errorMessage = "Error on loading CoinGecko API");
                  });
            },
            listenForPriceChanges: function () {
              var e = this;
              this.coinDataListener && this.coinDataListener.unsubscribe(),
                (this.coinDataListener = Object(s["a"])(
                  [this.coinId],
                  function (t) {
                    var n = e.apiCoinData.market_data.current_price,
                      r = t.p,
                      o = n[e.currencyCode],
                      i = r[e.currencyCode];
                    e.formatCurrency(o) !== e.formatCurrency(i) &&
                      (a()(o) <= a()(i)
                        ? e.highlightPricing("cg-primary-color")
                        : e.highlightPricing("cg-red-color")),
                      (e.apiCoinData.market_data.current_price = r),
                      (e.apiCoinData.market_data.price_change_percentage_24h_in_currency =
                        t.e);
                  }
                ));
            },
            highlightPricing: function (e) {
              var t = this;
              (this.pricingHighlightClass = e),
                setTimeout(function () {
                  t.pricingHighlightClass = null;
                }, 1e3);
            },
            linkToPriceChart: function (e) {
              return "https://www.coingecko.com/resource_redirect?locale="
                .concat(this.locale, "&route=")
                .concat(e, "/")
                .concat(this.apiCoinData.id, "/")
                .concat(this.currencyCode, "&")
                .concat(this.utmParams);
            },
          },
          computed: {
            viewPriceChart: function () {
              return this.polyglot.t("coin_ticker_widget.view_price_chart", {
                coin: this.apiCoinData.name,
              });
            },
            currencyCode: function () {
              return this.currency.toLowerCase();
            },
            poweredByCoinGecko: function () {
              return this.polyglot.t("coin_ticker_widget.powered_by", {
                name: "CoinGecko",
                name_start:
                  '<a class="cg-primary-color-dark cg-no-underline" href="https://www.coingecko.com/'
                    .concat(this.locale, "?")
                    .concat(this.utmParams, '" target="_blank">'),
                name_end: "</a>",
              });
            },
            utmParams: function () {
              return "utm_source="
                .concat(
                  window.location.host,
                  "&utm_medium=coin_ticker_widget&utm_content="
                )
                .concat(this.coinId.toLowerCase());
            },
            containerStyle: function () {
              return {
                width: 0 === this.width ? "100%" : "".concat(this.width, "px"),
              };
            },
            backgroundColorStyle: function () {
              var e = this.backgroundColor.match(
                /^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/i
              )
                ? this.backgroundColor
                : "#ffffff";
              return { backgroundColor: e };
            },
          },
          watch: {
            coinId: function () {
              this.fetchCoinData(), this.listenForPriceChanges();
            },
            currency: function () {
              this.fetchCoinData();
            },
            locale: function () {
              this.fetchCoinData();
            },
          },
          created: function () {
            this.fetchCoinData(), this.listenForPriceChanges();
          },
          destroyed: function () {
            this.coinDataListener && this.coinDataListener.unsubscribe();
          },
        },
        h = d,
        _ = n("2877"),
        m = Object(_["a"])(h, r, o, !1, null, null, null);
      m.options.__file = "CoingeckoCoinTickerWidget.vue";
      t["a"] = m.exports;
    },
    1495: function (e, t, n) {
      var r = n("86cc"),
        o = n("cb7c"),
        i = n("0d58");
      e.exports = n("9e1e")
        ? Object.defineProperties
        : function (e, t) {
            o(e);
            var n,
              a = i(t),
              c = a.length,
              s = 0;
            while (c > s) r.f(e, (n = a[s++]), t[n]);
            return e;
          };
    },
    "196c": function (e, t) {
      e.exports = function (e, t, n) {
        var r = void 0 === n;
        switch (t.length) {
          case 0:
            return r ? e() : e.call(n);
          case 1:
            return r ? e(t[0]) : e.call(n, t[0]);
          case 2:
            return r ? e(t[0], t[1]) : e.call(n, t[0], t[1]);
          case 3:
            return r ? e(t[0], t[1], t[2]) : e.call(n, t[0], t[1], t[2]);
          case 4:
            return r
              ? e(t[0], t[1], t[2], t[3])
              : e.call(n, t[0], t[1], t[2], t[3]);
        }
        return e.apply(n, t);
      };
    },
    1991: function (e, t, n) {
      var r,
        o,
        i,
        a = n("9b43"),
        c = n("31f4"),
        s = n("fab2"),
        u = n("230e"),
        l = n("7726"),
        p = l.process,
        f = l.setImmediate,
        d = l.clearImmediate,
        h = l.MessageChannel,
        _ = l.Dispatch,
        m = 0,
        v = {},
        y = "onreadystatechange",
        g = function () {
          var e = +this;
          if (v.hasOwnProperty(e)) {
            var t = v[e];
            delete v[e], t();
          }
        },
        b = function (e) {
          g.call(e.data);
        };
      (f && d) ||
        ((f = function (e) {
          var t = [],
            n = 1;
          while (arguments.length > n) t.push(arguments[n++]);
          return (
            (v[++m] = function () {
              c("function" == typeof e ? e : Function(e), t);
            }),
            r(m),
            m
          );
        }),
        (d = function (e) {
          delete v[e];
        }),
        "process" == n("2d95")(p)
          ? (r = function (e) {
              p.nextTick(a(g, e, 1));
            })
          : _ && _.now
          ? (r = function (e) {
              _.now(a(g, e, 1));
            })
          : h
          ? ((o = new h()),
            (i = o.port2),
            (o.port1.onmessage = b),
            (r = a(i.postMessage, i, 1)))
          : l.addEventListener &&
            "function" == typeof postMessage &&
            !l.importScripts
          ? ((r = function (e) {
              l.postMessage(e + "", "*");
            }),
            l.addEventListener("message", b, !1))
          : (r =
              y in u("script")
                ? function (e) {
                    s.appendChild(u("script"))[y] = function () {
                      s.removeChild(this), g.call(e);
                    };
                  }
                : function (e) {
                    setTimeout(a(g, e, 1), 0);
                  })),
        (e.exports = { set: f, clear: d });
    },
    "1b55": function (e, t, n) {
      var r = n("7772")("wks"),
        o = n("7b00"),
        i = n("da3c").Symbol,
        a = "function" == typeof i,
        c = (e.exports = function (e) {
          return r[e] || (r[e] = (a && i[e]) || (a ? i : o)("Symbol." + e));
        });
      c.store = r;
    },
    "1b7f": function (e, t, n) {
      "use strict";
      var r = n("562e"),
        o = "â€‹";
      e.exports = function () {
        return String.prototype.trim && o.trim() === o
          ? String.prototype.trim
          : r;
      };
    },
    "1b8f": function (e, t, n) {
      var r = n("a812"),
        o = Math.max,
        i = Math.min;
      e.exports = function (e, t) {
        return (e = r(e)), e < 0 ? o(e + t, 0) : i(e, t);
      };
    },
    "1be4": function (e, t, n) {
      "use strict";
      var r = n("da3c"),
        o = n("a7d3"),
        i = n("3adc"),
        a = n("7d95"),
        c = n("1b55")("species");
      e.exports = function (e) {
        var t = "function" == typeof o[e] ? o[e] : r[e];
        a &&
          t &&
          !t[c] &&
          i.f(t, c, {
            configurable: !0,
            get: function () {
              return this;
            },
          });
      };
    },
    "1f69": function (e, t, n) {
      "use strict";
      var r = n("2b0e"),
        o = n("c649"),
        i = function (e) {
          return r["a"].mixin({
            data: function () {
              return { containerClass: "large" };
            },
            methods: {
              updateContainerClass: function () {
                var t = this;
                requestAnimationFrame(function () {
                  var n = t.$el.getBoundingClientRect().width;
                  t.containerClass = n <= e ? "small" : "large";
                });
              },
            },
            watch: {
              width: function () {
                this.updateContainerClass();
              },
            },
            mounted: function () {
              window.addEventListener(
                "resize",
                Object(o["b"])(this.updateContainerClass.bind(this), 200)
              ),
                this.updateContainerClass();
            },
            destroyed: function () {
              window.removeEventListener("resize", function () {});
            },
          });
        };
      t["a"] = i;
    },
    "1fa8": function (e, t, n) {
      var r = n("cb7c");
      e.exports = function (e, t, n, o) {
        try {
          return o ? t(r(n)[0], n[1]) : t(n);
        } catch (a) {
          var i = e["return"];
          throw (void 0 !== i && r(i.call(e)), a);
        }
      };
    },
    2057: function (e, t) {
      e.exports =
        Number.isNaN ||
        function (e) {
          return e !== e;
        };
    },
    "210c": function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "Nilai Kapitalisasi Pasar",
          mcap: "Kapitalisasi Pasar",
          "24h_volume": "Volume 24 Jam",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "Perbandingan Harga Crypto",
          crypto_market_cap_comparison: "Perbandingan Kapitalisasi Pasar Crypto",
        },
        coin_price_static_headline_widget: {
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "24J Tinggi",
          "24h_low": "24J Rendah",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
        },
        beam_widget: {
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
        },
        coin_ticker_widget: {
          "24h_high": "24J Tinggi",
          "24h_low": "24J Rendah",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "Peta Pohon Cryptocurrency",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "Volume 24 Jam",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "Pusat Perdagangan",
          pair: "Pasangan",
          price: "Harga",
          volume: "Volume",
          trust_score: "Skor Kepercayaan",
          view_price_chart: "Lihat Grafik Harga",
          powered_by: "Didukung oleh %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "214f": function (e, t, n) {
      "use strict";
      n("b0c5");
      var r = n("2aba"),
        o = n("32e9"),
        i = n("79e5"),
        a = n("be13"),
        c = n("2b4c"),
        s = n("520a"),
        u = c("species"),
        l = !i(function () {
          var e = /./;
          return (
            (e.exec = function () {
              var e = [];
              return (e.groups = { a: "7" }), e;
            }),
            "7" !== "".replace(e, "$<a>")
          );
        }),
        p = (function () {
          var e = /(?:)/,
            t = e.exec;
          e.exec = function () {
            return t.apply(this, arguments);
          };
          var n = "ab".split(e);
          return 2 === n.length && "a" === n[0] && "b" === n[1];
        })();
      e.exports = function (e, t, n) {
        var f = c(e),
          d = !i(function () {
            var t = {};
            return (
              (t[f] = function () {
                return 7;
              }),
              7 != ""[e](t)
            );
          }),
          h = d
            ? !i(function () {
                var t = !1,
                  n = /a/;
                return (
                  (n.exec = function () {
                    return (t = !0), null;
                  }),
                  "split" === e &&
                    ((n.constructor = {}),
                    (n.constructor[u] = function () {
                      return n;
                    })),
                  n[f](""),
                  !t
                );
              })
            : void 0;
        if (!d || !h || ("replace" === e && !l) || ("split" === e && !p)) {
          var _ = /./[f],
            m = n(a, f, ""[e], function (e, t, n, r, o) {
              return t.exec === s
                ? d && !o
                  ? { done: !0, value: _.call(t, n, r) }
                  : { done: !0, value: e.call(n, t, r) }
                : { done: !1 };
            }),
            v = m[0],
            y = m[1];
          r(String.prototype, e, v),
            o(
              RegExp.prototype,
              f,
              2 == t
                ? function (e, t) {
                    return y.call(e, this, t);
                  }
                : function (e) {
                    return y.call(e, this);
                  }
            );
        }
      };
    },
    "21d0": function (e, t, n) {
      "use strict";
      var r = Function.prototype.toString,
        o = /^\s*class\b/,
        i = function (e) {
          try {
            var t = r.call(e);
            return o.test(t);
          } catch (n) {
            return !1;
          }
        },
        a = function (e) {
          try {
            return !i(e) && (r.call(e), !0);
          } catch (t) {
            return !1;
          }
        },
        c = Object.prototype.toString,
        s = "[object Function]",
        u = "[object GeneratorFunction]",
        l =
          "function" === typeof Symbol && "symbol" === typeof Symbol.toStringTag;
      e.exports = function (e) {
        if (!e) return !1;
        if ("function" !== typeof e && "object" !== typeof e) return !1;
        if ("function" === typeof e && !e.prototype) return !0;
        if (l) return a(e);
        if (i(e)) return !1;
        var t = c.call(e);
        return t === s || t === u;
      };
    },
    "230e": function (e, t, n) {
      var r = n("d3f4"),
        o = n("7726").document,
        i = r(o) && r(o.createElement);
      e.exports = function (e) {
        return i ? o.createElement(e) : {};
      };
    },
    2312: function (e, t, n) {
      e.exports = n("8ce0");
    },
    2350: function (e, t) {
      function n(e, t) {
        var n = e[1] || "",
          o = e[3];
        if (!o) return n;
        if (t && "function" === typeof btoa) {
          var i = r(o),
            a = o.sources.map(function (e) {
              return "/*# sourceURL=" + o.sourceRoot + e + " */";
            });
          return [n].concat(a).concat([i]).join("\n");
        }
        return [n].join("\n");
      }
      function r(e) {
        var t = btoa(unescape(encodeURIComponent(JSON.stringify(e)))),
          n = "sourceMappingURL=data:application/json;charset=utf-8;base64," + t;
        return "/*# " + n + " */";
      }
      e.exports = function (e) {
        var t = [];
        return (
          (t.toString = function () {
            return this.map(function (t) {
              var r = n(t, e);
              return t[2] ? "@media " + t[2] + "{" + r + "}" : r;
            }).join("");
          }),
          (t.i = function (e, n) {
            "string" === typeof e && (e = [[null, e, ""]]);
            for (var r = {}, o = 0; o < this.length; o++) {
              var i = this[o][0];
              "number" === typeof i && (r[i] = !0);
            }
            for (o = 0; o < e.length; o++) {
              var a = e[o];
              ("number" === typeof a[0] && r[a[0]]) ||
                (n && !a[2]
                  ? (a[2] = n)
                  : n && (a[2] = "(" + a[2] + ") and (" + n + ")"),
                t.push(a));
            }
          }),
          t
        );
      };
    },
    "23c6": function (e, t, n) {
      var r = n("2d95"),
        o = n("2b4c")("toStringTag"),
        i =
          "Arguments" ==
          r(
            (function () {
              return arguments;
            })()
          ),
        a = function (e, t) {
          try {
            return e[t];
          } catch (n) {}
        };
      e.exports = function (e) {
        var t, n, c;
        return void 0 === e
          ? "Undefined"
          : null === e
          ? "Null"
          : "string" == typeof (n = a((t = Object(e)), o))
          ? n
          : i
          ? r(t)
          : "Object" == (c = r(t)) && "function" == typeof t.callee
          ? "Arguments"
          : c;
      };
    },
    2418: function (e, t, n) {
      var r = n("6a9b"),
        o = n("a5ab"),
        i = n("1b8f");
      e.exports = function (e) {
        return function (t, n, a) {
          var c,
            s = r(t),
            u = o(s.length),
            l = i(a, u);
          if (e && n != n) {
            while (u > l) if (((c = s[l++]), c != c)) return !0;
          } else
            for (; u > l; l++)
              if ((e || l in s) && s[l] === n) return e || l || 0;
          return !e && -1;
        };
      };
    },
    "245b": function (e, t) {
      e.exports = function (e, t) {
        return { value: t, done: !!e };
      };
    },
    2695: function (e, t, n) {
      var r = n("43c8"),
        o = n("6a9b"),
        i = n("2418")(!1),
        a = n("5d8f")("IE_PROTO");
      e.exports = function (e, t) {
        var n,
          c = o(e),
          s = 0,
          u = [];
        for (n in c) n != a && r(c, n) && u.push(n);
        while (t.length > s) r(c, (n = t[s++])) && (~i(u, n) || u.push(n));
        return u;
      };
    },
    "27ee": function (e, t, n) {
      var r = n("23c6"),
        o = n("2b4c")("iterator"),
        i = n("84f2");
      e.exports = n("8378").getIteratorMethod = function (e) {
        if (void 0 != e) return e[o] || e["@@iterator"] || i[r(e)];
      };
    },
    2877: function (e, t, n) {
      "use strict";
      function r(e, t, n, r, o, i, a, c) {
        var s,
          u = "function" === typeof e ? e.options : e;
        if (
          (t && ((u.render = t), (u.staticRenderFns = n), (u._compiled = !0)),
          r && (u.functional = !0),
          i && (u._scopeId = "data-v-" + i),
          a
            ? ((s = function (e) {
                (e =
                  e ||
                  (this.$vnode && this.$vnode.ssrContext) ||
                  (this.parent &&
                    this.parent.$vnode &&
                    this.parent.$vnode.ssrContext)),
                  e ||
                    "undefined" === typeof __VUE_SSR_CONTEXT__ ||
                    (e = __VUE_SSR_CONTEXT__),
                  o && o.call(this, e),
                  e && e._registeredComponents && e._registeredComponents.add(a);
              }),
              (u._ssrRegister = s))
            : o &&
              (s = c
                ? function () {
                    o.call(this, this.$root.$options.shadowRoot);
                  }
                : o),
          s)
        )
          if (u.functional) {
            u._injectStyles = s;
            var l = u.render;
            u.render = function (e, t) {
              return s.call(t), l(e, t);
            };
          } else {
            var p = u.beforeCreate;
            u.beforeCreate = p ? [].concat(p, s) : [s];
          }
        return { exports: e, options: u };
      }
      n.d(t, "a", function () {
        return r;
      });
    },
    "288a": function (e, t, n) {
      "use strict";
      var r = n("d024"),
        o = n("fa4e"),
        i = n("a0d3"),
        a = n("ca9f"),
        c = function (e) {
          o(!1, e);
        },
        s = String.prototype.replace,
        u = String.prototype.split,
        l = "||||",
        p = function (e) {
          var t = e % 10;
          return 11 !== e && 1 === t
            ? 0
            : 2 <= t && t <= 4 && !(e >= 12 && e <= 14)
            ? 1
            : 2;
        },
        f = {
          arabic: function (e) {
            if (e < 3) return e;
            var t = e % 100;
            return t >= 3 && t <= 10 ? 3 : t >= 11 ? 4 : 5;
          },
          bosnian_serbian: p,
          chinese: function () {
            return 0;
          },
          croatian: p,
          french: function (e) {
            return e > 1 ? 1 : 0;
          },
          german: function (e) {
            return 1 !== e ? 1 : 0;
          },
          russian: p,
          lithuanian: function (e) {
            return e % 10 === 1 && e % 100 !== 11
              ? 0
              : e % 10 >= 2 && e % 10 <= 9 && (e % 100 < 11 || e % 100 > 19)
              ? 1
              : 2;
          },
          czech: function (e) {
            return 1 === e ? 0 : e >= 2 && e <= 4 ? 1 : 2;
          },
          polish: function (e) {
            if (1 === e) return 0;
            var t = e % 10;
            return 2 <= t && t <= 4 && (e % 100 < 10 || e % 100 >= 20) ? 1 : 2;
          },
          icelandic: function (e) {
            return e % 10 !== 1 || e % 100 === 11 ? 1 : 0;
          },
          slovenian: function (e) {
            var t = e % 100;
            return 1 === t ? 0 : 2 === t ? 1 : 3 === t || 4 === t ? 2 : 3;
          },
        },
        d = {
          arabic: ["ar"],
          bosnian_serbian: ["bs-Latn-BA", "bs-Cyrl-BA", "srl-RS", "sr-RS"],
          chinese: [
            "id",
            "id-ID",
            "ja",
            "ko",
            "ko-KR",
            "lo",
            "ms",
            "th",
            "th-TH",
            "zh",
          ],
          croatian: ["hr", "hr-HR"],
          german: [
            "fa",
            "da",
            "de",
            "en",
            "es",
            "fi",
            "el",
            "he",
            "hi-IN",
            "hu",
            "hu-HU",
            "it",
            "nl",
            "no",
            "pt",
            "sv",
            "tr",
          ],
          french: ["fr", "tl", "pt-br"],
          russian: ["ru", "ru-RU"],
          lithuanian: ["lt"],
          czech: ["cs", "cs-CZ", "sk"],
          polish: ["pl"],
          icelandic: ["is"],
          slovenian: ["sl-SL"],
        };
      function h(e) {
        var t = {};
        return (
          r(e, function (e, n) {
            r(e, function (e) {
              t[e] = n;
            });
          }),
          t
        );
      }
      function _(e) {
        var t = h(d);
        return t[e] || t[u.call(e, /-/, 1)[0]] || t.en;
      }
      function m(e, t) {
        return f[_(e)](t);
      }
      function v(e) {
        return e.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
      }
      function y(e) {
        var t = (e && e.prefix) || "%{",
          n = (e && e.suffix) || "}";
        if (t === l || n === l)
          throw new RangeError('"' + l + '" token is reserved for pluralization');
        return new RegExp(v(t) + "(.*?)" + v(n), "g");
      }
      var g = /\$/g,
        b = "$$",
        w = /%\{(.*?)\}/g;
      function x(e, t, n, r) {
        if ("string" !== typeof e)
          throw new TypeError(
            "Polyglot.transformPhrase expects argument #1 to be string"
          );
        if (null == t) return e;
        var o = e,
          c = r || w,
          p = "number" === typeof t ? { smart_count: t } : t;
        if (null != p.smart_count && o) {
          var f = u.call(o, l);
          o = a(f[m(n || "en", p.smart_count)] || f[0]);
        }
        return (
          (o = s.call(o, c, function (e, t) {
            return i(p, t) && null != p[t] ? s.call(p[t], g, b) : e;
          })),
          o
        );
      }
      function C(e) {
        var t = e || {};
        (this.phrases = {}),
          this.extend(t.phrases || {}),
          (this.currentLocale = t.locale || "en");
        var n = t.allowMissing ? x : null;
        (this.onMissingKey =
          "function" === typeof t.onMissingKey ? t.onMissingKey : n),
          (this.warn = t.warn || c),
          (this.tokenRegex = y(t.interpolation));
      }
      (C.prototype.locale = function (e) {
        return e && (this.currentLocale = e), this.currentLocale;
      }),
        (C.prototype.extend = function (e, t) {
          r(
            e,
            function (e, n) {
              var r = t ? t + "." + n : n;
              "object" === typeof e ? this.extend(e, r) : (this.phrases[r] = e);
            },
            this
          );
        }),
        (C.prototype.unset = function (e, t) {
          "string" === typeof e
            ? delete this.phrases[e]
            : r(
                e,
                function (e, n) {
                  var r = t ? t + "." + n : n;
                  "object" === typeof e
                    ? this.unset(e, r)
                    : delete this.phrases[r];
                },
                this
              );
        }),
        (C.prototype.clear = function () {
          this.phrases = {};
        }),
        (C.prototype.replace = function (e) {
          this.clear(), this.extend(e);
        }),
        (C.prototype.t = function (e, t) {
          var n,
            r,
            o = null == t ? {} : t;
          if ("string" === typeof this.phrases[e]) n = this.phrases[e];
          else if ("string" === typeof o._) n = o._;
          else if (this.onMissingKey) {
            var i = this.onMissingKey;
            r = i(e, o, this.currentLocale, this.tokenRegex);
          } else this.warn('Missing translation for key: "' + e + '"'), (r = e);
          return (
            "string" === typeof n &&
              (r = x(n, o, this.currentLocale, this.tokenRegex)),
            r
          );
        }),
        (C.prototype.has = function (e) {
          return i(this.phrases, e);
        }),
        (C.transformPhrase = function (e, t, n) {
          return x(e, t, n);
        }),
        (e.exports = C);
    },
    "29a3": function (e, t, n) {
      n("f46a"), (e.exports = n("a7d3").Number.parseFloat);
    },
    "2a4e": function (e, t, n) {
      var r = n("a812"),
        o = n("e5fa");
      e.exports = function (e) {
        return function (t, n) {
          var i,
            a,
            c = String(o(t)),
            s = r(n),
            u = c.length;
          return s < 0 || s >= u
            ? e
              ? ""
              : void 0
            : ((i = c.charCodeAt(s)),
              i < 55296 ||
              i > 56319 ||
              s + 1 === u ||
              (a = c.charCodeAt(s + 1)) < 56320 ||
              a > 57343
                ? e
                  ? c.charAt(s)
                  : i
                : e
                ? c.slice(s, s + 2)
                : a - 56320 + ((i - 55296) << 10) + 65536);
        };
      };
    },
    "2aba": function (e, t, n) {
      var r = n("7726"),
        o = n("32e9"),
        i = n("69a8"),
        a = n("ca5a")("src"),
        c = n("fa5b"),
        s = "toString",
        u = ("" + c).split(s);
      (n("8378").inspectSource = function (e) {
        return c.call(e);
      }),
        (e.exports = function (e, t, n, c) {
          var s = "function" == typeof n;
          s && (i(n, "name") || o(n, "name", t)),
            e[t] !== n &&
              (s && (i(n, a) || o(n, a, e[t] ? "" + e[t] : u.join(String(t)))),
              e === r
                ? (e[t] = n)
                : c
                ? e[t]
                  ? (e[t] = n)
                  : o(e, t, n)
                : (delete e[t], o(e, t, n)));
        })(Function.prototype, s, function () {
          return ("function" == typeof this && this[a]) || c.call(this);
        });
    },
    "2aeb": function (e, t, n) {
      var r = n("cb7c"),
        o = n("1495"),
        i = n("e11e"),
        a = n("613b")("IE_PROTO"),
        c = function () {},
        s = "prototype",
        u = function () {
          var e,
            t = n("230e")("iframe"),
            r = i.length,
            o = "<",
            a = ">";
          (t.style.display = "none"),
            n("fab2").appendChild(t),
            (t.src = "javascript:"),
            (e = t.contentWindow.document),
            e.open(),
            e.write(o + "script" + a + "document.F=Object" + o + "/script" + a),
            e.close(),
            (u = e.F);
          while (r--) delete u[s][i[r]];
          return u();
        };
      e.exports =
        Object.create ||
        function (e, t) {
          var n;
          return (
            null !== e
              ? ((c[s] = r(e)), (n = new c()), (c[s] = null), (n[a] = e))
              : (n = u()),
            void 0 === t ? n : o(n, t)
          );
        };
    },
    "2b0e": function (e, t, n) {
      "use strict";
      (function (e) {
        /*!
         * Vue.js v2.5.21
         * (c) 2014-2018 Evan You
         * Released under the MIT License.
         */ var n = Object.freeze({});
        function r(e) {
          return void 0 === e || null === e;
        }
        function o(e) {
          return void 0 !== e && null !== e;
        }
        function i(e) {
          return !0 === e;
        }
        function a(e) {
          return !1 === e;
        }
        function c(e) {
          return (
            "string" === typeof e ||
            "number" === typeof e ||
            "symbol" === typeof e ||
            "boolean" === typeof e
          );
        }
        function s(e) {
          return null !== e && "object" === typeof e;
        }
        var u = Object.prototype.toString;
        function l(e) {
          return "[object Object]" === u.call(e);
        }
        function p(e) {
          return "[object RegExp]" === u.call(e);
        }
        function f(e) {
          var t = parseFloat(String(e));
          return t >= 0 && Math.floor(t) === t && isFinite(e);
        }
        function d(e) {
          return null == e
            ? ""
            : "object" === typeof e
            ? JSON.stringify(e, null, 2)
            : String(e);
        }
        function h(e) {
          var t = parseFloat(e);
          return isNaN(t) ? e : t;
        }
        function _(e, t) {
          for (
            var n = Object.create(null), r = e.split(","), o = 0;
            o < r.length;
            o++
          )
            n[r[o]] = !0;
          return t
            ? function (e) {
                return n[e.toLowerCase()];
              }
            : function (e) {
                return n[e];
              };
        }
        _("slot,component", !0);
        var m = _("key,ref,slot,slot-scope,is");
        function v(e, t) {
          if (e.length) {
            var n = e.indexOf(t);
            if (n > -1) return e.splice(n, 1);
          }
        }
        var y = Object.prototype.hasOwnProperty;
        function g(e, t) {
          return y.call(e, t);
        }
        function b(e) {
          var t = Object.create(null);
          return function (n) {
            var r = t[n];
            return r || (t[n] = e(n));
          };
        }
        var w = /-(\w)/g,
          x = b(function (e) {
            return e.replace(w, function (e, t) {
              return t ? t.toUpperCase() : "";
            });
          }),
          C = b(function (e) {
            return e.charAt(0).toUpperCase() + e.slice(1);
          }),
          k = /\B([A-Z])/g,
          S = b(function (e) {
            return e.replace(k, "-$1").toLowerCase();
          });
        function P(e, t) {
          function n(n) {
            var r = arguments.length;
            return r ? (r > 1 ? e.apply(t, arguments) : e.call(t, n)) : e.call(t);
          }
          return (n._length = e.length), n;
        }
        function A(e, t) {
          return e.bind(t);
        }
        var O = Function.prototype.bind ? A : P;
        function $(e, t) {
          t = t || 0;
          var n = e.length - t,
            r = new Array(n);
          while (n--) r[n] = e[n + t];
          return r;
        }
        function T(e, t) {
          for (var n in t) e[n] = t[n];
          return e;
        }
        function j(e) {
          for (var t = {}, n = 0; n < e.length; n++) e[n] && T(t, e[n]);
          return t;
        }
        function E(e, t, n) {}
        var M = function (e, t, n) {
            return !1;
          },
          D = function (e) {
            return e;
          };
        function I(e, t) {
          if (e === t) return !0;
          var n = s(e),
            r = s(t);
          if (!n || !r) return !n && !r && String(e) === String(t);
          try {
            var o = Array.isArray(e),
              i = Array.isArray(t);
            if (o && i)
              return (
                e.length === t.length &&
                e.every(function (e, n) {
                  return I(e, t[n]);
                })
              );
            if (e instanceof Date && t instanceof Date)
              return e.getTime() === t.getTime();
            if (o || i) return !1;
            var a = Object.keys(e),
              c = Object.keys(t);
            return (
              a.length === c.length &&
              a.every(function (n) {
                return I(e[n], t[n]);
              })
            );
          } catch (u) {
            return !1;
          }
        }
        function L(e, t) {
          for (var n = 0; n < e.length; n++) if (I(e[n], t)) return n;
          return -1;
        }
        function F(e) {
          var t = !1;
          return function () {
            t || ((t = !0), e.apply(this, arguments));
          };
        }
        var N = "data-server-rendered",
          V = ["component", "directive", "filter"],
          R = [
            "beforeCreate",
            "created",
            "beforeMount",
            "mounted",
            "beforeUpdate",
            "updated",
            "beforeDestroy",
            "destroyed",
            "activated",
            "deactivated",
            "errorCaptured",
          ],
          H = {
            optionMergeStrategies: Object.create(null),
            silent: !1,
            productionTip: !1,
            devtools: !1,
            performance: !1,
            errorHandler: null,
            warnHandler: null,
            ignoredElements: [],
            keyCodes: Object.create(null),
            isReservedTag: M,
            isReservedAttr: M,
            isUnknownElement: M,
            getTagNamespace: E,
            parsePlatformTagName: D,
            mustUseProp: M,
            async: !0,
            _lifecycleHooks: R,
          };
        function U(e) {
          var t = (e + "").charCodeAt(0);
          return 36 === t || 95 === t;
        }
        function z(e, t, n, r) {
          Object.defineProperty(e, t, {
            value: n,
            enumerable: !!r,
            writable: !0,
            configurable: !0,
          });
        }
        var G = /[^\w.$]/;
        function B(e) {
          if (!G.test(e)) {
            var t = e.split(".");
            return function (e) {
              for (var n = 0; n < t.length; n++) {
                if (!e) return;
                e = e[t[n]];
              }
              return e;
            };
          }
        }
        var W,
          K = "__proto__" in {},
          q = "undefined" !== typeof window,
          X = "undefined" !== typeof WXEnvironment && !!WXEnvironment.platform,
          J = X && WXEnvironment.platform.toLowerCase(),
          Y = q && window.navigator.userAgent.toLowerCase(),
          Z = Y && /msie|trident/.test(Y),
          Q = Y && Y.indexOf("msie 9.0") > 0,
          ee = Y && Y.indexOf("edge/") > 0,
          te =
            (Y && Y.indexOf("android"),
            (Y && /iphone|ipad|ipod|ios/.test(Y)) || "ios" === J),
          ne = (Y && /chrome\/\d+/.test(Y), {}.watch),
          re = !1;
        if (q)
          try {
            var oe = {};
            Object.defineProperty(oe, "passive", {
              get: function () {
                re = !0;
              },
            }),
              window.addEventListener("test-passive", null, oe);
          } catch (ca) {}
        var ie = function () {
            return (
              void 0 === W &&
                (W =
                  !q &&
                  !X &&
                  "undefined" !== typeof e &&
                  e["process"] &&
                  "server" === e["process"].env.VUE_ENV),
              W
            );
          },
          ae = q && window.__VUE_DEVTOOLS_GLOBAL_HOOK__;
        function ce(e) {
          return "function" === typeof e && /native code/.test(e.toString());
        }
        var se,
          ue =
            "undefined" !== typeof Symbol &&
            ce(Symbol) &&
            "undefined" !== typeof Reflect &&
            ce(Reflect.ownKeys);
        se =
          "undefined" !== typeof Set && ce(Set)
            ? Set
            : (function () {
                function e() {
                  this.set = Object.create(null);
                }
                return (
                  (e.prototype.has = function (e) {
                    return !0 === this.set[e];
                  }),
                  (e.prototype.add = function (e) {
                    this.set[e] = !0;
                  }),
                  (e.prototype.clear = function () {
                    this.set = Object.create(null);
                  }),
                  e
                );
              })();
        var le = E,
          pe = 0,
          fe = function () {
            (this.id = pe++), (this.subs = []);
          };
        (fe.prototype.addSub = function (e) {
          this.subs.push(e);
        }),
          (fe.prototype.removeSub = function (e) {
            v(this.subs, e);
          }),
          (fe.prototype.depend = function () {
            fe.target && fe.target.addDep(this);
          }),
          (fe.prototype.notify = function () {
            var e = this.subs.slice();
            for (var t = 0, n = e.length; t < n; t++) e[t].update();
          }),
          (fe.target = null);
        var de = [];
        function he(e) {
          de.push(e), (fe.target = e);
        }
        function _e() {
          de.pop(), (fe.target = de[de.length - 1]);
        }
        var me = function (e, t, n, r, o, i, a, c) {
            (this.tag = e),
              (this.data = t),
              (this.children = n),
              (this.text = r),
              (this.elm = o),
              (this.ns = void 0),
              (this.context = i),
              (this.fnContext = void 0),
              (this.fnOptions = void 0),
              (this.fnScopeId = void 0),
              (this.key = t && t.key),
              (this.componentOptions = a),
              (this.componentInstance = void 0),
              (this.parent = void 0),
              (this.raw = !1),
              (this.isStatic = !1),
              (this.isRootInsert = !0),
              (this.isComment = !1),
              (this.isCloned = !1),
              (this.isOnce = !1),
              (this.asyncFactory = c),
              (this.asyncMeta = void 0),
              (this.isAsyncPlaceholder = !1);
          },
          ve = { child: { configurable: !0 } };
        (ve.child.get = function () {
          return this.componentInstance;
        }),
          Object.defineProperties(me.prototype, ve);
        var ye = function (e) {
          void 0 === e && (e = "");
          var t = new me();
          return (t.text = e), (t.isComment = !0), t;
        };
        function ge(e) {
          return new me(void 0, void 0, void 0, String(e));
        }
        function be(e) {
          var t = new me(
            e.tag,
            e.data,
            e.children && e.children.slice(),
            e.text,
            e.elm,
            e.context,
            e.componentOptions,
            e.asyncFactory
          );
          return (
            (t.ns = e.ns),
            (t.isStatic = e.isStatic),
            (t.key = e.key),
            (t.isComment = e.isComment),
            (t.fnContext = e.fnContext),
            (t.fnOptions = e.fnOptions),
            (t.fnScopeId = e.fnScopeId),
            (t.asyncMeta = e.asyncMeta),
            (t.isCloned = !0),
            t
          );
        }
        var we = Array.prototype,
          xe = Object.create(we),
          Ce = ["push", "pop", "shift", "unshift", "splice", "sort", "reverse"];
        Ce.forEach(function (e) {
          var t = we[e];
          z(xe, e, function () {
            var n = [],
              r = arguments.length;
            while (r--) n[r] = arguments[r];
            var o,
              i = t.apply(this, n),
              a = this.__ob__;
            switch (e) {
              case "push":
              case "unshift":
                o = n;
                break;
              case "splice":
                o = n.slice(2);
                break;
            }
            return o && a.observeArray(o), a.dep.notify(), i;
          });
        });
        var ke = Object.getOwnPropertyNames(xe),
          Se = !0;
        function Pe(e) {
          Se = e;
        }
        var Ae = function (e) {
          (this.value = e),
            (this.dep = new fe()),
            (this.vmCount = 0),
            z(e, "__ob__", this),
            Array.isArray(e)
              ? (K ? Oe(e, xe) : $e(e, xe, ke), this.observeArray(e))
              : this.walk(e);
        };
        function Oe(e, t) {
          e.__proto__ = t;
        }
        function $e(e, t, n) {
          for (var r = 0, o = n.length; r < o; r++) {
            var i = n[r];
            z(e, i, t[i]);
          }
        }
        function Te(e, t) {
          var n;
          if (s(e) && !(e instanceof me))
            return (
              g(e, "__ob__") && e.__ob__ instanceof Ae
                ? (n = e.__ob__)
                : Se &&
                  !ie() &&
                  (Array.isArray(e) || l(e)) &&
                  Object.isExtensible(e) &&
                  !e._isVue &&
                  (n = new Ae(e)),
              t && n && n.vmCount++,
              n
            );
        }
        function je(e, t, n, r, o) {
          var i = new fe(),
            a = Object.getOwnPropertyDescriptor(e, t);
          if (!a || !1 !== a.configurable) {
            var c = a && a.get,
              s = a && a.set;
            (c && !s) || 2 !== arguments.length || (n = e[t]);
            var u = !o && Te(n);
            Object.defineProperty(e, t, {
              enumerable: !0,
              configurable: !0,
              get: function () {
                var t = c ? c.call(e) : n;
                return (
                  fe.target &&
                    (i.depend(),
                    u && (u.dep.depend(), Array.isArray(t) && De(t))),
                  t
                );
              },
              set: function (t) {
                var r = c ? c.call(e) : n;
                t === r ||
                  (t !== t && r !== r) ||
                  (c && !s) ||
                  (s ? s.call(e, t) : (n = t), (u = !o && Te(t)), i.notify());
              },
            });
          }
        }
        function Ee(e, t, n) {
          if (Array.isArray(e) && f(t))
            return (e.length = Math.max(e.length, t)), e.splice(t, 1, n), n;
          if (t in e && !(t in Object.prototype)) return (e[t] = n), n;
          var r = e.__ob__;
          return e._isVue || (r && r.vmCount)
            ? n
            : r
            ? (je(r.value, t, n), r.dep.notify(), n)
            : ((e[t] = n), n);
        }
        function Me(e, t) {
          if (Array.isArray(e) && f(t)) e.splice(t, 1);
          else {
            var n = e.__ob__;
            e._isVue ||
              (n && n.vmCount) ||
              (g(e, t) && (delete e[t], n && n.dep.notify()));
          }
        }
        function De(e) {
          for (var t = void 0, n = 0, r = e.length; n < r; n++)
            (t = e[n]),
              t && t.__ob__ && t.__ob__.dep.depend(),
              Array.isArray(t) && De(t);
        }
        (Ae.prototype.walk = function (e) {
          for (var t = Object.keys(e), n = 0; n < t.length; n++) je(e, t[n]);
        }),
          (Ae.prototype.observeArray = function (e) {
            for (var t = 0, n = e.length; t < n; t++) Te(e[t]);
          });
        var Ie = H.optionMergeStrategies;
        function Le(e, t) {
          if (!t) return e;
          for (var n, r, o, i = Object.keys(t), a = 0; a < i.length; a++)
            (n = i[a]),
              (r = e[n]),
              (o = t[n]),
              g(e, n) ? r !== o && l(r) && l(o) && Le(r, o) : Ee(e, n, o);
          return e;
        }
        function Fe(e, t, n) {
          return n
            ? function () {
                var r = "function" === typeof t ? t.call(n, n) : t,
                  o = "function" === typeof e ? e.call(n, n) : e;
                return r ? Le(r, o) : o;
              }
            : t
            ? e
              ? function () {
                  return Le(
                    "function" === typeof t ? t.call(this, this) : t,
                    "function" === typeof e ? e.call(this, this) : e
                  );
                }
              : t
            : e;
        }
        function Ne(e, t) {
          return t ? (e ? e.concat(t) : Array.isArray(t) ? t : [t]) : e;
        }
        function Ve(e, t, n, r) {
          var o = Object.create(e || null);
          return t ? T(o, t) : o;
        }
        (Ie.data = function (e, t, n) {
          return n ? Fe(e, t, n) : t && "function" !== typeof t ? e : Fe(e, t);
        }),
          R.forEach(function (e) {
            Ie[e] = Ne;
          }),
          V.forEach(function (e) {
            Ie[e + "s"] = Ve;
          }),
          (Ie.watch = function (e, t, n, r) {
            if ((e === ne && (e = void 0), t === ne && (t = void 0), !t))
              return Object.create(e || null);
            if (!e) return t;
            var o = {};
            for (var i in (T(o, e), t)) {
              var a = o[i],
                c = t[i];
              a && !Array.isArray(a) && (a = [a]),
                (o[i] = a ? a.concat(c) : Array.isArray(c) ? c : [c]);
            }
            return o;
          }),
          (Ie.props =
            Ie.methods =
            Ie.inject =
            Ie.computed =
              function (e, t, n, r) {
                if (!e) return t;
                var o = Object.create(null);
                return T(o, e), t && T(o, t), o;
              }),
          (Ie.provide = Fe);
        var Re = function (e, t) {
          return void 0 === t ? e : t;
        };
        function He(e, t) {
          var n = e.props;
          if (n) {
            var r,
              o,
              i,
              a = {};
            if (Array.isArray(n)) {
              r = n.length;
              while (r--)
                (o = n[r]),
                  "string" === typeof o && ((i = x(o)), (a[i] = { type: null }));
            } else if (l(n))
              for (var c in n)
                (o = n[c]), (i = x(c)), (a[i] = l(o) ? o : { type: o });
            else 0;
            e.props = a;
          }
        }
        function Ue(e, t) {
          var n = e.inject;
          if (n) {
            var r = (e.inject = {});
            if (Array.isArray(n))
              for (var o = 0; o < n.length; o++) r[n[o]] = { from: n[o] };
            else if (l(n))
              for (var i in n) {
                var a = n[i];
                r[i] = l(a) ? T({ from: i }, a) : { from: a };
              }
            else 0;
          }
        }
        function ze(e) {
          var t = e.directives;
          if (t)
            for (var n in t) {
              var r = t[n];
              "function" === typeof r && (t[n] = { bind: r, update: r });
            }
        }
        function Ge(e, t, n) {
          if (
            ("function" === typeof t && (t = t.options),
            He(t, n),
            Ue(t, n),
            ze(t),
            !t._base && (t.extends && (e = Ge(e, t.extends, n)), t.mixins))
          )
            for (var r = 0, o = t.mixins.length; r < o; r++)
              e = Ge(e, t.mixins[r], n);
          var i,
            a = {};
          for (i in e) c(i);
          for (i in t) g(e, i) || c(i);
          function c(r) {
            var o = Ie[r] || Re;
            a[r] = o(e[r], t[r], n, r);
          }
          return a;
        }
        function Be(e, t, n, r) {
          if ("string" === typeof n) {
            var o = e[t];
            if (g(o, n)) return o[n];
            var i = x(n);
            if (g(o, i)) return o[i];
            var a = C(i);
            if (g(o, a)) return o[a];
            var c = o[n] || o[i] || o[a];
            return c;
          }
        }
        function We(e, t, n, r) {
          var o = t[e],
            i = !g(n, e),
            a = n[e],
            c = Je(Boolean, o.type);
          if (c > -1)
            if (i && !g(o, "default")) a = !1;
            else if ("" === a || a === S(e)) {
              var s = Je(String, o.type);
              (s < 0 || c < s) && (a = !0);
            }
          if (void 0 === a) {
            a = Ke(r, o, e);
            var u = Se;
            Pe(!0), Te(a), Pe(u);
          }
          return a;
        }
        function Ke(e, t, n) {
          if (g(t, "default")) {
            var r = t.default;
            return e &&
              e.$options.propsData &&
              void 0 === e.$options.propsData[n] &&
              void 0 !== e._props[n]
              ? e._props[n]
              : "function" === typeof r && "Function" !== qe(t.type)
              ? r.call(e)
              : r;
          }
        }
        function qe(e) {
          var t = e && e.toString().match(/^\s*function (\w+)/);
          return t ? t[1] : "";
        }
        function Xe(e, t) {
          return qe(e) === qe(t);
        }
        function Je(e, t) {
          if (!Array.isArray(t)) return Xe(t, e) ? 0 : -1;
          for (var n = 0, r = t.length; n < r; n++) if (Xe(t[n], e)) return n;
          return -1;
        }
        function Ye(e, t, n) {
          if (t) {
            var r = t;
            while ((r = r.$parent)) {
              var o = r.$options.errorCaptured;
              if (o)
                for (var i = 0; i < o.length; i++)
                  try {
                    var a = !1 === o[i].call(r, e, t, n);
                    if (a) return;
                  } catch (ca) {
                    Ze(ca, r, "errorCaptured hook");
                  }
            }
          }
          Ze(e, t, n);
        }
        function Ze(e, t, n) {
          if (H.errorHandler)
            try {
              return H.errorHandler.call(null, e, t, n);
            } catch (ca) {
              Qe(ca, null, "config.errorHandler");
            }
          Qe(e, t, n);
        }
        function Qe(e, t, n) {
          if ((!q && !X) || "undefined" === typeof console) throw e;
          console.error(e);
        }
        var et,
          tt,
          nt = [],
          rt = !1;
        function ot() {
          rt = !1;
          var e = nt.slice(0);
          nt.length = 0;
          for (var t = 0; t < e.length; t++) e[t]();
        }
        var it = !1;
        if ("undefined" !== typeof setImmediate && ce(setImmediate))
          tt = function () {
            setImmediate(ot);
          };
        else if (
          "undefined" === typeof MessageChannel ||
          (!ce(MessageChannel) &&
            "[object MessageChannelConstructor]" !== MessageChannel.toString())
        )
          tt = function () {
            setTimeout(ot, 0);
          };
        else {
          var at = new MessageChannel(),
            ct = at.port2;
          (at.port1.onmessage = ot),
            (tt = function () {
              ct.postMessage(1);
            });
        }
        if ("undefined" !== typeof Promise && ce(Promise)) {
          var st = Promise.resolve();
          et = function () {
            st.then(ot), te && setTimeout(E);
          };
        } else et = tt;
        function ut(e) {
          return (
            e._withTask ||
            (e._withTask = function () {
              it = !0;
              try {
                return e.apply(null, arguments);
              } finally {
                it = !1;
              }
            })
          );
        }
        function lt(e, t) {
          var n;
          if (
            (nt.push(function () {
              if (e)
                try {
                  e.call(t);
                } catch (ca) {
                  Ye(ca, t, "nextTick");
                }
              else n && n(t);
            }),
            rt || ((rt = !0), it ? tt() : et()),
            !e && "undefined" !== typeof Promise)
          )
            return new Promise(function (e) {
              n = e;
            });
        }
        var pt = new se();
        function ft(e) {
          dt(e, pt), pt.clear();
        }
        function dt(e, t) {
          var n,
            r,
            o = Array.isArray(e);
          if (!((!o && !s(e)) || Object.isFrozen(e) || e instanceof me)) {
            if (e.__ob__) {
              var i = e.__ob__.dep.id;
              if (t.has(i)) return;
              t.add(i);
            }
            if (o) {
              n = e.length;
              while (n--) dt(e[n], t);
            } else {
              (r = Object.keys(e)), (n = r.length);
              while (n--) dt(e[r[n]], t);
            }
          }
        }
        var ht,
          _t = b(function (e) {
            var t = "&" === e.charAt(0);
            e = t ? e.slice(1) : e;
            var n = "~" === e.charAt(0);
            e = n ? e.slice(1) : e;
            var r = "!" === e.charAt(0);
            return (
              (e = r ? e.slice(1) : e),
              { name: e, once: n, capture: r, passive: t }
            );
          });
        function mt(e) {
          function t() {
            var e = arguments,
              n = t.fns;
            if (!Array.isArray(n)) return n.apply(null, arguments);
            for (var r = n.slice(), o = 0; o < r.length; o++) r[o].apply(null, e);
          }
          return (t.fns = e), t;
        }
        function vt(e, t, n, o, a, c) {
          var s, u, l, p;
          for (s in e)
            (u = e[s]),
              (l = t[s]),
              (p = _t(s)),
              r(u) ||
                (r(l)
                  ? (r(u.fns) && (u = e[s] = mt(u)),
                    i(p.once) && (u = e[s] = a(p.name, u, p.capture)),
                    n(p.name, u, p.capture, p.passive, p.params))
                  : u !== l && ((l.fns = u), (e[s] = l)));
          for (s in t) r(e[s]) && ((p = _t(s)), o(p.name, t[s], p.capture));
        }
        function yt(e, t, n) {
          var a;
          e instanceof me && (e = e.data.hook || (e.data.hook = {}));
          var c = e[t];
          function s() {
            n.apply(this, arguments), v(a.fns, s);
          }
          r(c)
            ? (a = mt([s]))
            : o(c.fns) && i(c.merged)
            ? ((a = c), a.fns.push(s))
            : (a = mt([c, s])),
            (a.merged = !0),
            (e[t] = a);
        }
        function gt(e, t, n) {
          var i = t.options.props;
          if (!r(i)) {
            var a = {},
              c = e.attrs,
              s = e.props;
            if (o(c) || o(s))
              for (var u in i) {
                var l = S(u);
                bt(a, s, u, l, !0) || bt(a, c, u, l, !1);
              }
            return a;
          }
        }
        function bt(e, t, n, r, i) {
          if (o(t)) {
            if (g(t, n)) return (e[n] = t[n]), i || delete t[n], !0;
            if (g(t, r)) return (e[n] = t[r]), i || delete t[r], !0;
          }
          return !1;
        }
        function wt(e) {
          for (var t = 0; t < e.length; t++)
            if (Array.isArray(e[t])) return Array.prototype.concat.apply([], e);
          return e;
        }
        function xt(e) {
          return c(e) ? [ge(e)] : Array.isArray(e) ? kt(e) : void 0;
        }
        function Ct(e) {
          return o(e) && o(e.text) && a(e.isComment);
        }
        function kt(e, t) {
          var n,
            a,
            s,
            u,
            l = [];
          for (n = 0; n < e.length; n++)
            (a = e[n]),
              r(a) ||
                "boolean" === typeof a ||
                ((s = l.length - 1),
                (u = l[s]),
                Array.isArray(a)
                  ? a.length > 0 &&
                    ((a = kt(a, (t || "") + "_" + n)),
                    Ct(a[0]) &&
                      Ct(u) &&
                      ((l[s] = ge(u.text + a[0].text)), a.shift()),
                    l.push.apply(l, a))
                  : c(a)
                  ? Ct(u)
                    ? (l[s] = ge(u.text + a))
                    : "" !== a && l.push(ge(a))
                  : Ct(a) && Ct(u)
                  ? (l[s] = ge(u.text + a.text))
                  : (i(e._isVList) &&
                      o(a.tag) &&
                      r(a.key) &&
                      o(t) &&
                      (a.key = "__vlist" + t + "_" + n + "__"),
                    l.push(a)));
          return l;
        }
        function St(e, t) {
          return (
            (e.__esModule || (ue && "Module" === e[Symbol.toStringTag])) &&
              (e = e.default),
            s(e) ? t.extend(e) : e
          );
        }
        function Pt(e, t, n, r, o) {
          var i = ye();
          return (
            (i.asyncFactory = e),
            (i.asyncMeta = { data: t, context: n, children: r, tag: o }),
            i
          );
        }
        function At(e, t, n) {
          if (i(e.error) && o(e.errorComp)) return e.errorComp;
          if (o(e.resolved)) return e.resolved;
          if (i(e.loading) && o(e.loadingComp)) return e.loadingComp;
          if (!o(e.contexts)) {
            var a = (e.contexts = [n]),
              c = !0,
              u = function (e) {
                for (var t = 0, n = a.length; t < n; t++) a[t].$forceUpdate();
                e && (a.length = 0);
              },
              l = F(function (n) {
                (e.resolved = St(n, t)), c || u(!0);
              }),
              p = F(function (t) {
                o(e.errorComp) && ((e.error = !0), u(!0));
              }),
              f = e(l, p);
            return (
              s(f) &&
                ("function" === typeof f.then
                  ? r(e.resolved) && f.then(l, p)
                  : o(f.component) &&
                    "function" === typeof f.component.then &&
                    (f.component.then(l, p),
                    o(f.error) && (e.errorComp = St(f.error, t)),
                    o(f.loading) &&
                      ((e.loadingComp = St(f.loading, t)),
                      0 === f.delay
                        ? (e.loading = !0)
                        : setTimeout(function () {
                            r(e.resolved) &&
                              r(e.error) &&
                              ((e.loading = !0), u(!1));
                          }, f.delay || 200)),
                    o(f.timeout) &&
                      setTimeout(function () {
                        r(e.resolved) && p(null);
                      }, f.timeout))),
              (c = !1),
              e.loading ? e.loadingComp : e.resolved
            );
          }
          e.contexts.push(n);
        }
        function Ot(e) {
          return e.isComment && e.asyncFactory;
        }
        function $t(e) {
          if (Array.isArray(e))
            for (var t = 0; t < e.length; t++) {
              var n = e[t];
              if (o(n) && (o(n.componentOptions) || Ot(n))) return n;
            }
        }
        function Tt(e) {
          (e._events = Object.create(null)), (e._hasHookEvent = !1);
          var t = e.$options._parentListeners;
          t && Dt(e, t);
        }
        function jt(e, t) {
          ht.$on(e, t);
        }
        function Et(e, t) {
          ht.$off(e, t);
        }
        function Mt(e, t) {
          var n = ht;
          return function r() {
            var o = t.apply(null, arguments);
            null !== o && n.$off(e, r);
          };
        }
        function Dt(e, t, n) {
          (ht = e), vt(t, n || {}, jt, Et, Mt, e), (ht = void 0);
        }
        function It(e) {
          var t = /^hook:/;
          (e.prototype.$on = function (e, n) {
            var r = this;
            if (Array.isArray(e))
              for (var o = 0, i = e.length; o < i; o++) r.$on(e[o], n);
            else
              (r._events[e] || (r._events[e] = [])).push(n),
                t.test(e) && (r._hasHookEvent = !0);
            return r;
          }),
            (e.prototype.$once = function (e, t) {
              var n = this;
              function r() {
                n.$off(e, r), t.apply(n, arguments);
              }
              return (r.fn = t), n.$on(e, r), n;
            }),
            (e.prototype.$off = function (e, t) {
              var n = this;
              if (!arguments.length) return (n._events = Object.create(null)), n;
              if (Array.isArray(e)) {
                for (var r = 0, o = e.length; r < o; r++) n.$off(e[r], t);
                return n;
              }
              var i = n._events[e];
              if (!i) return n;
              if (!t) return (n._events[e] = null), n;
              if (t) {
                var a,
                  c = i.length;
                while (c--)
                  if (((a = i[c]), a === t || a.fn === t)) {
                    i.splice(c, 1);
                    break;
                  }
              }
              return n;
            }),
            (e.prototype.$emit = function (e) {
              var t = this,
                n = t._events[e];
              if (n) {
                n = n.length > 1 ? $(n) : n;
                for (var r = $(arguments, 1), o = 0, i = n.length; o < i; o++)
                  try {
                    n[o].apply(t, r);
                  } catch (ca) {
                    Ye(ca, t, 'event handler for "' + e + '"');
                  }
              }
              return t;
            });
        }
        function Lt(e, t) {
          var n = {};
          if (!e) return n;
          for (var r = 0, o = e.length; r < o; r++) {
            var i = e[r],
              a = i.data;
            if (
              (a && a.attrs && a.attrs.slot && delete a.attrs.slot,
              (i.context !== t && i.fnContext !== t) || !a || null == a.slot)
            )
              (n.default || (n.default = [])).push(i);
            else {
              var c = a.slot,
                s = n[c] || (n[c] = []);
              "template" === i.tag
                ? s.push.apply(s, i.children || [])
                : s.push(i);
            }
          }
          for (var u in n) n[u].every(Ft) && delete n[u];
          return n;
        }
        function Ft(e) {
          return (e.isComment && !e.asyncFactory) || " " === e.text;
        }
        function Nt(e, t) {
          t = t || {};
          for (var n = 0; n < e.length; n++)
            Array.isArray(e[n]) ? Nt(e[n], t) : (t[e[n].key] = e[n].fn);
          return t;
        }
        var Vt = null;
        function Rt(e) {
          var t = Vt;
          return (
            (Vt = e),
            function () {
              Vt = t;
            }
          );
        }
        function Ht(e) {
          var t = e.$options,
            n = t.parent;
          if (n && !t.abstract) {
            while (n.$options.abstract && n.$parent) n = n.$parent;
            n.$children.push(e);
          }
          (e.$parent = n),
            (e.$root = n ? n.$root : e),
            (e.$children = []),
            (e.$refs = {}),
            (e._watcher = null),
            (e._inactive = null),
            (e._directInactive = !1),
            (e._isMounted = !1),
            (e._isDestroyed = !1),
            (e._isBeingDestroyed = !1);
        }
        function Ut(e) {
          (e.prototype._update = function (e, t) {
            var n = this,
              r = n.$el,
              o = n._vnode,
              i = Rt(n);
            (n._vnode = e),
              (n.$el = o ? n.__patch__(o, e) : n.__patch__(n.$el, e, t, !1)),
              i(),
              r && (r.__vue__ = null),
              n.$el && (n.$el.__vue__ = n),
              n.$vnode &&
                n.$parent &&
                n.$vnode === n.$parent._vnode &&
                (n.$parent.$el = n.$el);
          }),
            (e.prototype.$forceUpdate = function () {
              var e = this;
              e._watcher && e._watcher.update();
            }),
            (e.prototype.$destroy = function () {
              var e = this;
              if (!e._isBeingDestroyed) {
                qt(e, "beforeDestroy"), (e._isBeingDestroyed = !0);
                var t = e.$parent;
                !t ||
                  t._isBeingDestroyed ||
                  e.$options.abstract ||
                  v(t.$children, e),
                  e._watcher && e._watcher.teardown();
                var n = e._watchers.length;
                while (n--) e._watchers[n].teardown();
                e._data.__ob__ && e._data.__ob__.vmCount--,
                  (e._isDestroyed = !0),
                  e.__patch__(e._vnode, null),
                  qt(e, "destroyed"),
                  e.$off(),
                  e.$el && (e.$el.__vue__ = null),
                  e.$vnode && (e.$vnode.parent = null);
              }
            });
        }
        function zt(e, t, n) {
          var r;
          return (
            (e.$el = t),
            e.$options.render || (e.$options.render = ye),
            qt(e, "beforeMount"),
            (r = function () {
              e._update(e._render(), n);
            }),
            new un(
              e,
              r,
              E,
              {
                before: function () {
                  e._isMounted && !e._isDestroyed && qt(e, "beforeUpdate");
                },
              },
              !0
            ),
            (n = !1),
            null == e.$vnode && ((e._isMounted = !0), qt(e, "mounted")),
            e
          );
        }
        function Gt(e, t, r, o, i) {
          var a = !!(
            i ||
            e.$options._renderChildren ||
            o.data.scopedSlots ||
            e.$scopedSlots !== n
          );
          if (
            ((e.$options._parentVnode = o),
            (e.$vnode = o),
            e._vnode && (e._vnode.parent = o),
            (e.$options._renderChildren = i),
            (e.$attrs = o.data.attrs || n),
            (e.$listeners = r || n),
            t && e.$options.props)
          ) {
            Pe(!1);
            for (
              var c = e._props, s = e.$options._propKeys || [], u = 0;
              u < s.length;
              u++
            ) {
              var l = s[u],
                p = e.$options.props;
              c[l] = We(l, p, t, e);
            }
            Pe(!0), (e.$options.propsData = t);
          }
          r = r || n;
          var f = e.$options._parentListeners;
          (e.$options._parentListeners = r),
            Dt(e, r, f),
            a && ((e.$slots = Lt(i, o.context)), e.$forceUpdate());
        }
        function Bt(e) {
          while (e && (e = e.$parent)) if (e._inactive) return !0;
          return !1;
        }
        function Wt(e, t) {
          if (t) {
            if (((e._directInactive = !1), Bt(e))) return;
          } else if (e._directInactive) return;
          if (e._inactive || null === e._inactive) {
            e._inactive = !1;
            for (var n = 0; n < e.$children.length; n++) Wt(e.$children[n]);
            qt(e, "activated");
          }
        }
        function Kt(e, t) {
          if ((!t || ((e._directInactive = !0), !Bt(e))) && !e._inactive) {
            e._inactive = !0;
            for (var n = 0; n < e.$children.length; n++) Kt(e.$children[n]);
            qt(e, "deactivated");
          }
        }
        function qt(e, t) {
          he();
          var n = e.$options[t];
          if (n)
            for (var r = 0, o = n.length; r < o; r++)
              try {
                n[r].call(e);
              } catch (ca) {
                Ye(ca, e, t + " hook");
              }
          e._hasHookEvent && e.$emit("hook:" + t), _e();
        }
        var Xt = [],
          Jt = [],
          Yt = {},
          Zt = !1,
          Qt = !1,
          en = 0;
        function tn() {
          (en = Xt.length = Jt.length = 0), (Yt = {}), (Zt = Qt = !1);
        }
        function nn() {
          var e, t;
          for (
            Qt = !0,
              Xt.sort(function (e, t) {
                return e.id - t.id;
              }),
              en = 0;
            en < Xt.length;
            en++
          )
            (e = Xt[en]),
              e.before && e.before(),
              (t = e.id),
              (Yt[t] = null),
              e.run();
          var n = Jt.slice(),
            r = Xt.slice();
          tn(), an(n), rn(r), ae && H.devtools && ae.emit("flush");
        }
        function rn(e) {
          var t = e.length;
          while (t--) {
            var n = e[t],
              r = n.vm;
            r._watcher === n &&
              r._isMounted &&
              !r._isDestroyed &&
              qt(r, "updated");
          }
        }
        function on(e) {
          (e._inactive = !1), Jt.push(e);
        }
        function an(e) {
          for (var t = 0; t < e.length; t++) (e[t]._inactive = !0), Wt(e[t], !0);
        }
        function cn(e) {
          var t = e.id;
          if (null == Yt[t]) {
            if (((Yt[t] = !0), Qt)) {
              var n = Xt.length - 1;
              while (n > en && Xt[n].id > e.id) n--;
              Xt.splice(n + 1, 0, e);
            } else Xt.push(e);
            Zt || ((Zt = !0), lt(nn));
          }
        }
        var sn = 0,
          un = function (e, t, n, r, o) {
            (this.vm = e),
              o && (e._watcher = this),
              e._watchers.push(this),
              r
                ? ((this.deep = !!r.deep),
                  (this.user = !!r.user),
                  (this.lazy = !!r.lazy),
                  (this.sync = !!r.sync),
                  (this.before = r.before))
                : (this.deep = this.user = this.lazy = this.sync = !1),
              (this.cb = n),
              (this.id = ++sn),
              (this.active = !0),
              (this.dirty = this.lazy),
              (this.deps = []),
              (this.newDeps = []),
              (this.depIds = new se()),
              (this.newDepIds = new se()),
              (this.expression = ""),
              "function" === typeof t
                ? (this.getter = t)
                : ((this.getter = B(t)), this.getter || (this.getter = E)),
              (this.value = this.lazy ? void 0 : this.get());
          };
        (un.prototype.get = function () {
          var e;
          he(this);
          var t = this.vm;
          try {
            e = this.getter.call(t, t);
          } catch (ca) {
            if (!this.user) throw ca;
            Ye(ca, t, 'getter for watcher "' + this.expression + '"');
          } finally {
            this.deep && ft(e), _e(), this.cleanupDeps();
          }
          return e;
        }),
          (un.prototype.addDep = function (e) {
            var t = e.id;
            this.newDepIds.has(t) ||
              (this.newDepIds.add(t),
              this.newDeps.push(e),
              this.depIds.has(t) || e.addSub(this));
          }),
          (un.prototype.cleanupDeps = function () {
            var e = this.deps.length;
            while (e--) {
              var t = this.deps[e];
              this.newDepIds.has(t.id) || t.removeSub(this);
            }
            var n = this.depIds;
            (this.depIds = this.newDepIds),
              (this.newDepIds = n),
              this.newDepIds.clear(),
              (n = this.deps),
              (this.deps = this.newDeps),
              (this.newDeps = n),
              (this.newDeps.length = 0);
          }),
          (un.prototype.update = function () {
            this.lazy ? (this.dirty = !0) : this.sync ? this.run() : cn(this);
          }),
          (un.prototype.run = function () {
            if (this.active) {
              var e = this.get();
              if (e !== this.value || s(e) || this.deep) {
                var t = this.value;
                if (((this.value = e), this.user))
                  try {
                    this.cb.call(this.vm, e, t);
                  } catch (ca) {
                    Ye(
                      ca,
                      this.vm,
                      'callback for watcher "' + this.expression + '"'
                    );
                  }
                else this.cb.call(this.vm, e, t);
              }
            }
          }),
          (un.prototype.evaluate = function () {
            (this.value = this.get()), (this.dirty = !1);
          }),
          (un.prototype.depend = function () {
            var e = this.deps.length;
            while (e--) this.deps[e].depend();
          }),
          (un.prototype.teardown = function () {
            if (this.active) {
              this.vm._isBeingDestroyed || v(this.vm._watchers, this);
              var e = this.deps.length;
              while (e--) this.deps[e].removeSub(this);
              this.active = !1;
            }
          });
        var ln = { enumerable: !0, configurable: !0, get: E, set: E };
        function pn(e, t, n) {
          (ln.get = function () {
            return this[t][n];
          }),
            (ln.set = function (e) {
              this[t][n] = e;
            }),
            Object.defineProperty(e, n, ln);
        }
        function fn(e) {
          e._watchers = [];
          var t = e.$options;
          t.props && dn(e, t.props),
            t.methods && wn(e, t.methods),
            t.data ? hn(e) : Te((e._data = {}), !0),
            t.computed && vn(e, t.computed),
            t.watch && t.watch !== ne && xn(e, t.watch);
        }
        function dn(e, t) {
          var n = e.$options.propsData || {},
            r = (e._props = {}),
            o = (e.$options._propKeys = []),
            i = !e.$parent;
          i || Pe(!1);
          var a = function (i) {
            o.push(i);
            var a = We(i, t, n, e);
            je(r, i, a), i in e || pn(e, "_props", i);
          };
          for (var c in t) a(c);
          Pe(!0);
        }
        function hn(e) {
          var t = e.$options.data;
          (t = e._data = "function" === typeof t ? _n(t, e) : t || {}),
            l(t) || (t = {});
          var n = Object.keys(t),
            r = e.$options.props,
            o = (e.$options.methods, n.length);
          while (o--) {
            var i = n[o];
            0, (r && g(r, i)) || U(i) || pn(e, "_data", i);
          }
          Te(t, !0);
        }
        function _n(e, t) {
          he();
          try {
            return e.call(t, t);
          } catch (ca) {
            return Ye(ca, t, "data()"), {};
          } finally {
            _e();
          }
        }
        var mn = { lazy: !0 };
        function vn(e, t) {
          var n = (e._computedWatchers = Object.create(null)),
            r = ie();
          for (var o in t) {
            var i = t[o],
              a = "function" === typeof i ? i : i.get;
            0, r || (n[o] = new un(e, a || E, E, mn)), o in e || yn(e, o, i);
          }
        }
        function yn(e, t, n) {
          var r = !ie();
          "function" === typeof n
            ? ((ln.get = r ? gn(t) : bn(n)), (ln.set = E))
            : ((ln.get = n.get ? (r && !1 !== n.cache ? gn(t) : bn(n.get)) : E),
              (ln.set = n.set || E)),
            Object.defineProperty(e, t, ln);
        }
        function gn(e) {
          return function () {
            var t = this._computedWatchers && this._computedWatchers[e];
            if (t)
              return t.dirty && t.evaluate(), fe.target && t.depend(), t.value;
          };
        }
        function bn(e) {
          return function () {
            return e.call(this, this);
          };
        }
        function wn(e, t) {
          e.$options.props;
          for (var n in t) e[n] = "function" !== typeof t[n] ? E : O(t[n], e);
        }
        function xn(e, t) {
          for (var n in t) {
            var r = t[n];
            if (Array.isArray(r))
              for (var o = 0; o < r.length; o++) Cn(e, n, r[o]);
            else Cn(e, n, r);
          }
        }
        function Cn(e, t, n, r) {
          return (
            l(n) && ((r = n), (n = n.handler)),
            "string" === typeof n && (n = e[n]),
            e.$watch(t, n, r)
          );
        }
        function kn(e) {
          var t = {
              get: function () {
                return this._data;
              },
            },
            n = {
              get: function () {
                return this._props;
              },
            };
          Object.defineProperty(e.prototype, "$data", t),
            Object.defineProperty(e.prototype, "$props", n),
            (e.prototype.$set = Ee),
            (e.prototype.$delete = Me),
            (e.prototype.$watch = function (e, t, n) {
              var r = this;
              if (l(t)) return Cn(r, e, t, n);
              (n = n || {}), (n.user = !0);
              var o = new un(r, e, t, n);
              if (n.immediate)
                try {
                  t.call(r, o.value);
                } catch (i) {
                  Ye(
                    i,
                    r,
                    'callback for immediate watcher "' + o.expression + '"'
                  );
                }
              return function () {
                o.teardown();
              };
            });
        }
        function Sn(e) {
          var t = e.$options.provide;
          t && (e._provided = "function" === typeof t ? t.call(e) : t);
        }
        function Pn(e) {
          var t = An(e.$options.inject, e);
          t &&
            (Pe(!1),
            Object.keys(t).forEach(function (n) {
              je(e, n, t[n]);
            }),
            Pe(!0));
        }
        function An(e, t) {
          if (e) {
            for (
              var n = Object.create(null),
                r = ue
                  ? Reflect.ownKeys(e).filter(function (t) {
                      return Object.getOwnPropertyDescriptor(e, t).enumerable;
                    })
                  : Object.keys(e),
                o = 0;
              o < r.length;
              o++
            ) {
              var i = r[o],
                a = e[i].from,
                c = t;
              while (c) {
                if (c._provided && g(c._provided, a)) {
                  n[i] = c._provided[a];
                  break;
                }
                c = c.$parent;
              }
              if (!c)
                if ("default" in e[i]) {
                  var s = e[i].default;
                  n[i] = "function" === typeof s ? s.call(t) : s;
                } else 0;
            }
            return n;
          }
        }
        function On(e, t) {
          var n, r, i, a, c;
          if (Array.isArray(e) || "string" === typeof e)
            for (n = new Array(e.length), r = 0, i = e.length; r < i; r++)
              n[r] = t(e[r], r);
          else if ("number" === typeof e)
            for (n = new Array(e), r = 0; r < e; r++) n[r] = t(r + 1, r);
          else if (s(e))
            for (
              a = Object.keys(e), n = new Array(a.length), r = 0, i = a.length;
              r < i;
              r++
            )
              (c = a[r]), (n[r] = t(e[c], c, r));
          return o(n) || (n = []), (n._isVList = !0), n;
        }
        function $n(e, t, n, r) {
          var o,
            i = this.$scopedSlots[e];
          i
            ? ((n = n || {}), r && (n = T(T({}, r), n)), (o = i(n) || t))
            : (o = this.$slots[e] || t);
          var a = n && n.slot;
          return a ? this.$createElement("template", { slot: a }, o) : o;
        }
        function Tn(e) {
          return Be(this.$options, "filters", e, !0) || D;
        }
        function jn(e, t) {
          return Array.isArray(e) ? -1 === e.indexOf(t) : e !== t;
        }
        function En(e, t, n, r, o) {
          var i = H.keyCodes[t] || n;
          return o && r && !H.keyCodes[t]
            ? jn(o, r)
            : i
            ? jn(i, e)
            : r
            ? S(r) !== t
            : void 0;
        }
        function Mn(e, t, n, r, o) {
          if (n)
            if (s(n)) {
              var i;
              Array.isArray(n) && (n = j(n));
              var a = function (a) {
                if ("class" === a || "style" === a || m(a)) i = e;
                else {
                  var c = e.attrs && e.attrs.type;
                  i =
                    r || H.mustUseProp(t, c, a)
                      ? e.domProps || (e.domProps = {})
                      : e.attrs || (e.attrs = {});
                }
                var s = x(a);
                if (!(a in i) && !(s in i) && ((i[a] = n[a]), o)) {
                  var u = e.on || (e.on = {});
                  u["update:" + s] = function (e) {
                    n[a] = e;
                  };
                }
              };
              for (var c in n) a(c);
            } else;
          return e;
        }
        function Dn(e, t) {
          var n = this._staticTrees || (this._staticTrees = []),
            r = n[e];
          return r && !t
            ? r
            : ((r = n[e] =
                this.$options.staticRenderFns[e].call(
                  this._renderProxy,
                  null,
                  this
                )),
              Ln(r, "__static__" + e, !1),
              r);
        }
        function In(e, t, n) {
          return Ln(e, "__once__" + t + (n ? "_" + n : ""), !0), e;
        }
        function Ln(e, t, n) {
          if (Array.isArray(e))
            for (var r = 0; r < e.length; r++)
              e[r] && "string" !== typeof e[r] && Fn(e[r], t + "_" + r, n);
          else Fn(e, t, n);
        }
        function Fn(e, t, n) {
          (e.isStatic = !0), (e.key = t), (e.isOnce = n);
        }
        function Nn(e, t) {
          if (t)
            if (l(t)) {
              var n = (e.on = e.on ? T({}, e.on) : {});
              for (var r in t) {
                var o = n[r],
                  i = t[r];
                n[r] = o ? [].concat(o, i) : i;
              }
            } else;
          return e;
        }
        function Vn(e) {
          (e._o = In),
            (e._n = h),
            (e._s = d),
            (e._l = On),
            (e._t = $n),
            (e._q = I),
            (e._i = L),
            (e._m = Dn),
            (e._f = Tn),
            (e._k = En),
            (e._b = Mn),
            (e._v = ge),
            (e._e = ye),
            (e._u = Nt),
            (e._g = Nn);
        }
        function Rn(e, t, r, o, a) {
          var c,
            s = a.options;
          g(o, "_uid")
            ? ((c = Object.create(o)), (c._original = o))
            : ((c = o), (o = o._original));
          var u = i(s._compiled),
            l = !u;
          (this.data = e),
            (this.props = t),
            (this.children = r),
            (this.parent = o),
            (this.listeners = e.on || n),
            (this.injections = An(s.inject, o)),
            (this.slots = function () {
              return Lt(r, o);
            }),
            u &&
              ((this.$options = s),
              (this.$slots = this.slots()),
              (this.$scopedSlots = e.scopedSlots || n)),
            s._scopeId
              ? (this._c = function (e, t, n, r) {
                  var i = Qn(c, e, t, n, r, l);
                  return (
                    i &&
                      !Array.isArray(i) &&
                      ((i.fnScopeId = s._scopeId), (i.fnContext = o)),
                    i
                  );
                })
              : (this._c = function (e, t, n, r) {
                  return Qn(c, e, t, n, r, l);
                });
        }
        function Hn(e, t, r, i, a) {
          var c = e.options,
            s = {},
            u = c.props;
          if (o(u)) for (var l in u) s[l] = We(l, u, t || n);
          else o(r.attrs) && zn(s, r.attrs), o(r.props) && zn(s, r.props);
          var p = new Rn(r, s, a, i, e),
            f = c.render.call(null, p._c, p);
          if (f instanceof me) return Un(f, r, p.parent, c, p);
          if (Array.isArray(f)) {
            for (
              var d = xt(f) || [], h = new Array(d.length), _ = 0;
              _ < d.length;
              _++
            )
              h[_] = Un(d[_], r, p.parent, c, p);
            return h;
          }
        }
        function Un(e, t, n, r, o) {
          var i = be(e);
          return (
            (i.fnContext = n),
            (i.fnOptions = r),
            t.slot && ((i.data || (i.data = {})).slot = t.slot),
            i
          );
        }
        function zn(e, t) {
          for (var n in t) e[x(n)] = t[n];
        }
        Vn(Rn.prototype);
        var Gn = {
            init: function (e, t) {
              if (
                e.componentInstance &&
                !e.componentInstance._isDestroyed &&
                e.data.keepAlive
              ) {
                var n = e;
                Gn.prepatch(n, n);
              } else {
                var r = (e.componentInstance = Kn(e, Vt));
                r.$mount(t ? e.elm : void 0, t);
              }
            },
            prepatch: function (e, t) {
              var n = t.componentOptions,
                r = (t.componentInstance = e.componentInstance);
              Gt(r, n.propsData, n.listeners, t, n.children);
            },
            insert: function (e) {
              var t = e.context,
                n = e.componentInstance;
              n._isMounted || ((n._isMounted = !0), qt(n, "mounted")),
                e.data.keepAlive && (t._isMounted ? on(n) : Wt(n, !0));
            },
            destroy: function (e) {
              var t = e.componentInstance;
              t._isDestroyed || (e.data.keepAlive ? Kt(t, !0) : t.$destroy());
            },
          },
          Bn = Object.keys(Gn);
        function Wn(e, t, n, a, c) {
          if (!r(e)) {
            var u = n.$options._base;
            if ((s(e) && (e = u.extend(e)), "function" === typeof e)) {
              var l;
              if (r(e.cid) && ((l = e), (e = At(l, u, n)), void 0 === e))
                return Pt(l, t, n, a, c);
              (t = t || {}), sr(e), o(t.model) && Jn(e.options, t);
              var p = gt(t, e, c);
              if (i(e.options.functional)) return Hn(e, p, t, n, a);
              var f = t.on;
              if (((t.on = t.nativeOn), i(e.options.abstract))) {
                var d = t.slot;
                (t = {}), d && (t.slot = d);
              }
              qn(t);
              var h = e.options.name || c,
                _ = new me(
                  "vue-component-" + e.cid + (h ? "-" + h : ""),
                  t,
                  void 0,
                  void 0,
                  void 0,
                  n,
                  { Ctor: e, propsData: p, listeners: f, tag: c, children: a },
                  l
                );
              return _;
            }
          }
        }
        function Kn(e, t) {
          var n = { _isComponent: !0, _parentVnode: e, parent: t },
            r = e.data.inlineTemplate;
          return (
            o(r) &&
              ((n.render = r.render), (n.staticRenderFns = r.staticRenderFns)),
            new e.componentOptions.Ctor(n)
          );
        }
        function qn(e) {
          for (var t = e.hook || (e.hook = {}), n = 0; n < Bn.length; n++) {
            var r = Bn[n],
              o = t[r],
              i = Gn[r];
            o === i || (o && o._merged) || (t[r] = o ? Xn(i, o) : i);
          }
        }
        function Xn(e, t) {
          var n = function (n, r) {
            e(n, r), t(n, r);
          };
          return (n._merged = !0), n;
        }
        function Jn(e, t) {
          var n = (e.model && e.model.prop) || "value",
            r = (e.model && e.model.event) || "input";
          (t.props || (t.props = {}))[n] = t.model.value;
          var i = t.on || (t.on = {}),
            a = i[r],
            c = t.model.callback;
          o(a)
            ? (Array.isArray(a) ? -1 === a.indexOf(c) : a !== c) &&
              (i[r] = [c].concat(a))
            : (i[r] = c);
        }
        var Yn = 1,
          Zn = 2;
        function Qn(e, t, n, r, o, a) {
          return (
            (Array.isArray(n) || c(n)) && ((o = r), (r = n), (n = void 0)),
            i(a) && (o = Zn),
            er(e, t, n, r, o)
          );
        }
        function er(e, t, n, r, i) {
          if (o(n) && o(n.__ob__)) return ye();
          if ((o(n) && o(n.is) && (t = n.is), !t)) return ye();
          var a, c, s;
          (Array.isArray(r) &&
            "function" === typeof r[0] &&
            ((n = n || {}), (n.scopedSlots = { default: r[0] }), (r.length = 0)),
          i === Zn ? (r = xt(r)) : i === Yn && (r = wt(r)),
          "string" === typeof t)
            ? ((c = (e.$vnode && e.$vnode.ns) || H.getTagNamespace(t)),
              (a = H.isReservedTag(t)
                ? new me(H.parsePlatformTagName(t), n, r, void 0, void 0, e)
                : (n && n.pre) || !o((s = Be(e.$options, "components", t)))
                ? new me(t, n, r, void 0, void 0, e)
                : Wn(s, n, e, r, t)))
            : (a = Wn(t, n, e, r));
          return Array.isArray(a)
            ? a
            : o(a)
            ? (o(c) && tr(a, c), o(n) && nr(n), a)
            : ye();
        }
        function tr(e, t, n) {
          if (
            ((e.ns = t),
            "foreignObject" === e.tag && ((t = void 0), (n = !0)),
            o(e.children))
          )
            for (var a = 0, c = e.children.length; a < c; a++) {
              var s = e.children[a];
              o(s.tag) && (r(s.ns) || (i(n) && "svg" !== s.tag)) && tr(s, t, n);
            }
        }
        function nr(e) {
          s(e.style) && ft(e.style), s(e.class) && ft(e.class);
        }
        function rr(e) {
          (e._vnode = null), (e._staticTrees = null);
          var t = e.$options,
            r = (e.$vnode = t._parentVnode),
            o = r && r.context;
          (e.$slots = Lt(t._renderChildren, o)),
            (e.$scopedSlots = n),
            (e._c = function (t, n, r, o) {
              return Qn(e, t, n, r, o, !1);
            }),
            (e.$createElement = function (t, n, r, o) {
              return Qn(e, t, n, r, o, !0);
            });
          var i = r && r.data;
          je(e, "$attrs", (i && i.attrs) || n, null, !0),
            je(e, "$listeners", t._parentListeners || n, null, !0);
        }
        function or(e) {
          Vn(e.prototype),
            (e.prototype.$nextTick = function (e) {
              return lt(e, this);
            }),
            (e.prototype._render = function () {
              var e,
                t = this,
                r = t.$options,
                o = r.render,
                i = r._parentVnode;
              i && (t.$scopedSlots = i.data.scopedSlots || n), (t.$vnode = i);
              try {
                e = o.call(t._renderProxy, t.$createElement);
              } catch (ca) {
                Ye(ca, t, "render"), (e = t._vnode);
              }
              return e instanceof me || (e = ye()), (e.parent = i), e;
            });
        }
        var ir = 0;
        function ar(e) {
          e.prototype._init = function (e) {
            var t = this;
            (t._uid = ir++),
              (t._isVue = !0),
              e && e._isComponent
                ? cr(t, e)
                : (t.$options = Ge(sr(t.constructor), e || {}, t)),
              (t._renderProxy = t),
              (t._self = t),
              Ht(t),
              Tt(t),
              rr(t),
              qt(t, "beforeCreate"),
              Pn(t),
              fn(t),
              Sn(t),
              qt(t, "created"),
              t.$options.el && t.$mount(t.$options.el);
          };
        }
        function cr(e, t) {
          var n = (e.$options = Object.create(e.constructor.options)),
            r = t._parentVnode;
          (n.parent = t.parent), (n._parentVnode = r);
          var o = r.componentOptions;
          (n.propsData = o.propsData),
            (n._parentListeners = o.listeners),
            (n._renderChildren = o.children),
            (n._componentTag = o.tag),
            t.render &&
              ((n.render = t.render), (n.staticRenderFns = t.staticRenderFns));
        }
        function sr(e) {
          var t = e.options;
          if (e.super) {
            var n = sr(e.super),
              r = e.superOptions;
            if (n !== r) {
              e.superOptions = n;
              var o = ur(e);
              o && T(e.extendOptions, o),
                (t = e.options = Ge(n, e.extendOptions)),
                t.name && (t.components[t.name] = e);
            }
          }
          return t;
        }
        function ur(e) {
          var t,
            n = e.options,
            r = e.extendOptions,
            o = e.sealedOptions;
          for (var i in n)
            n[i] !== o[i] && (t || (t = {}), (t[i] = lr(n[i], r[i], o[i])));
          return t;
        }
        function lr(e, t, n) {
          if (Array.isArray(e)) {
            var r = [];
            (n = Array.isArray(n) ? n : [n]), (t = Array.isArray(t) ? t : [t]);
            for (var o = 0; o < e.length; o++)
              (t.indexOf(e[o]) >= 0 || n.indexOf(e[o]) < 0) && r.push(e[o]);
            return r;
          }
          return e;
        }
        function pr(e) {
          this._init(e);
        }
        function fr(e) {
          e.use = function (e) {
            var t = this._installedPlugins || (this._installedPlugins = []);
            if (t.indexOf(e) > -1) return this;
            var n = $(arguments, 1);
            return (
              n.unshift(this),
              "function" === typeof e.install
                ? e.install.apply(e, n)
                : "function" === typeof e && e.apply(null, n),
              t.push(e),
              this
            );
          };
        }
        function dr(e) {
          e.mixin = function (e) {
            return (this.options = Ge(this.options, e)), this;
          };
        }
        function hr(e) {
          e.cid = 0;
          var t = 1;
          e.extend = function (e) {
            e = e || {};
            var n = this,
              r = n.cid,
              o = e._Ctor || (e._Ctor = {});
            if (o[r]) return o[r];
            var i = e.name || n.options.name;
            var a = function (e) {
              this._init(e);
            };
            return (
              (a.prototype = Object.create(n.prototype)),
              (a.prototype.constructor = a),
              (a.cid = t++),
              (a.options = Ge(n.options, e)),
              (a["super"] = n),
              a.options.props && _r(a),
              a.options.computed && mr(a),
              (a.extend = n.extend),
              (a.mixin = n.mixin),
              (a.use = n.use),
              V.forEach(function (e) {
                a[e] = n[e];
              }),
              i && (a.options.components[i] = a),
              (a.superOptions = n.options),
              (a.extendOptions = e),
              (a.sealedOptions = T({}, a.options)),
              (o[r] = a),
              a
            );
          };
        }
        function _r(e) {
          var t = e.options.props;
          for (var n in t) pn(e.prototype, "_props", n);
        }
        function mr(e) {
          var t = e.options.computed;
          for (var n in t) yn(e.prototype, n, t[n]);
        }
        function vr(e) {
          V.forEach(function (t) {
            e[t] = function (e, n) {
              return n
                ? ("component" === t &&
                    l(n) &&
                    ((n.name = n.name || e), (n = this.options._base.extend(n))),
                  "directive" === t &&
                    "function" === typeof n &&
                    (n = { bind: n, update: n }),
                  (this.options[t + "s"][e] = n),
                  n)
                : this.options[t + "s"][e];
            };
          });
        }
        function yr(e) {
          return e && (e.Ctor.options.name || e.tag);
        }
        function gr(e, t) {
          return Array.isArray(e)
            ? e.indexOf(t) > -1
            : "string" === typeof e
            ? e.split(",").indexOf(t) > -1
            : !!p(e) && e.test(t);
        }
        function br(e, t) {
          var n = e.cache,
            r = e.keys,
            o = e._vnode;
          for (var i in n) {
            var a = n[i];
            if (a) {
              var c = yr(a.componentOptions);
              c && !t(c) && wr(n, i, r, o);
            }
          }
        }
        function wr(e, t, n, r) {
          var o = e[t];
          !o || (r && o.tag === r.tag) || o.componentInstance.$destroy(),
            (e[t] = null),
            v(n, t);
        }
        ar(pr), kn(pr), It(pr), Ut(pr), or(pr);
        var xr = [String, RegExp, Array],
          Cr = {
            name: "keep-alive",
            abstract: !0,
            props: { include: xr, exclude: xr, max: [String, Number] },
            created: function () {
              (this.cache = Object.create(null)), (this.keys = []);
            },
            destroyed: function () {
              for (var e in this.cache) wr(this.cache, e, this.keys);
            },
            mounted: function () {
              var e = this;
              this.$watch("include", function (t) {
                br(e, function (e) {
                  return gr(t, e);
                });
              }),
                this.$watch("exclude", function (t) {
                  br(e, function (e) {
                    return !gr(t, e);
                  });
                });
            },
            render: function () {
              var e = this.$slots.default,
                t = $t(e),
                n = t && t.componentOptions;
              if (n) {
                var r = yr(n),
                  o = this,
                  i = o.include,
                  a = o.exclude;
                if ((i && (!r || !gr(i, r))) || (a && r && gr(a, r))) return t;
                var c = this,
                  s = c.cache,
                  u = c.keys,
                  l =
                    null == t.key
                      ? n.Ctor.cid + (n.tag ? "::" + n.tag : "")
                      : t.key;
                s[l]
                  ? ((t.componentInstance = s[l].componentInstance),
                    v(u, l),
                    u.push(l))
                  : ((s[l] = t),
                    u.push(l),
                    this.max &&
                      u.length > parseInt(this.max) &&
                      wr(s, u[0], u, this._vnode)),
                  (t.data.keepAlive = !0);
              }
              return t || (e && e[0]);
            },
          },
          kr = { KeepAlive: Cr };
        function Sr(e) {
          var t = {
            get: function () {
              return H;
            },
          };
          Object.defineProperty(e, "config", t),
            (e.util = {
              warn: le,
              extend: T,
              mergeOptions: Ge,
              defineReactive: je,
            }),
            (e.set = Ee),
            (e.delete = Me),
            (e.nextTick = lt),
            (e.options = Object.create(null)),
            V.forEach(function (t) {
              e.options[t + "s"] = Object.create(null);
            }),
            (e.options._base = e),
            T(e.options.components, kr),
            fr(e),
            dr(e),
            hr(e),
            vr(e);
        }
        Sr(pr),
          Object.defineProperty(pr.prototype, "$isServer", { get: ie }),
          Object.defineProperty(pr.prototype, "$ssrContext", {
            get: function () {
              return this.$vnode && this.$vnode.ssrContext;
            },
          }),
          Object.defineProperty(pr, "FunctionalRenderContext", { value: Rn }),
          (pr.version = "2.5.21");
        var Pr = _("style,class"),
          Ar = _("input,textarea,option,select,progress"),
          Or = function (e, t, n) {
            return (
              ("value" === n && Ar(e) && "button" !== t) ||
              ("selected" === n && "option" === e) ||
              ("checked" === n && "input" === e) ||
              ("muted" === n && "video" === e)
            );
          },
          $r = _("contenteditable,draggable,spellcheck"),
          Tr = _(
            "allowfullscreen,async,autofocus,autoplay,checked,compact,controls,declare,default,defaultchecked,defaultmuted,defaultselected,defer,disabled,enabled,formnovalidate,hidden,indeterminate,inert,ismap,itemscope,loop,multiple,muted,nohref,noresize,noshade,novalidate,nowrap,open,pauseonexit,readonly,required,reversed,scoped,seamless,selected,sortable,translate,truespeed,typemustmatch,visible"
          ),
          jr = "http://www.w3.org/1999/xlink",
          Er = function (e) {
            return ":" === e.charAt(5) && "xlink" === e.slice(0, 5);
          },
          Mr = function (e) {
            return Er(e) ? e.slice(6, e.length) : "";
          },
          Dr = function (e) {
            return null == e || !1 === e;
          };
        function Ir(e) {
          var t = e.data,
            n = e,
            r = e;
          while (o(r.componentInstance))
            (r = r.componentInstance._vnode), r && r.data && (t = Lr(r.data, t));
          while (o((n = n.parent))) n && n.data && (t = Lr(t, n.data));
          return Fr(t.staticClass, t.class);
        }
        function Lr(e, t) {
          return {
            staticClass: Nr(e.staticClass, t.staticClass),
            class: o(e.class) ? [e.class, t.class] : t.class,
          };
        }
        function Fr(e, t) {
          return o(e) || o(t) ? Nr(e, Vr(t)) : "";
        }
        function Nr(e, t) {
          return e ? (t ? e + " " + t : e) : t || "";
        }
        function Vr(e) {
          return Array.isArray(e)
            ? Rr(e)
            : s(e)
            ? Hr(e)
            : "string" === typeof e
            ? e
            : "";
        }
        function Rr(e) {
          for (var t, n = "", r = 0, i = e.length; r < i; r++)
            o((t = Vr(e[r]))) && "" !== t && (n && (n += " "), (n += t));
          return n;
        }
        function Hr(e) {
          var t = "";
          for (var n in e) e[n] && (t && (t += " "), (t += n));
          return t;
        }
        var Ur = {
            svg: "http://www.w3.org/2000/svg",
            math: "http://www.w3.org/1998/Math/MathML",
          },
          zr = _(
            "html,body,base,head,link,meta,style,title,address,article,aside,footer,header,h1,h2,h3,h4,h5,h6,hgroup,nav,section,div,dd,dl,dt,figcaption,figure,picture,hr,img,li,main,ol,p,pre,ul,a,b,abbr,bdi,bdo,br,cite,code,data,dfn,em,i,kbd,mark,q,rp,rt,rtc,ruby,s,samp,small,span,strong,sub,sup,time,u,var,wbr,area,audio,map,track,video,embed,object,param,source,canvas,script,noscript,del,ins,caption,col,colgroup,table,thead,tbody,td,th,tr,button,datalist,fieldset,form,input,label,legend,meter,optgroup,option,output,progress,select,textarea,details,dialog,menu,menuitem,summary,content,element,shadow,template,blockquote,iframe,tfoot"
          ),
          Gr = _(
            "svg,animate,circle,clippath,cursor,defs,desc,ellipse,filter,font-face,foreignObject,g,glyph,image,line,marker,mask,missing-glyph,path,pattern,polygon,polyline,rect,switch,symbol,text,textpath,tspan,use,view",
            !0
          ),
          Br = function (e) {
            return zr(e) || Gr(e);
          };
        function Wr(e) {
          return Gr(e) ? "svg" : "math" === e ? "math" : void 0;
        }
        var Kr = Object.create(null);
        function qr(e) {
          if (!q) return !0;
          if (Br(e)) return !1;
          if (((e = e.toLowerCase()), null != Kr[e])) return Kr[e];
          var t = document.createElement(e);
          return e.indexOf("-") > -1
            ? (Kr[e] =
                t.constructor === window.HTMLUnknownElement ||
                t.constructor === window.HTMLElement)
            : (Kr[e] = /HTMLUnknownElement/.test(t.toString()));
        }
        var Xr = _("text,number,password,search,email,tel,url");
        function Jr(e) {
          if ("string" === typeof e) {
            var t = document.querySelector(e);
            return t || document.createElement("div");
          }
          return e;
        }
        function Yr(e, t) {
          var n = document.createElement(e);
          return "select" !== e
            ? n
            : (t.data &&
                t.data.attrs &&
                void 0 !== t.data.attrs.multiple &&
                n.setAttribute("multiple", "multiple"),
              n);
        }
        function Zr(e, t) {
          return document.createElementNS(Ur[e], t);
        }
        function Qr(e) {
          return document.createTextNode(e);
        }
        function eo(e) {
          return document.createComment(e);
        }
        function to(e, t, n) {
          e.insertBefore(t, n);
        }
        function no(e, t) {
          e.removeChild(t);
        }
        function ro(e, t) {
          e.appendChild(t);
        }
        function oo(e) {
          return e.parentNode;
        }
        function io(e) {
          return e.nextSibling;
        }
        function ao(e) {
          return e.tagName;
        }
        function co(e, t) {
          e.textContent = t;
        }
        function so(e, t) {
          e.setAttribute(t, "");
        }
        var uo = Object.freeze({
            createElement: Yr,
            createElementNS: Zr,
            createTextNode: Qr,
            createComment: eo,
            insertBefore: to,
            removeChild: no,
            appendChild: ro,
            parentNode: oo,
            nextSibling: io,
            tagName: ao,
            setTextContent: co,
            setStyleScope: so,
          }),
          lo = {
            create: function (e, t) {
              po(t);
            },
            update: function (e, t) {
              e.data.ref !== t.data.ref && (po(e, !0), po(t));
            },
            destroy: function (e) {
              po(e, !0);
            },
          };
        function po(e, t) {
          var n = e.data.ref;
          if (o(n)) {
            var r = e.context,
              i = e.componentInstance || e.elm,
              a = r.$refs;
            t
              ? Array.isArray(a[n])
                ? v(a[n], i)
                : a[n] === i && (a[n] = void 0)
              : e.data.refInFor
              ? Array.isArray(a[n])
                ? a[n].indexOf(i) < 0 && a[n].push(i)
                : (a[n] = [i])
              : (a[n] = i);
          }
        }
        var fo = new me("", {}, []),
          ho = ["create", "activate", "update", "remove", "destroy"];
        function _o(e, t) {
          return (
            e.key === t.key &&
            ((e.tag === t.tag &&
              e.isComment === t.isComment &&
              o(e.data) === o(t.data) &&
              mo(e, t)) ||
              (i(e.isAsyncPlaceholder) &&
                e.asyncFactory === t.asyncFactory &&
                r(t.asyncFactory.error)))
          );
        }
        function mo(e, t) {
          if ("input" !== e.tag) return !0;
          var n,
            r = o((n = e.data)) && o((n = n.attrs)) && n.type,
            i = o((n = t.data)) && o((n = n.attrs)) && n.type;
          return r === i || (Xr(r) && Xr(i));
        }
        function vo(e, t, n) {
          var r,
            i,
            a = {};
          for (r = t; r <= n; ++r) (i = e[r].key), o(i) && (a[i] = r);
          return a;
        }
        function yo(e) {
          var t,
            n,
            a = {},
            s = e.modules,
            u = e.nodeOps;
          for (t = 0; t < ho.length; ++t)
            for (a[ho[t]] = [], n = 0; n < s.length; ++n)
              o(s[n][ho[t]]) && a[ho[t]].push(s[n][ho[t]]);
          function l(e) {
            return new me(u.tagName(e).toLowerCase(), {}, [], void 0, e);
          }
          function p(e, t) {
            function n() {
              0 === --n.listeners && f(e);
            }
            return (n.listeners = t), n;
          }
          function f(e) {
            var t = u.parentNode(e);
            o(t) && u.removeChild(t, e);
          }
          function d(e, t, n, r, a, c, s) {
            if (
              (o(e.elm) && o(c) && (e = c[s] = be(e)),
              (e.isRootInsert = !a),
              !h(e, t, n, r))
            ) {
              var l = e.data,
                p = e.children,
                f = e.tag;
              o(f)
                ? ((e.elm = e.ns
                    ? u.createElementNS(e.ns, f)
                    : u.createElement(f, e)),
                  x(e),
                  g(e, p, t),
                  o(l) && w(e, t),
                  y(n, e.elm, r))
                : i(e.isComment)
                ? ((e.elm = u.createComment(e.text)), y(n, e.elm, r))
                : ((e.elm = u.createTextNode(e.text)), y(n, e.elm, r));
            }
          }
          function h(e, t, n, r) {
            var a = e.data;
            if (o(a)) {
              var c = o(e.componentInstance) && a.keepAlive;
              if (
                (o((a = a.hook)) && o((a = a.init)) && a(e, !1),
                o(e.componentInstance))
              )
                return m(e, t), y(n, e.elm, r), i(c) && v(e, t, n, r), !0;
            }
          }
          function m(e, t) {
            o(e.data.pendingInsert) &&
              (t.push.apply(t, e.data.pendingInsert),
              (e.data.pendingInsert = null)),
              (e.elm = e.componentInstance.$el),
              b(e) ? (w(e, t), x(e)) : (po(e), t.push(e));
          }
          function v(e, t, n, r) {
            var i,
              c = e;
            while (c.componentInstance)
              if (
                ((c = c.componentInstance._vnode),
                o((i = c.data)) && o((i = i.transition)))
              ) {
                for (i = 0; i < a.activate.length; ++i) a.activate[i](fo, c);
                t.push(c);
                break;
              }
            y(n, e.elm, r);
          }
          function y(e, t, n) {
            o(e) &&
              (o(n)
                ? u.parentNode(n) === e && u.insertBefore(e, t, n)
                : u.appendChild(e, t));
          }
          function g(e, t, n) {
            if (Array.isArray(t)) {
              0;
              for (var r = 0; r < t.length; ++r)
                d(t[r], n, e.elm, null, !0, t, r);
            } else
              c(e.text) && u.appendChild(e.elm, u.createTextNode(String(e.text)));
          }
          function b(e) {
            while (e.componentInstance) e = e.componentInstance._vnode;
            return o(e.tag);
          }
          function w(e, n) {
            for (var r = 0; r < a.create.length; ++r) a.create[r](fo, e);
            (t = e.data.hook),
              o(t) && (o(t.create) && t.create(fo, e), o(t.insert) && n.push(e));
          }
          function x(e) {
            var t;
            if (o((t = e.fnScopeId))) u.setStyleScope(e.elm, t);
            else {
              var n = e;
              while (n)
                o((t = n.context)) &&
                  o((t = t.$options._scopeId)) &&
                  u.setStyleScope(e.elm, t),
                  (n = n.parent);
            }
            o((t = Vt)) &&
              t !== e.context &&
              t !== e.fnContext &&
              o((t = t.$options._scopeId)) &&
              u.setStyleScope(e.elm, t);
          }
          function C(e, t, n, r, o, i) {
            for (; r <= o; ++r) d(n[r], i, e, t, !1, n, r);
          }
          function k(e) {
            var t,
              n,
              r = e.data;
            if (o(r))
              for (
                o((t = r.hook)) && o((t = t.destroy)) && t(e), t = 0;
                t < a.destroy.length;
                ++t
              )
                a.destroy[t](e);
            if (o((t = e.children)))
              for (n = 0; n < e.children.length; ++n) k(e.children[n]);
          }
          function S(e, t, n, r) {
            for (; n <= r; ++n) {
              var i = t[n];
              o(i) && (o(i.tag) ? (P(i), k(i)) : f(i.elm));
            }
          }
          function P(e, t) {
            if (o(t) || o(e.data)) {
              var n,
                r = a.remove.length + 1;
              for (
                o(t) ? (t.listeners += r) : (t = p(e.elm, r)),
                  o((n = e.componentInstance)) &&
                    o((n = n._vnode)) &&
                    o(n.data) &&
                    P(n, t),
                  n = 0;
                n < a.remove.length;
                ++n
              )
                a.remove[n](e, t);
              o((n = e.data.hook)) && o((n = n.remove)) ? n(e, t) : t();
            } else f(e.elm);
          }
          function A(e, t, n, i, a) {
            var c,
              s,
              l,
              p,
              f = 0,
              h = 0,
              _ = t.length - 1,
              m = t[0],
              v = t[_],
              y = n.length - 1,
              g = n[0],
              b = n[y],
              w = !a;
            while (f <= _ && h <= y)
              r(m)
                ? (m = t[++f])
                : r(v)
                ? (v = t[--_])
                : _o(m, g)
                ? ($(m, g, i, n, h), (m = t[++f]), (g = n[++h]))
                : _o(v, b)
                ? ($(v, b, i, n, y), (v = t[--_]), (b = n[--y]))
                : _o(m, b)
                ? ($(m, b, i, n, y),
                  w && u.insertBefore(e, m.elm, u.nextSibling(v.elm)),
                  (m = t[++f]),
                  (b = n[--y]))
                : _o(v, g)
                ? ($(v, g, i, n, h),
                  w && u.insertBefore(e, v.elm, m.elm),
                  (v = t[--_]),
                  (g = n[++h]))
                : (r(c) && (c = vo(t, f, _)),
                  (s = o(g.key) ? c[g.key] : O(g, t, f, _)),
                  r(s)
                    ? d(g, i, e, m.elm, !1, n, h)
                    : ((l = t[s]),
                      _o(l, g)
                        ? ($(l, g, i, n, h),
                          (t[s] = void 0),
                          w && u.insertBefore(e, l.elm, m.elm))
                        : d(g, i, e, m.elm, !1, n, h)),
                  (g = n[++h]));
            f > _
              ? ((p = r(n[y + 1]) ? null : n[y + 1].elm), C(e, p, n, h, y, i))
              : h > y && S(e, t, f, _);
          }
          function O(e, t, n, r) {
            for (var i = n; i < r; i++) {
              var a = t[i];
              if (o(a) && _o(e, a)) return i;
            }
          }
          function $(e, t, n, c, s, l) {
            if (e !== t) {
              o(t.elm) && o(c) && (t = c[s] = be(t));
              var p = (t.elm = e.elm);
              if (i(e.isAsyncPlaceholder))
                o(t.asyncFactory.resolved)
                  ? E(e.elm, t, n)
                  : (t.isAsyncPlaceholder = !0);
              else if (
                i(t.isStatic) &&
                i(e.isStatic) &&
                t.key === e.key &&
                (i(t.isCloned) || i(t.isOnce))
              )
                t.componentInstance = e.componentInstance;
              else {
                var f,
                  d = t.data;
                o(d) && o((f = d.hook)) && o((f = f.prepatch)) && f(e, t);
                var h = e.children,
                  _ = t.children;
                if (o(d) && b(t)) {
                  for (f = 0; f < a.update.length; ++f) a.update[f](e, t);
                  o((f = d.hook)) && o((f = f.update)) && f(e, t);
                }
                r(t.text)
                  ? o(h) && o(_)
                    ? h !== _ && A(p, h, _, n, l)
                    : o(_)
                    ? (o(e.text) && u.setTextContent(p, ""),
                      C(p, null, _, 0, _.length - 1, n))
                    : o(h)
                    ? S(p, h, 0, h.length - 1)
                    : o(e.text) && u.setTextContent(p, "")
                  : e.text !== t.text && u.setTextContent(p, t.text),
                  o(d) && o((f = d.hook)) && o((f = f.postpatch)) && f(e, t);
              }
            }
          }
          function T(e, t, n) {
            if (i(n) && o(e.parent)) e.parent.data.pendingInsert = t;
            else for (var r = 0; r < t.length; ++r) t[r].data.hook.insert(t[r]);
          }
          var j = _("attrs,class,staticClass,staticStyle,key");
          function E(e, t, n, r) {
            var a,
              c = t.tag,
              s = t.data,
              u = t.children;
            if (
              ((r = r || (s && s.pre)),
              (t.elm = e),
              i(t.isComment) && o(t.asyncFactory))
            )
              return (t.isAsyncPlaceholder = !0), !0;
            if (
              o(s) &&
              (o((a = s.hook)) && o((a = a.init)) && a(t, !0),
              o((a = t.componentInstance)))
            )
              return m(t, n), !0;
            if (o(c)) {
              if (o(u))
                if (e.hasChildNodes())
                  if (o((a = s)) && o((a = a.domProps)) && o((a = a.innerHTML))) {
                    if (a !== e.innerHTML) return !1;
                  } else {
                    for (var l = !0, p = e.firstChild, f = 0; f < u.length; f++) {
                      if (!p || !E(p, u[f], n, r)) {
                        l = !1;
                        break;
                      }
                      p = p.nextSibling;
                    }
                    if (!l || p) return !1;
                  }
                else g(t, u, n);
              if (o(s)) {
                var d = !1;
                for (var h in s)
                  if (!j(h)) {
                    (d = !0), w(t, n);
                    break;
                  }
                !d && s["class"] && ft(s["class"]);
              }
            } else e.data !== t.text && (e.data = t.text);
            return !0;
          }
          return function (e, t, n, c) {
            if (!r(t)) {
              var s = !1,
                p = [];
              if (r(e)) (s = !0), d(t, p);
              else {
                var f = o(e.nodeType);
                if (!f && _o(e, t)) $(e, t, p, null, null, c);
                else {
                  if (f) {
                    if (
                      (1 === e.nodeType &&
                        e.hasAttribute(N) &&
                        (e.removeAttribute(N), (n = !0)),
                      i(n) && E(e, t, p))
                    )
                      return T(t, p, !0), e;
                    e = l(e);
                  }
                  var h = e.elm,
                    _ = u.parentNode(h);
                  if (
                    (d(t, p, h._leaveCb ? null : _, u.nextSibling(h)),
                    o(t.parent))
                  ) {
                    var m = t.parent,
                      v = b(t);
                    while (m) {
                      for (var y = 0; y < a.destroy.length; ++y) a.destroy[y](m);
                      if (((m.elm = t.elm), v)) {
                        for (var g = 0; g < a.create.length; ++g)
                          a.create[g](fo, m);
                        var w = m.data.hook.insert;
                        if (w.merged)
                          for (var x = 1; x < w.fns.length; x++) w.fns[x]();
                      } else po(m);
                      m = m.parent;
                    }
                  }
                  o(_) ? S(_, [e], 0, 0) : o(e.tag) && k(e);
                }
              }
              return T(t, p, s), t.elm;
            }
            o(e) && k(e);
          };
        }
        var go = {
          create: bo,
          update: bo,
          destroy: function (e) {
            bo(e, fo);
          },
        };
        function bo(e, t) {
          (e.data.directives || t.data.directives) && wo(e, t);
        }
        function wo(e, t) {
          var n,
            r,
            o,
            i = e === fo,
            a = t === fo,
            c = Co(e.data.directives, e.context),
            s = Co(t.data.directives, t.context),
            u = [],
            l = [];
          for (n in s)
            (r = c[n]),
              (o = s[n]),
              r
                ? ((o.oldValue = r.value),
                  So(o, "update", t, e),
                  o.def && o.def.componentUpdated && l.push(o))
                : (So(o, "bind", t, e), o.def && o.def.inserted && u.push(o));
          if (u.length) {
            var p = function () {
              for (var n = 0; n < u.length; n++) So(u[n], "inserted", t, e);
            };
            i ? yt(t, "insert", p) : p();
          }
          if (
            (l.length &&
              yt(t, "postpatch", function () {
                for (var n = 0; n < l.length; n++)
                  So(l[n], "componentUpdated", t, e);
              }),
            !i)
          )
            for (n in c) s[n] || So(c[n], "unbind", e, e, a);
        }
        var xo = Object.create(null);
        function Co(e, t) {
          var n,
            r,
            o = Object.create(null);
          if (!e) return o;
          for (n = 0; n < e.length; n++)
            (r = e[n]),
              r.modifiers || (r.modifiers = xo),
              (o[ko(r)] = r),
              (r.def = Be(t.$options, "directives", r.name, !0));
          return o;
        }
        function ko(e) {
          return (
            e.rawName || e.name + "." + Object.keys(e.modifiers || {}).join(".")
          );
        }
        function So(e, t, n, r, o) {
          var i = e.def && e.def[t];
          if (i)
            try {
              i(n.elm, e, n, r, o);
            } catch (ca) {
              Ye(ca, n.context, "directive " + e.name + " " + t + " hook");
            }
        }
        var Po = [lo, go];
        function Ao(e, t) {
          var n = t.componentOptions;
          if (
            (!o(n) || !1 !== n.Ctor.options.inheritAttrs) &&
            (!r(e.data.attrs) || !r(t.data.attrs))
          ) {
            var i,
              a,
              c,
              s = t.elm,
              u = e.data.attrs || {},
              l = t.data.attrs || {};
            for (i in (o(l.__ob__) && (l = t.data.attrs = T({}, l)), l))
              (a = l[i]), (c = u[i]), c !== a && Oo(s, i, a);
            for (i in ((Z || ee) &&
              l.value !== u.value &&
              Oo(s, "value", l.value),
            u))
              r(l[i]) &&
                (Er(i)
                  ? s.removeAttributeNS(jr, Mr(i))
                  : $r(i) || s.removeAttribute(i));
          }
        }
        function Oo(e, t, n) {
          e.tagName.indexOf("-") > -1
            ? $o(e, t, n)
            : Tr(t)
            ? Dr(n)
              ? e.removeAttribute(t)
              : ((n =
                  "allowfullscreen" === t && "EMBED" === e.tagName ? "true" : t),
                e.setAttribute(t, n))
            : $r(t)
            ? e.setAttribute(t, Dr(n) || "false" === n ? "false" : "true")
            : Er(t)
            ? Dr(n)
              ? e.removeAttributeNS(jr, Mr(t))
              : e.setAttributeNS(jr, t, n)
            : $o(e, t, n);
        }
        function $o(e, t, n) {
          if (Dr(n)) e.removeAttribute(t);
          else {
            if (
              Z &&
              !Q &&
              ("TEXTAREA" === e.tagName || "INPUT" === e.tagName) &&
              "placeholder" === t &&
              !e.__ieph
            ) {
              var r = function (t) {
                t.stopImmediatePropagation(), e.removeEventListener("input", r);
              };
              e.addEventListener("input", r), (e.__ieph = !0);
            }
            e.setAttribute(t, n);
          }
        }
        var To = { create: Ao, update: Ao };
        function jo(e, t) {
          var n = t.elm,
            i = t.data,
            a = e.data;
          if (
            !(
              r(i.staticClass) &&
              r(i.class) &&
              (r(a) || (r(a.staticClass) && r(a.class)))
            )
          ) {
            var c = Ir(t),
              s = n._transitionClasses;
            o(s) && (c = Nr(c, Vr(s))),
              c !== n._prevClass &&
                (n.setAttribute("class", c), (n._prevClass = c));
          }
        }
        var Eo,
          Mo = { create: jo, update: jo },
          Do = "__r",
          Io = "__c";
        function Lo(e) {
          if (o(e[Do])) {
            var t = Z ? "change" : "input";
            (e[t] = [].concat(e[Do], e[t] || [])), delete e[Do];
          }
          o(e[Io]) &&
            ((e.change = [].concat(e[Io], e.change || [])), delete e[Io]);
        }
        function Fo(e, t, n) {
          var r = Eo;
          return function o() {
            var i = t.apply(null, arguments);
            null !== i && Vo(e, o, n, r);
          };
        }
        function No(e, t, n, r) {
          (t = ut(t)),
            Eo.addEventListener(e, t, re ? { capture: n, passive: r } : n);
        }
        function Vo(e, t, n, r) {
          (r || Eo).removeEventListener(e, t._withTask || t, n);
        }
        function Ro(e, t) {
          if (!r(e.data.on) || !r(t.data.on)) {
            var n = t.data.on || {},
              o = e.data.on || {};
            (Eo = t.elm), Lo(n), vt(n, o, No, Vo, Fo, t.context), (Eo = void 0);
          }
        }
        var Ho = { create: Ro, update: Ro };
        function Uo(e, t) {
          if (!r(e.data.domProps) || !r(t.data.domProps)) {
            var n,
              i,
              a = t.elm,
              c = e.data.domProps || {},
              s = t.data.domProps || {};
            for (n in (o(s.__ob__) && (s = t.data.domProps = T({}, s)), c))
              r(s[n]) && (a[n] = "");
            for (n in s) {
              if (((i = s[n]), "textContent" === n || "innerHTML" === n)) {
                if ((t.children && (t.children.length = 0), i === c[n])) continue;
                1 === a.childNodes.length && a.removeChild(a.childNodes[0]);
              }
              if ("value" === n) {
                a._value = i;
                var u = r(i) ? "" : String(i);
                zo(a, u) && (a.value = u);
              } else a[n] = i;
            }
          }
        }
        function zo(e, t) {
          return !e.composing && ("OPTION" === e.tagName || Go(e, t) || Bo(e, t));
        }
        function Go(e, t) {
          var n = !0;
          try {
            n = document.activeElement !== e;
          } catch (ca) {}
          return n && e.value !== t;
        }
        function Bo(e, t) {
          var n = e.value,
            r = e._vModifiers;
          if (o(r)) {
            if (r.lazy) return !1;
            if (r.number) return h(n) !== h(t);
            if (r.trim) return n.trim() !== t.trim();
          }
          return n !== t;
        }
        var Wo = { create: Uo, update: Uo },
          Ko = b(function (e) {
            var t = {},
              n = /;(?![^(]*\))/g,
              r = /:(.+)/;
            return (
              e.split(n).forEach(function (e) {
                if (e) {
                  var n = e.split(r);
                  n.length > 1 && (t[n[0].trim()] = n[1].trim());
                }
              }),
              t
            );
          });
        function qo(e) {
          var t = Xo(e.style);
          return e.staticStyle ? T(e.staticStyle, t) : t;
        }
        function Xo(e) {
          return Array.isArray(e) ? j(e) : "string" === typeof e ? Ko(e) : e;
        }
        function Jo(e, t) {
          var n,
            r = {};
          if (t) {
            var o = e;
            while (o.componentInstance)
              (o = o.componentInstance._vnode),
                o && o.data && (n = qo(o.data)) && T(r, n);
          }
          (n = qo(e.data)) && T(r, n);
          var i = e;
          while ((i = i.parent)) i.data && (n = qo(i.data)) && T(r, n);
          return r;
        }
        var Yo,
          Zo = /^--/,
          Qo = /\s*!important$/,
          ei = function (e, t, n) {
            if (Zo.test(t)) e.style.setProperty(t, n);
            else if (Qo.test(n))
              e.style.setProperty(t, n.replace(Qo, ""), "important");
            else {
              var r = ni(t);
              if (Array.isArray(n))
                for (var o = 0, i = n.length; o < i; o++) e.style[r] = n[o];
              else e.style[r] = n;
            }
          },
          ti = ["Webkit", "Moz", "ms"],
          ni = b(function (e) {
            if (
              ((Yo = Yo || document.createElement("div").style),
              (e = x(e)),
              "filter" !== e && e in Yo)
            )
              return e;
            for (
              var t = e.charAt(0).toUpperCase() + e.slice(1), n = 0;
              n < ti.length;
              n++
            ) {
              var r = ti[n] + t;
              if (r in Yo) return r;
            }
          });
        function ri(e, t) {
          var n = t.data,
            i = e.data;
          if (
            !(r(n.staticStyle) && r(n.style) && r(i.staticStyle) && r(i.style))
          ) {
            var a,
              c,
              s = t.elm,
              u = i.staticStyle,
              l = i.normalizedStyle || i.style || {},
              p = u || l,
              f = Xo(t.data.style) || {};
            t.data.normalizedStyle = o(f.__ob__) ? T({}, f) : f;
            var d = Jo(t, !0);
            for (c in p) r(d[c]) && ei(s, c, "");
            for (c in d) (a = d[c]), a !== p[c] && ei(s, c, null == a ? "" : a);
          }
        }
        var oi = { create: ri, update: ri },
          ii = /\s+/;
        function ai(e, t) {
          if (t && (t = t.trim()))
            if (e.classList)
              t.indexOf(" ") > -1
                ? t.split(ii).forEach(function (t) {
                    return e.classList.add(t);
                  })
                : e.classList.add(t);
            else {
              var n = " " + (e.getAttribute("class") || "") + " ";
              n.indexOf(" " + t + " ") < 0 &&
                e.setAttribute("class", (n + t).trim());
            }
        }
        function ci(e, t) {
          if (t && (t = t.trim()))
            if (e.classList)
              t.indexOf(" ") > -1
                ? t.split(ii).forEach(function (t) {
                    return e.classList.remove(t);
                  })
                : e.classList.remove(t),
                e.classList.length || e.removeAttribute("class");
            else {
              var n = " " + (e.getAttribute("class") || "") + " ",
                r = " " + t + " ";
              while (n.indexOf(r) >= 0) n = n.replace(r, " ");
              (n = n.trim()),
                n ? e.setAttribute("class", n) : e.removeAttribute("class");
            }
        }
        function si(e) {
          if (e) {
            if ("object" === typeof e) {
              var t = {};
              return !1 !== e.css && T(t, ui(e.name || "v")), T(t, e), t;
            }
            return "string" === typeof e ? ui(e) : void 0;
          }
        }
        var ui = b(function (e) {
            return {
              enterClass: e + "-enter",
              enterToClass: e + "-enter-to",
              enterActiveClass: e + "-enter-active",
              leaveClass: e + "-leave",
              leaveToClass: e + "-leave-to",
              leaveActiveClass: e + "-leave-active",
            };
          }),
          li = q && !Q,
          pi = "transition",
          fi = "animation",
          di = "transition",
          hi = "transitionend",
          _i = "animation",
          mi = "animationend";
        li &&
          (void 0 === window.ontransitionend &&
            void 0 !== window.onwebkittransitionend &&
            ((di = "WebkitTransition"), (hi = "webkitTransitionEnd")),
          void 0 === window.onanimationend &&
            void 0 !== window.onwebkitanimationend &&
            ((_i = "WebkitAnimation"), (mi = "webkitAnimationEnd")));
        var vi = q
          ? window.requestAnimationFrame
            ? window.requestAnimationFrame.bind(window)
            : setTimeout
          : function (e) {
              return e();
            };
        function yi(e) {
          vi(function () {
            vi(e);
          });
        }
        function gi(e, t) {
          var n = e._transitionClasses || (e._transitionClasses = []);
          n.indexOf(t) < 0 && (n.push(t), ai(e, t));
        }
        function bi(e, t) {
          e._transitionClasses && v(e._transitionClasses, t), ci(e, t);
        }
        function wi(e, t, n) {
          var r = Ci(e, t),
            o = r.type,
            i = r.timeout,
            a = r.propCount;
          if (!o) return n();
          var c = o === pi ? hi : mi,
            s = 0,
            u = function () {
              e.removeEventListener(c, l), n();
            },
            l = function (t) {
              t.target === e && ++s >= a && u();
            };
          setTimeout(function () {
            s < a && u();
          }, i + 1),
            e.addEventListener(c, l);
        }
        var xi = /\b(transform|all)(,|$)/;
        function Ci(e, t) {
          var n,
            r = window.getComputedStyle(e),
            o = (r[di + "Delay"] || "").split(", "),
            i = (r[di + "Duration"] || "").split(", "),
            a = ki(o, i),
            c = (r[_i + "Delay"] || "").split(", "),
            s = (r[_i + "Duration"] || "").split(", "),
            u = ki(c, s),
            l = 0,
            p = 0;
          t === pi
            ? a > 0 && ((n = pi), (l = a), (p = i.length))
            : t === fi
            ? u > 0 && ((n = fi), (l = u), (p = s.length))
            : ((l = Math.max(a, u)),
              (n = l > 0 ? (a > u ? pi : fi) : null),
              (p = n ? (n === pi ? i.length : s.length) : 0));
          var f = n === pi && xi.test(r[di + "Property"]);
          return { type: n, timeout: l, propCount: p, hasTransform: f };
        }
        function ki(e, t) {
          while (e.length < t.length) e = e.concat(e);
          return Math.max.apply(
            null,
            t.map(function (t, n) {
              return Si(t) + Si(e[n]);
            })
          );
        }
        function Si(e) {
          return 1e3 * Number(e.slice(0, -1).replace(",", "."));
        }
        function Pi(e, t) {
          var n = e.elm;
          o(n._leaveCb) && ((n._leaveCb.cancelled = !0), n._leaveCb());
          var i = si(e.data.transition);
          if (!r(i) && !o(n._enterCb) && 1 === n.nodeType) {
            var a = i.css,
              c = i.type,
              u = i.enterClass,
              l = i.enterToClass,
              p = i.enterActiveClass,
              f = i.appearClass,
              d = i.appearToClass,
              _ = i.appearActiveClass,
              m = i.beforeEnter,
              v = i.enter,
              y = i.afterEnter,
              g = i.enterCancelled,
              b = i.beforeAppear,
              w = i.appear,
              x = i.afterAppear,
              C = i.appearCancelled,
              k = i.duration,
              S = Vt,
              P = Vt.$vnode;
            while (P && P.parent) (P = P.parent), (S = P.context);
            var A = !S._isMounted || !e.isRootInsert;
            if (!A || w || "" === w) {
              var O = A && f ? f : u,
                $ = A && _ ? _ : p,
                T = A && d ? d : l,
                j = (A && b) || m,
                E = A && "function" === typeof w ? w : v,
                M = (A && x) || y,
                D = (A && C) || g,
                I = h(s(k) ? k.enter : k);
              0;
              var L = !1 !== a && !Q,
                N = $i(E),
                V = (n._enterCb = F(function () {
                  L && (bi(n, T), bi(n, $)),
                    V.cancelled ? (L && bi(n, O), D && D(n)) : M && M(n),
                    (n._enterCb = null);
                }));
              e.data.show ||
                yt(e, "insert", function () {
                  var t = n.parentNode,
                    r = t && t._pending && t._pending[e.key];
                  r && r.tag === e.tag && r.elm._leaveCb && r.elm._leaveCb(),
                    E && E(n, V);
                }),
                j && j(n),
                L &&
                  (gi(n, O),
                  gi(n, $),
                  yi(function () {
                    bi(n, O),
                      V.cancelled ||
                        (gi(n, T), N || (Oi(I) ? setTimeout(V, I) : wi(n, c, V)));
                  })),
                e.data.show && (t && t(), E && E(n, V)),
                L || N || V();
            }
          }
        }
        function Ai(e, t) {
          var n = e.elm;
          o(n._enterCb) && ((n._enterCb.cancelled = !0), n._enterCb());
          var i = si(e.data.transition);
          if (r(i) || 1 !== n.nodeType) return t();
          if (!o(n._leaveCb)) {
            var a = i.css,
              c = i.type,
              u = i.leaveClass,
              l = i.leaveToClass,
              p = i.leaveActiveClass,
              f = i.beforeLeave,
              d = i.leave,
              _ = i.afterLeave,
              m = i.leaveCancelled,
              v = i.delayLeave,
              y = i.duration,
              g = !1 !== a && !Q,
              b = $i(d),
              w = h(s(y) ? y.leave : y);
            0;
            var x = (n._leaveCb = F(function () {
              n.parentNode &&
                n.parentNode._pending &&
                (n.parentNode._pending[e.key] = null),
                g && (bi(n, l), bi(n, p)),
                x.cancelled ? (g && bi(n, u), m && m(n)) : (t(), _ && _(n)),
                (n._leaveCb = null);
            }));
            v ? v(C) : C();
          }
          function C() {
            x.cancelled ||
              (!e.data.show &&
                n.parentNode &&
                ((n.parentNode._pending || (n.parentNode._pending = {}))[e.key] =
                  e),
              f && f(n),
              g &&
                (gi(n, u),
                gi(n, p),
                yi(function () {
                  bi(n, u),
                    x.cancelled ||
                      (gi(n, l), b || (Oi(w) ? setTimeout(x, w) : wi(n, c, x)));
                })),
              d && d(n, x),
              g || b || x());
          }
        }
        function Oi(e) {
          return "number" === typeof e && !isNaN(e);
        }
        function $i(e) {
          if (r(e)) return !1;
          var t = e.fns;
          return o(t)
            ? $i(Array.isArray(t) ? t[0] : t)
            : (e._length || e.length) > 1;
        }
        function Ti(e, t) {
          !0 !== t.data.show && Pi(t);
        }
        var ji = q
            ? {
                create: Ti,
                activate: Ti,
                remove: function (e, t) {
                  !0 !== e.data.show ? Ai(e, t) : t();
                },
              }
            : {},
          Ei = [To, Mo, Ho, Wo, oi, ji],
          Mi = Ei.concat(Po),
          Di = yo({ nodeOps: uo, modules: Mi });
        Q &&
          document.addEventListener("selectionchange", function () {
            var e = document.activeElement;
            e && e.vmodel && Ui(e, "input");
          });
        var Ii = {
          inserted: function (e, t, n, r) {
            "select" === n.tag
              ? (r.elm && !r.elm._vOptions
                  ? yt(n, "postpatch", function () {
                      Ii.componentUpdated(e, t, n);
                    })
                  : Li(e, t, n.context),
                (e._vOptions = [].map.call(e.options, Vi)))
              : ("textarea" === n.tag || Xr(e.type)) &&
                ((e._vModifiers = t.modifiers),
                t.modifiers.lazy ||
                  (e.addEventListener("compositionstart", Ri),
                  e.addEventListener("compositionend", Hi),
                  e.addEventListener("change", Hi),
                  Q && (e.vmodel = !0)));
          },
          componentUpdated: function (e, t, n) {
            if ("select" === n.tag) {
              Li(e, t, n.context);
              var r = e._vOptions,
                o = (e._vOptions = [].map.call(e.options, Vi));
              if (
                o.some(function (e, t) {
                  return !I(e, r[t]);
                })
              ) {
                var i = e.multiple
                  ? t.value.some(function (e) {
                      return Ni(e, o);
                    })
                  : t.value !== t.oldValue && Ni(t.value, o);
                i && Ui(e, "change");
              }
            }
          },
        };
        function Li(e, t, n) {
          Fi(e, t, n),
            (Z || ee) &&
              setTimeout(function () {
                Fi(e, t, n);
              }, 0);
        }
        function Fi(e, t, n) {
          var r = t.value,
            o = e.multiple;
          if (!o || Array.isArray(r)) {
            for (var i, a, c = 0, s = e.options.length; c < s; c++)
              if (((a = e.options[c]), o))
                (i = L(r, Vi(a)) > -1), a.selected !== i && (a.selected = i);
              else if (I(Vi(a), r))
                return void (e.selectedIndex !== c && (e.selectedIndex = c));
            o || (e.selectedIndex = -1);
          }
        }
        function Ni(e, t) {
          return t.every(function (t) {
            return !I(t, e);
          });
        }
        function Vi(e) {
          return "_value" in e ? e._value : e.value;
        }
        function Ri(e) {
          e.target.composing = !0;
        }
        function Hi(e) {
          e.target.composing &&
            ((e.target.composing = !1), Ui(e.target, "input"));
        }
        function Ui(e, t) {
          var n = document.createEvent("HTMLEvents");
          n.initEvent(t, !0, !0), e.dispatchEvent(n);
        }
        function zi(e) {
          return !e.componentInstance || (e.data && e.data.transition)
            ? e
            : zi(e.componentInstance._vnode);
        }
        var Gi = {
            bind: function (e, t, n) {
              var r = t.value;
              n = zi(n);
              var o = n.data && n.data.transition,
                i = (e.__vOriginalDisplay =
                  "none" === e.style.display ? "" : e.style.display);
              r && o
                ? ((n.data.show = !0),
                  Pi(n, function () {
                    e.style.display = i;
                  }))
                : (e.style.display = r ? i : "none");
            },
            update: function (e, t, n) {
              var r = t.value,
                o = t.oldValue;
              if (!r !== !o) {
                n = zi(n);
                var i = n.data && n.data.transition;
                i
                  ? ((n.data.show = !0),
                    r
                      ? Pi(n, function () {
                          e.style.display = e.__vOriginalDisplay;
                        })
                      : Ai(n, function () {
                          e.style.display = "none";
                        }))
                  : (e.style.display = r ? e.__vOriginalDisplay : "none");
              }
            },
            unbind: function (e, t, n, r, o) {
              o || (e.style.display = e.__vOriginalDisplay);
            },
          },
          Bi = { model: Ii, show: Gi },
          Wi = {
            name: String,
            appear: Boolean,
            css: Boolean,
            mode: String,
            type: String,
            enterClass: String,
            leaveClass: String,
            enterToClass: String,
            leaveToClass: String,
            enterActiveClass: String,
            leaveActiveClass: String,
            appearClass: String,
            appearActiveClass: String,
            appearToClass: String,
            duration: [Number, String, Object],
          };
        function Ki(e) {
          var t = e && e.componentOptions;
          return t && t.Ctor.options.abstract ? Ki($t(t.children)) : e;
        }
        function qi(e) {
          var t = {},
            n = e.$options;
          for (var r in n.propsData) t[r] = e[r];
          var o = n._parentListeners;
          for (var i in o) t[x(i)] = o[i];
          return t;
        }
        function Xi(e, t) {
          if (/\d-keep-alive$/.test(t.tag))
            return e("keep-alive", { props: t.componentOptions.propsData });
        }
        function Ji(e) {
          while ((e = e.parent)) if (e.data.transition) return !0;
        }
        function Yi(e, t) {
          return t.key === e.key && t.tag === e.tag;
        }
        var Zi = function (e) {
            return e.tag || Ot(e);
          },
          Qi = function (e) {
            return "show" === e.name;
          },
          ea = {
            name: "transition",
            props: Wi,
            abstract: !0,
            render: function (e) {
              var t = this,
                n = this.$slots.default;
              if (n && ((n = n.filter(Zi)), n.length)) {
                0;
                var r = this.mode;
                0;
                var o = n[0];
                if (Ji(this.$vnode)) return o;
                var i = Ki(o);
                if (!i) return o;
                if (this._leaving) return Xi(e, o);
                var a = "__transition-" + this._uid + "-";
                i.key =
                  null == i.key
                    ? i.isComment
                      ? a + "comment"
                      : a + i.tag
                    : c(i.key)
                    ? 0 === String(i.key).indexOf(a)
                      ? i.key
                      : a + i.key
                    : i.key;
                var s = ((i.data || (i.data = {})).transition = qi(this)),
                  u = this._vnode,
                  l = Ki(u);
                if (
                  (i.data.directives &&
                    i.data.directives.some(Qi) &&
                    (i.data.show = !0),
                  l &&
                    l.data &&
                    !Yi(i, l) &&
                    !Ot(l) &&
                    (!l.componentInstance ||
                      !l.componentInstance._vnode.isComment))
                ) {
                  var p = (l.data.transition = T({}, s));
                  if ("out-in" === r)
                    return (
                      (this._leaving = !0),
                      yt(p, "afterLeave", function () {
                        (t._leaving = !1), t.$forceUpdate();
                      }),
                      Xi(e, o)
                    );
                  if ("in-out" === r) {
                    if (Ot(i)) return u;
                    var f,
                      d = function () {
                        f();
                      };
                    yt(s, "afterEnter", d),
                      yt(s, "enterCancelled", d),
                      yt(p, "delayLeave", function (e) {
                        f = e;
                      });
                  }
                }
                return o;
              }
            },
          },
          ta = T({ tag: String, moveClass: String }, Wi);
        delete ta.mode;
        var na = {
          props: ta,
          beforeMount: function () {
            var e = this,
              t = this._update;
            this._update = function (n, r) {
              var o = Rt(e);
              e.__patch__(e._vnode, e.kept, !1, !0),
                (e._vnode = e.kept),
                o(),
                t.call(e, n, r);
            };
          },
          render: function (e) {
            for (
              var t = this.tag || this.$vnode.data.tag || "span",
                n = Object.create(null),
                r = (this.prevChildren = this.children),
                o = this.$slots.default || [],
                i = (this.children = []),
                a = qi(this),
                c = 0;
              c < o.length;
              c++
            ) {
              var s = o[c];
              if (s.tag)
                if (null != s.key && 0 !== String(s.key).indexOf("__vlist"))
                  i.push(s),
                    (n[s.key] = s),
                    ((s.data || (s.data = {})).transition = a);
                else;
            }
            if (r) {
              for (var u = [], l = [], p = 0; p < r.length; p++) {
                var f = r[p];
                (f.data.transition = a),
                  (f.data.pos = f.elm.getBoundingClientRect()),
                  n[f.key] ? u.push(f) : l.push(f);
              }
              (this.kept = e(t, null, u)), (this.removed = l);
            }
            return e(t, null, i);
          },
          updated: function () {
            var e = this.prevChildren,
              t = this.moveClass || (this.name || "v") + "-move";
            e.length &&
              this.hasMove(e[0].elm, t) &&
              (e.forEach(ra),
              e.forEach(oa),
              e.forEach(ia),
              (this._reflow = document.body.offsetHeight),
              e.forEach(function (e) {
                if (e.data.moved) {
                  var n = e.elm,
                    r = n.style;
                  gi(n, t),
                    (r.transform = r.WebkitTransform = r.transitionDuration = ""),
                    n.addEventListener(
                      hi,
                      (n._moveCb = function e(r) {
                        (r && r.target !== n) ||
                          (r && !/transform$/.test(r.propertyName)) ||
                          (n.removeEventListener(hi, e),
                          (n._moveCb = null),
                          bi(n, t));
                      })
                    );
                }
              }));
          },
          methods: {
            hasMove: function (e, t) {
              if (!li) return !1;
              if (this._hasMove) return this._hasMove;
              var n = e.cloneNode();
              e._transitionClasses &&
                e._transitionClasses.forEach(function (e) {
                  ci(n, e);
                }),
                ai(n, t),
                (n.style.display = "none"),
                this.$el.appendChild(n);
              var r = Ci(n);
              return this.$el.removeChild(n), (this._hasMove = r.hasTransform);
            },
          },
        };
        function ra(e) {
          e.elm._moveCb && e.elm._moveCb(), e.elm._enterCb && e.elm._enterCb();
        }
        function oa(e) {
          e.data.newPos = e.elm.getBoundingClientRect();
        }
        function ia(e) {
          var t = e.data.pos,
            n = e.data.newPos,
            r = t.left - n.left,
            o = t.top - n.top;
          if (r || o) {
            e.data.moved = !0;
            var i = e.elm.style;
            (i.transform = i.WebkitTransform =
              "translate(" + r + "px," + o + "px)"),
              (i.transitionDuration = "0s");
          }
        }
        var aa = { Transition: ea, TransitionGroup: na };
        (pr.config.mustUseProp = Or),
          (pr.config.isReservedTag = Br),
          (pr.config.isReservedAttr = Pr),
          (pr.config.getTagNamespace = Wr),
          (pr.config.isUnknownElement = qr),
          T(pr.options.directives, Bi),
          T(pr.options.components, aa),
          (pr.prototype.__patch__ = q ? Di : E),
          (pr.prototype.$mount = function (e, t) {
            return (e = e && q ? Jr(e) : void 0), zt(this, e, t);
          }),
          q &&
            setTimeout(function () {
              H.devtools && ae && ae.emit("init", pr);
            }, 0),
          (t["a"] = pr);
      }.call(this, n("c8ba")));
    },
    "2b4c": function (e, t, n) {
      var r = n("5537")("wks"),
        o = n("ca5a"),
        i = n("7726").Symbol,
        a = "function" == typeof i,
        c = (e.exports = function (e) {
          return r[e] || (r[e] = (a && i[e]) || (a ? i : o)("Symbol." + e));
        });
      c.store = r;
    },
    "2d00": function (e, t) {
      e.exports = !1;
    },
    "2d95": function (e, t) {
      var n = {}.toString;
      e.exports = function (e) {
        return n.call(e).slice(8, -1);
      };
    },
    "2ea1": function (e, t, n) {
      var r = n("6f8a");
      e.exports = function (e, t) {
        if (!r(e)) return e;
        var n, o;
        if (t && "function" == typeof (n = e.toString) && !r((o = n.call(e))))
          return o;
        if ("function" == typeof (n = e.valueOf) && !r((o = n.call(e)))) return o;
        if (!t && "function" == typeof (n = e.toString) && !r((o = n.call(e))))
          return o;
        throw TypeError("Can't convert object to primitive value");
      };
    },
    "2f17": function (e, t, n) {
      "use strict";
      var r = Object.prototype.toString,
        o = n("4de8"),
        i = n("21d0"),
        a = {
          "[[DefaultValue]]": function (e) {
            var t;
            if (
              ((t =
                arguments.length > 1
                  ? arguments[1]
                  : "[object Date]" === r.call(e)
                  ? String
                  : Number),
              t === String || t === Number)
            ) {
              var n,
                a,
                c =
                  t === String
                    ? ["toString", "valueOf"]
                    : ["valueOf", "toString"];
              for (a = 0; a < c.length; ++a)
                if (i(e[c[a]]) && ((n = e[c[a]]()), o(n))) return n;
              throw new TypeError("No default value");
            }
            throw new TypeError("invalid [[DefaultValue]] hint supplied");
          },
        };
      e.exports = function (e) {
        return o(e)
          ? e
          : arguments.length > 1
          ? a["[[DefaultValue]]"](e, arguments[1])
          : a["[[DefaultValue]]"](e);
      };
    },
    "302f": function (e, t, n) {
      var r = n("0f89"),
        o = n("f2fe"),
        i = n("1b55")("species");
      e.exports = function (e, t) {
        var n,
          a = r(e).constructor;
        return void 0 === a || void 0 == (n = r(a)[i]) ? t : o(n);
      };
    },
    "31c2": function (e, t) {
      t.f = Object.getOwnPropertySymbols;
    },
    "31f4": function (e, t) {
      e.exports = function (e, t, n) {
        var r = void 0 === n;
        switch (t.length) {
          case 0:
            return r ? e() : e.call(n);
          case 1:
            return r ? e(t[0]) : e.call(n, t[0]);
          case 2:
            return r ? e(t[0], t[1]) : e.call(n, t[0], t[1]);
          case 3:
            return r ? e(t[0], t[1], t[2]) : e.call(n, t[0], t[1], t[2]);
          case 4:
            return r
              ? e(t[0], t[1], t[2], t[3])
              : e.call(n, t[0], t[1], t[2], t[3]);
        }
        return e.apply(n, t);
      };
    },
    "32e9": function (e, t, n) {
      var r = n("86cc"),
        o = n("4630");
      e.exports = n("9e1e")
        ? function (e, t, n) {
            return r.f(e, t, o(1, n));
          }
        : function (e, t, n) {
            return (e[t] = n), e;
          };
    },
    "33a4": function (e, t, n) {
      var r = n("84f2"),
        o = n("2b4c")("iterator"),
        i = Array.prototype;
      e.exports = function (e) {
        return void 0 !== e && (r.Array === e || i[o] === e);
      };
    },
    3504: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "æ€»å¸‚å€¼æŽ’å",
          mcap: "å¸‚å€¼",
          "24h_volume": "24 å°æ—¶äº¤æ˜“é‡",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
          crypto_price_comparison: "åŠ å¯†ä»·æ ¼æ¯”è¾ƒ",
          crypto_market_cap_comparison: "åŠ å¯†å¸‚å€¼æ¯”è¾ƒ",
        },
        coin_price_static_headline_widget: {
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
        },
        coin_price_chart_widget: {
          "24h_high": "24å°æ—¶é«˜",
          "24h_low": "24å°æ—¶ä½Ž",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
        },
        coin_price_marquee_widget: {
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
        },
        coin_list_widget: {
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
        },
        beam_widget: { powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨" },
        coin_ticker_widget: {
          "24h_high": "24å°æ—¶é«˜",
          "24h_low": "24å°æ—¶ä½Ž",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
        },
        coin_heatmap_widget: {
          title: "åŠ å¯†è´§å¸æ ‘åž‹å›¾",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "24 å°æ—¶äº¤æ˜“é‡",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "äº¤æ˜“æ‰€",
          pair: "å¯¹",
          price: "ä»·æ ¼",
          volume: "äº¤æ˜“é‡",
          trust_score: "ä¿¡ç”¨è¯„åˆ†",
          view_price_chart: "æµè§ˆä»·æ ¼èµ°åŠ¿å›¾",
          powered_by: "ç”±%{name_start}%{name}%{name_end}æŽ¨åŠ¨",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "36dc": function (e, t, n) {
      var r = n("da3c"),
        o = n("df0a").set,
        i = r.MutationObserver || r.WebKitMutationObserver,
        a = r.process,
        c = r.Promise,
        s = "process" == n("6e1f")(a);
      e.exports = function () {
        var e,
          t,
          n,
          u = function () {
            var r, o;
            s && (r = a.domain) && r.exit();
            while (e) {
              (o = e.fn), (e = e.next);
              try {
                o();
              } catch (i) {
                throw (e ? n() : (t = void 0), i);
              }
            }
            (t = void 0), r && r.enter();
          };
        if (s)
          n = function () {
            a.nextTick(u);
          };
        else if (!i || (r.navigator && r.navigator.standalone))
          if (c && c.resolve) {
            var l = c.resolve(void 0);
            n = function () {
              l.then(u);
            };
          } else
            n = function () {
              o.call(r, u);
            };
        else {
          var p = !0,
            f = document.createTextNode("");
          new i(u).observe(f, { characterData: !0 }),
            (n = function () {
              f.data = p = !p;
            });
        }
        return function (r) {
          var o = { fn: r, next: void 0 };
          t && (t.next = o), e || ((e = o), n()), (t = o);
        };
      };
    },
    3846: function (e, t, n) {
      n("9e1e") &&
        "g" != /./g.flags &&
        n("86cc").f(RegExp.prototype, "flags", {
          configurable: !0,
          get: n("0bfb"),
        });
    },
    "384f": function (e, t, n) {
      var r = n("d13f"),
        o = n("11ff");
      r(r.G + r.F * (parseFloat != o), { parseFloat: o });
    },
    "38fd": function (e, t, n) {
      var r = n("69a8"),
        o = n("4bf8"),
        i = n("613b")("IE_PROTO"),
        a = Object.prototype;
      e.exports =
        Object.getPrototypeOf ||
        function (e) {
          return (
            (e = o(e)),
            r(e, i)
              ? e[i]
              : "function" == typeof e.constructor && e instanceof e.constructor
              ? e.constructor.prototype
              : e instanceof Object
              ? a
              : null
          );
        };
    },
    3904: function (e, t, n) {
      var r = n("8ce0");
      e.exports = function (e, t, n) {
        for (var o in t) n && e[o] ? (e[o] = t[o]) : r(e, o, t[o]);
        return e;
      };
    },
    "3adc": function (e, t, n) {
      var r = n("0f89"),
        o = n("a47f"),
        i = n("2ea1"),
        a = Object.defineProperty;
      t.f = n("7d95")
        ? Object.defineProperty
        : function (e, t, n) {
            if ((r(e), (t = i(t, !0)), r(n), o))
              try {
                return a(e, t, n);
              } catch (c) {}
            if ("get" in n || "set" in n)
              throw TypeError("Accessors not supported!");
            return "value" in n && (e[t] = n.value), e;
          };
    },
    "41a0": function (e, t, n) {
      "use strict";
      var r = n("2aeb"),
        o = n("4630"),
        i = n("7f20"),
        a = {};
      n("32e9")(a, n("2b4c")("iterator"), function () {
        return this;
      }),
        (e.exports = function (e, t, n) {
          (e.prototype = r(a, { next: o(1, n) })), i(e, t + " Iterator");
        });
    },
    "436c": function (e, t, n) {
      var r = n("1b55")("iterator"),
        o = !1;
      try {
        var i = [7][r]();
        (i["return"] = function () {
          o = !0;
        }),
          Array.from(i, function () {
            throw 2;
          });
      } catch (a) {}
      e.exports = function (e, t) {
        if (!t && !o) return !1;
        var n = !1;
        try {
          var i = [7],
            c = i[r]();
          (c.next = function () {
            return { done: (n = !0) };
          }),
            (i[r] = function () {
              return c;
            }),
            e(i);
        } catch (a) {}
        return n;
      };
    },
    "43c8": function (e, t) {
      var n = {}.hasOwnProperty;
      e.exports = function (e, t) {
        return n.call(e, t);
      };
    },
    4588: function (e, t) {
      var n = Math.ceil,
        r = Math.floor;
      e.exports = function (e) {
        return isNaN((e = +e)) ? 0 : (e > 0 ? r : n)(e);
      };
    },
    4630: function (e, t) {
      e.exports = function (e, t) {
        return {
          enumerable: !(1 & e),
          configurable: !(2 & e),
          writable: !(4 & e),
          value: t,
        };
      };
    },
    4917: function (e, t, n) {
      "use strict";
      var r = n("cb7c"),
        o = n("9def"),
        i = n("0390"),
        a = n("5f1b");
      n("214f")("match", 1, function (e, t, n, c) {
        return [
          function (n) {
            var r = e(this),
              o = void 0 == n ? void 0 : n[t];
            return void 0 !== o ? o.call(n, r) : new RegExp(n)[t](String(r));
          },
          function (e) {
            var t = c(n, e, this);
            if (t.done) return t.value;
            var s = r(e),
              u = String(this);
            if (!s.global) return a(s, u);
            var l = s.unicode;
            s.lastIndex = 0;
            var p,
              f = [],
              d = 0;
            while (null !== (p = a(s, u))) {
              var h = String(p[0]);
              (f[d] = h),
                "" === h && (s.lastIndex = i(u, o(s.lastIndex), l)),
                d++;
            }
            return 0 === d ? null : f;
          },
        ];
      });
    },
    "4a59": function (e, t, n) {
      var r = n("9b43"),
        o = n("1fa8"),
        i = n("33a4"),
        a = n("cb7c"),
        c = n("9def"),
        s = n("27ee"),
        u = {},
        l = {};
      t = e.exports = function (e, t, n, p, f) {
        var d,
          h,
          _,
          m,
          v = f
            ? function () {
                return e;
              }
            : s(e),
          y = r(n, p, t ? 2 : 1),
          g = 0;
        if ("function" != typeof v) throw TypeError(e + " is not iterable!");
        if (i(v)) {
          for (d = c(e.length); d > g; g++)
            if (
              ((m = t ? y(a((h = e[g]))[0], h[1]) : y(e[g])), m === u || m === l)
            )
              return m;
        } else
          for (_ = v.call(e); !(h = _.next()).done; )
            if (((m = o(_, y, h.value, t)), m === u || m === l)) return m;
      };
      (t.BREAK = u), (t.RETURN = l);
    },
    "4bf8": function (e, t, n) {
      var r = n("be13");
      e.exports = function (e) {
        return Object(r(e));
      };
    },
    "4de8": function (e, t) {
      e.exports = function (e) {
        return null === e || ("function" !== typeof e && "object" !== typeof e);
      };
    },
    5176: function (e, t, n) {
      e.exports = n("81ee");
    },
    "51e3": function (e, t, n) {
      (t = e.exports = n("2350")(!1)),
        t.push([
          e.i,
          ".cg-default {\n  font-family: -apple-system, BlinkMacSystemFont, segoe ui, Helvetica, Arial, sans-serif,\n    apple color emoji, segoe ui emoji, segoe ui symbol;\n}\n.cg-bold {\n  font-weight: 600;\n}\n.cg-center {\n  text-align: center;\n}\n.cg-primary-color {\n  color: #8dc647 !important;\n}\n.cg-primary-color-dark {\n  color: #4b8800 !important;\n}\n.cg-red-color-dark {\n  color: #c2220d !important;\n}\n.cg-red-color {\n  color: #ff614d !important;\n}\n.cg-2xs {\n  font-size: 8.8px; /* 0.55rem; */\n}\n.cg-xs {\n  font-size: 10.4px; /* 0.65rem */\n}\n.cg-sm {\n  font-size: 12.8px; /* 0.8rem */\n}\n.cg-normal {\n  font-size: 13.6px; /* 0.85rem */\n}\n.cg-base {\n  font-size: 16px; /* 16px */\n}\n.cg-medium {\n  font-size: 19.2px; /* 1.2rem */\n}\n.cg-lg {\n  font-size: 24px; /* 1.5rem */\n}\n.cg-xl {\n  font-size: 30.4px; /* 1.9rem */\n}\n.cg-cap {\n  text-transform: capitalize;\n}\n.cg-no-underline {\n  text-decoration: none;\n}\n.cg-nowrap {\n  white-space: nowrap;\n}\n\n.cg-m-0 {\n  margin: 0;\n}\n.cg-m-1 {\n  margin: 4px;\n}\n.cg-m-2 {\n  margin: 8px;\n}\n.cg-mt-1 {\n  margin-top: 4px;\n}\n.cg-mb-1 {\n  margin-bottom: 4px;\n}\n.cg-ml-1 {\n  margin-left: 4px;\n}\n.cg-mr-1 {\n  margin-right: 4px;\n}\n.cg-mt-2 {\n  margin-top: 8px;\n}\n.cg-ml-2 {\n  margin-left: 8px;\n}\n.cg-mr-2 {\n  margin-right: 8px;\n}\n.cg-mb-2 {\n  margin-bottom: 8px;\n}\n.cg-mx-1 {\n  margin-left: 4px;\n  margin-right: 4px;\n}\n.cg-my-1 {\n  margin-top: 4px;\n  margin-bottom: 4px;\n}\n.cg-mx-2 {\n  margin-left: 8px;\n  margin-right: 8px;\n}\n.cg-my-2 {\n  margin-top: 8px;\n  margin-bottom: 8px;\n}\n.cg-my-5 {\n  margin-top: 20px;\n  margin-bottom: 20px;\n}\n\n.cg-p-1 {\n  padding: 4px;\n}\n.cg-p-2 {\n  padding: 8px;\n}\n.cg-p-3 {\n  padding: 12px;\n}\n.cg-p-4 {\n  padding: 16px;\n}\n.cg-pt-1 {\n  padding-top: 4px;\n}\n.cg-pb-1 {\n  padding-bottom: 4px;\n}\n.cg-pt-2 {\n  padding-top: 8px;\n}\n.cg-pb-2 {\n  padding-bottom: 8px;\n}\n.cg-pt-3 {\n  padding-top: 12px;\n}\n.cg-pb-3 {\n  padding-bottom: 12px;\n}\n.cg-py-1 {\n  padding-top: 4px;\n  padding-bottom: 4px;\n}\n.cg-px-1 {\n  padding-left: 4px;\n  padding-right: 4px;\n}\n.cg-py-2 {\n  padding-top: 8px;\n  padding-bottom: 8px;\n}\n.cg-px-2 {\n  padding-left: 8px;\n  padding-right: 8px;\n}\n.cg-py-3 {\n  padding-top: 12px;\n  padding-bottom: 12px;\n}\n.cg-px-3 {\n  padding-left: 12px;\n  padding-right: 12px;\n}\n.cg-px-4 {\n  padding-left: 16px;\n  padding-right: 16px;\n}\n.cg-py-4 {\n  padding-top: 16px;\n  padding-bottom: 16px;\n}\n.cg-py-5 {\n  padding-top: 20px;\n  padding-bottom: 20px;\n}\n.cg-pr-1 {\n  padding-right: 4px;\n}\n.cg-pr-2 {\n  padding-right: 8px;\n}\n\n.cg-flex {\n  display: flex !important;\n}\n.cg-flex-row {\n  flex-direction: row;\n}\n.cg-flex-column {\n  flex-direction: column;\n}\n\n.cg-items-stretch {\n  align-items: flex-stretch;\n}\n.cg-items-start {\n  align-items: flex-start;\n}\n.cg-items-center {\n  align-items: center;\n}\n.cg-items-end {\n  align-items: flex-end;\n}\n.cg-items-baseline {\n  align-items: baseline;\n}\n\n.cg-justify-start {\n  justify-content: flex-start;\n}\n.cg-justify-center {\n  justify-content: center;\n}\n.cg-justify-end {\n  justify-content: flex-end;\n}\n.cg-justify-between {\n  justify-content: space-between;\n}\n.cg-justify-around {\n  justify-content: space-around;\n}\n\n.cg-self-auto {\n  align-self: auto;\n}\n.cg-self-start {\n  align-self: flex-start;\n}\n.cg-self-center {\n  align-self: center;\n}\n.cg-self-end {\n  align-self: flex-end;\n}\n.cg-self-stretch {\n  align-self: stretch;\n}\n\n.cg-relative {\n  position: relative;\n}\n.cg-absolute {\n  position: absolute;\n}\n.cg-block {\n  display: block;\n}\n",
          "",
        ]);
    },
    "520a": function (e, t, n) {
      "use strict";
      var r = n("0bfb"),
        o = RegExp.prototype.exec,
        i = String.prototype.replace,
        a = o,
        c = "lastIndex",
        s = (function () {
          var e = /a/,
            t = /b*/g;
          return o.call(e, "a"), o.call(t, "a"), 0 !== e[c] || 0 !== t[c];
        })(),
        u = void 0 !== /()??/.exec("")[1],
        l = s || u;
      l &&
        (a = function (e) {
          var t,
            n,
            a,
            l,
            p = this;
          return (
            u && (n = new RegExp("^" + p.source + "$(?!\\s)", r.call(p))),
            s && (t = p[c]),
            (a = o.call(p, e)),
            s && a && (p[c] = p.global ? a.index + a[0].length : t),
            u &&
              a &&
              a.length > 1 &&
              i.call(a[0], n, function () {
                for (l = 1; l < arguments.length - 2; l++)
                  void 0 === arguments[l] && (a[l] = void 0);
              }),
            a
          );
        }),
        (e.exports = a);
    },
    "52a7": function (e, t) {
      t.f = {}.propertyIsEnumerable;
    },
    5309: function (e, t, n) {
      "use strict";
      n.d(t, "a", function () {
        return r;
      });
      var r = {
        customElement: {
          src: "https://cdnjs.cloudflare.com/ajax/libs/document-register-element/1.11.1/document-register-element.js",
          integrity:
            "sha384-zA6V4chYFGgsezh1yAQzus2VNUcyTyGI3NO7L5pEiE8AOXv3EC+OS2C//72VU6Mg",
        },
        fetch: {
          src: "https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.4/fetch.min.js",
          integrity:
            "sha384-2kkuqwSCFze1y7UcAejUH6wt2MpQ4naa++zWP0SxyUC/jnwq91SAfe14RAruXtnV",
        },
        cssvar: {
          src: "https://cdn.jsdelivr.net/npm/css-vars-ponyfill@1.16.2",
          integrity:
            "sha384-4sVVstGAX5EEHQzxsff05CedY46UVjXOMcU5elu94vztG5bO2VSAq69D1ZPGPL5E",
        },
      };
    },
    "551c": function (e, t, n) {
      "use strict";
      var r,
        o,
        i,
        a,
        c = n("2d00"),
        s = n("7726"),
        u = n("9b43"),
        l = n("23c6"),
        p = n("5ca1"),
        f = n("d3f4"),
        d = n("d8e8"),
        h = n("f605"),
        _ = n("4a59"),
        m = n("ebd6"),
        v = n("1991").set,
        y = n("8079")(),
        g = n("a5b8"),
        b = n("9c80"),
        w = n("a25f"),
        x = n("bcaa"),
        C = "Promise",
        k = s.TypeError,
        S = s.process,
        P = S && S.versions,
        A = (P && P.v8) || "",
        O = s[C],
        $ = "process" == l(S),
        T = function () {},
        j = (o = g.f),
        E = !!(function () {
          try {
            var e = O.resolve(1),
              t = ((e.constructor = {})[n("2b4c")("species")] = function (e) {
                e(T, T);
              });
            return (
              ($ || "function" == typeof PromiseRejectionEvent) &&
              e.then(T) instanceof t &&
              0 !== A.indexOf("6.6") &&
              -1 === w.indexOf("Chrome/66")
            );
          } catch (r) {}
        })(),
        M = function (e) {
          var t;
          return !(!f(e) || "function" != typeof (t = e.then)) && t;
        },
        D = function (e, t) {
          if (!e._n) {
            e._n = !0;
            var n = e._c;
            y(function () {
              var r = e._v,
                o = 1 == e._s,
                i = 0,
                a = function (t) {
                  var n,
                    i,
                    a,
                    c = o ? t.ok : t.fail,
                    s = t.resolve,
                    u = t.reject,
                    l = t.domain;
                  try {
                    c
                      ? (o || (2 == e._h && F(e), (e._h = 1)),
                        !0 === c
                          ? (n = r)
                          : (l && l.enter(),
                            (n = c(r)),
                            l && (l.exit(), (a = !0))),
                        n === t.promise
                          ? u(k("Promise-chain cycle"))
                          : (i = M(n))
                          ? i.call(n, s, u)
                          : s(n))
                      : u(r);
                  } catch (p) {
                    l && !a && l.exit(), u(p);
                  }
                };
              while (n.length > i) a(n[i++]);
              (e._c = []), (e._n = !1), t && !e._h && I(e);
            });
          }
        },
        I = function (e) {
          v.call(s, function () {
            var t,
              n,
              r,
              o = e._v,
              i = L(e);
            if (
              (i &&
                ((t = b(function () {
                  $
                    ? S.emit("unhandledRejection", o, e)
                    : (n = s.onunhandledrejection)
                    ? n({ promise: e, reason: o })
                    : (r = s.console) &&
                      r.error &&
                      r.error("Unhandled promise rejection", o);
                })),
                (e._h = $ || L(e) ? 2 : 1)),
              (e._a = void 0),
              i && t.e)
            )
              throw t.v;
          });
        },
        L = function (e) {
          return 1 !== e._h && 0 === (e._a || e._c).length;
        },
        F = function (e) {
          v.call(s, function () {
            var t;
            $
              ? S.emit("rejectionHandled", e)
              : (t = s.onrejectionhandled) && t({ promise: e, reason: e._v });
          });
        },
        N = function (e) {
          var t = this;
          t._d ||
            ((t._d = !0),
            (t = t._w || t),
            (t._v = e),
            (t._s = 2),
            t._a || (t._a = t._c.slice()),
            D(t, !0));
        },
        V = function (e) {
          var t,
            n = this;
          if (!n._d) {
            (n._d = !0), (n = n._w || n);
            try {
              if (n === e) throw k("Promise can't be resolved itself");
              (t = M(e))
                ? y(function () {
                    var r = { _w: n, _d: !1 };
                    try {
                      t.call(e, u(V, r, 1), u(N, r, 1));
                    } catch (o) {
                      N.call(r, o);
                    }
                  })
                : ((n._v = e), (n._s = 1), D(n, !1));
            } catch (r) {
              N.call({ _w: n, _d: !1 }, r);
            }
          }
        };
      E ||
        ((O = function (e) {
          h(this, O, C, "_h"), d(e), r.call(this);
          try {
            e(u(V, this, 1), u(N, this, 1));
          } catch (t) {
            N.call(this, t);
          }
        }),
        (r = function (e) {
          (this._c = []),
            (this._a = void 0),
            (this._s = 0),
            (this._d = !1),
            (this._v = void 0),
            (this._h = 0),
            (this._n = !1);
        }),
        (r.prototype = n("dcbc")(O.prototype, {
          then: function (e, t) {
            var n = j(m(this, O));
            return (
              (n.ok = "function" != typeof e || e),
              (n.fail = "function" == typeof t && t),
              (n.domain = $ ? S.domain : void 0),
              this._c.push(n),
              this._a && this._a.push(n),
              this._s && D(this, !1),
              n.promise
            );
          },
          catch: function (e) {
            return this.then(void 0, e);
          },
        })),
        (i = function () {
          var e = new r();
          (this.promise = e),
            (this.resolve = u(V, e, 1)),
            (this.reject = u(N, e, 1));
        }),
        (g.f = j =
          function (e) {
            return e === O || e === a ? new i(e) : o(e);
          })),
        p(p.G + p.W + p.F * !E, { Promise: O }),
        n("7f20")(O, C),
        n("7a56")(C),
        (a = n("8378")[C]),
        p(p.S + p.F * !E, C, {
          reject: function (e) {
            var t = j(this),
              n = t.reject;
            return n(e), t.promise;
          },
        }),
        p(p.S + p.F * (c || !E), C, {
          resolve: function (e) {
            return x(c && this === a ? O : this, e);
          },
        }),
        p(
          p.S +
            p.F *
              !(
                E &&
                n("5cc5")(function (e) {
                  O.all(e)["catch"](T);
                })
              ),
          C,
          {
            all: function (e) {
              var t = this,
                n = j(t),
                r = n.resolve,
                o = n.reject,
                i = b(function () {
                  var n = [],
                    i = 0,
                    a = 1;
                  _(e, !1, function (e) {
                    var c = i++,
                      s = !1;
                    n.push(void 0),
                      a++,
                      t.resolve(e).then(function (e) {
                        s || ((s = !0), (n[c] = e), --a || r(n));
                      }, o);
                  }),
                    --a || r(n);
                });
              return i.e && o(i.v), n.promise;
            },
            race: function (e) {
              var t = this,
                n = j(t),
                r = n.reject,
                o = b(function () {
                  _(e, !1, function (e) {
                    t.resolve(e).then(n.resolve, r);
                  });
                });
              return o.e && r(o.v), n.promise;
            },
          }
        );
    },
    5537: function (e, t, n) {
      var r = n("8378"),
        o = n("7726"),
        i = "__core-js_shared__",
        a = o[i] || (o[i] = {});
      (e.exports = function (e, t) {
        return a[e] || (a[e] = void 0 !== t ? t : {});
      })("versions", []).push({
        version: r.version,
        mode: n("2d00") ? "pure" : "global",
        copyright: "Â© 2019 Denis Pushkarev (zloirock.ru)",
      });
    },
    "560b": function (e, t, n) {
      var r = n("bc25"),
        o = n("9c93"),
        i = n("c227"),
        a = n("0f89"),
        c = n("a5ab"),
        s = n("f159"),
        u = {},
        l = {};
      t = e.exports = function (e, t, n, p, f) {
        var d,
          h,
          _,
          m,
          v = f
            ? function () {
                return e;
              }
            : s(e),
          y = r(n, p, t ? 2 : 1),
          g = 0;
        if ("function" != typeof v) throw TypeError(e + " is not iterable!");
        if (i(v)) {
          for (d = c(e.length); d > g; g++)
            if (
              ((m = t ? y(a((h = e[g]))[0], h[1]) : y(e[g])), m === u || m === l)
            )
              return m;
        } else
          for (_ = v.call(e); !(h = _.next()).done; )
            if (((m = o(_, y, h.value, t)), m === u || m === l)) return m;
      };
      (t.BREAK = u), (t.RETURN = l);
    },
    "562e": function (e, t, n) {
      "use strict";
      var r = n("0f7c"),
        o = n("0f01"),
        i = r.call(Function.call, String.prototype.replace),
        a =
          /^[\x09\x0A\x0B\x0C\x0D\x20\xA0\u1680\u180E\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200A\u202F\u205F\u3000\u2028\u2029\uFEFF]+/,
        c =
          /[\x09\x0A\x0B\x0C\x0D\x20\xA0\u1680\u180E\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200A\u202F\u205F\u3000\u2028\u2029\uFEFF]+$/;
      e.exports = function () {
        var e = o.ToString(o.CheckObjectCoercible(this));
        return i(i(e, a, ""), c, "");
      };
    },
    "565d": function (e, t, n) {
      var r = n("6a9b"),
        o = n("d876").f,
        i = {}.toString,
        a =
          "object" == typeof window && window && Object.getOwnPropertyNames
            ? Object.getOwnPropertyNames(window)
            : [],
        c = function (e) {
          try {
            return o(e);
          } catch (t) {
            return a.slice();
          }
        };
      e.exports.f = function (e) {
        return a && "[object Window]" == i.call(e) ? c(e) : o(r(e));
      };
    },
    5927: function (e, t, n) {
      n("93c4"), n("b42c"), (e.exports = n("fda1").f("iterator"));
    },
    5975: function (e, t) {
      e.exports = function (e) {
        return e >= 0 ? 1 : -1;
      };
    },
    "59ad": function (e, t, n) {
      e.exports = n("0965");
    },
    "5b5f": function (e, t, n) {
      "use strict";
      var r,
        o,
        i,
        a,
        c = n("b457"),
        s = n("da3c"),
        u = n("bc25"),
        l = n("7d8a"),
        p = n("d13f"),
        f = n("6f8a"),
        d = n("f2fe"),
        h = n("b0bc"),
        _ = n("560b"),
        m = n("302f"),
        v = n("df0a").set,
        y = n("36dc")(),
        g = n("03ca"),
        b = n("75c9"),
        w = n("8a12"),
        x = n("decf"),
        C = "Promise",
        k = s.TypeError,
        S = s.process,
        P = S && S.versions,
        A = (P && P.v8) || "",
        O = s[C],
        $ = "process" == l(S),
        T = function () {},
        j = (o = g.f),
        E = !!(function () {
          try {
            var e = O.resolve(1),
              t = ((e.constructor = {})[n("1b55")("species")] = function (e) {
                e(T, T);
              });
            return (
              ($ || "function" == typeof PromiseRejectionEvent) &&
              e.then(T) instanceof t &&
              0 !== A.indexOf("6.6") &&
              -1 === w.indexOf("Chrome/66")
            );
          } catch (r) {}
        })(),
        M = function (e) {
          var t;
          return !(!f(e) || "function" != typeof (t = e.then)) && t;
        },
        D = function (e, t) {
          if (!e._n) {
            e._n = !0;
            var n = e._c;
            y(function () {
              var r = e._v,
                o = 1 == e._s,
                i = 0,
                a = function (t) {
                  var n,
                    i,
                    a,
                    c = o ? t.ok : t.fail,
                    s = t.resolve,
                    u = t.reject,
                    l = t.domain;
                  try {
                    c
                      ? (o || (2 == e._h && F(e), (e._h = 1)),
                        !0 === c
                          ? (n = r)
                          : (l && l.enter(),
                            (n = c(r)),
                            l && (l.exit(), (a = !0))),
                        n === t.promise
                          ? u(k("Promise-chain cycle"))
                          : (i = M(n))
                          ? i.call(n, s, u)
                          : s(n))
                      : u(r);
                  } catch (p) {
                    l && !a && l.exit(), u(p);
                  }
                };
              while (n.length > i) a(n[i++]);
              (e._c = []), (e._n = !1), t && !e._h && I(e);
            });
          }
        },
        I = function (e) {
          v.call(s, function () {
            var t,
              n,
              r,
              o = e._v,
              i = L(e);
            if (
              (i &&
                ((t = b(function () {
                  $
                    ? S.emit("unhandledRejection", o, e)
                    : (n = s.onunhandledrejection)
                    ? n({ promise: e, reason: o })
                    : (r = s.console) &&
                      r.error &&
                      r.error("Unhandled promise rejection", o);
                })),
                (e._h = $ || L(e) ? 2 : 1)),
              (e._a = void 0),
              i && t.e)
            )
              throw t.v;
          });
        },
        L = function (e) {
          return 1 !== e._h && 0 === (e._a || e._c).length;
        },
        F = function (e) {
          v.call(s, function () {
            var t;
            $
              ? S.emit("rejectionHandled", e)
              : (t = s.onrejectionhandled) && t({ promise: e, reason: e._v });
          });
        },
        N = function (e) {
          var t = this;
          t._d ||
            ((t._d = !0),
            (t = t._w || t),
            (t._v = e),
            (t._s = 2),
            t._a || (t._a = t._c.slice()),
            D(t, !0));
        },
        V = function (e) {
          var t,
            n = this;
          if (!n._d) {
            (n._d = !0), (n = n._w || n);
            try {
              if (n === e) throw k("Promise can't be resolved itself");
              (t = M(e))
                ? y(function () {
                    var r = { _w: n, _d: !1 };
                    try {
                      t.call(e, u(V, r, 1), u(N, r, 1));
                    } catch (o) {
                      N.call(r, o);
                    }
                  })
                : ((n._v = e), (n._s = 1), D(n, !1));
            } catch (r) {
              N.call({ _w: n, _d: !1 }, r);
            }
          }
        };
      E ||
        ((O = function (e) {
          h(this, O, C, "_h"), d(e), r.call(this);
          try {
            e(u(V, this, 1), u(N, this, 1));
          } catch (t) {
            N.call(this, t);
          }
        }),
        (r = function (e) {
          (this._c = []),
            (this._a = void 0),
            (this._s = 0),
            (this._d = !1),
            (this._v = void 0),
            (this._h = 0),
            (this._n = !1);
        }),
        (r.prototype = n("3904")(O.prototype, {
          then: function (e, t) {
            var n = j(m(this, O));
            return (
              (n.ok = "function" != typeof e || e),
              (n.fail = "function" == typeof t && t),
              (n.domain = $ ? S.domain : void 0),
              this._c.push(n),
              this._a && this._a.push(n),
              this._s && D(this, !1),
              n.promise
            );
          },
          catch: function (e) {
            return this.then(void 0, e);
          },
        })),
        (i = function () {
          var e = new r();
          (this.promise = e),
            (this.resolve = u(V, e, 1)),
            (this.reject = u(N, e, 1));
        }),
        (g.f = j =
          function (e) {
            return e === O || e === a ? new i(e) : o(e);
          })),
        p(p.G + p.W + p.F * !E, { Promise: O }),
        n("c0d8")(O, C),
        n("1be4")(C),
        (a = n("a7d3")[C]),
        p(p.S + p.F * !E, C, {
          reject: function (e) {
            var t = j(this),
              n = t.reject;
            return n(e), t.promise;
          },
        }),
        p(p.S + p.F * (c || !E), C, {
          resolve: function (e) {
            return x(c && this === a ? O : this, e);
          },
        }),
        p(
          p.S +
            p.F *
              !(
                E &&
                n("436c")(function (e) {
                  O.all(e)["catch"](T);
                })
              ),
          C,
          {
            all: function (e) {
              var t = this,
                n = j(t),
                r = n.resolve,
                o = n.reject,
                i = b(function () {
                  var n = [],
                    i = 0,
                    a = 1;
                  _(e, !1, function (e) {
                    var c = i++,
                      s = !1;
                    n.push(void 0),
                      a++,
                      t.resolve(e).then(function (e) {
                        s || ((s = !0), (n[c] = e), --a || r(n));
                      }, o);
                  }),
                    --a || r(n);
                });
              return i.e && o(i.v), n.promise;
            },
            race: function (e) {
              var t = this,
                n = j(t),
                r = n.reject,
                o = b(function () {
                  _(e, !1, function (e) {
                    t.resolve(e).then(n.resolve, r);
                  });
                });
              return o.e && r(o.v), n.promise;
            },
          }
        );
    },
    "5ca1": function (e, t, n) {
      var r = n("7726"),
        o = n("8378"),
        i = n("32e9"),
        a = n("2aba"),
        c = n("9b43"),
        s = "prototype",
        u = function (e, t, n) {
          var l,
            p,
            f,
            d,
            h = e & u.F,
            _ = e & u.G,
            m = e & u.S,
            v = e & u.P,
            y = e & u.B,
            g = _ ? r : m ? r[t] || (r[t] = {}) : (r[t] || {})[s],
            b = _ ? o : o[t] || (o[t] = {}),
            w = b[s] || (b[s] = {});
          for (l in (_ && (n = t), n))
            (p = !h && g && void 0 !== g[l]),
              (f = (p ? g : n)[l]),
              (d =
                y && p
                  ? c(f, r)
                  : v && "function" == typeof f
                  ? c(Function.call, f)
                  : f),
              g && a(g, l, f, e & u.U),
              b[l] != f && i(b, l, d),
              v && w[l] != f && (w[l] = f);
        };
      (r.core = o),
        (u.F = 1),
        (u.G = 2),
        (u.S = 4),
        (u.P = 8),
        (u.B = 16),
        (u.W = 32),
        (u.U = 64),
        (u.R = 128),
        (e.exports = u);
    },
    "5cc5": function (e, t, n) {
      var r = n("2b4c")("iterator"),
        o = !1;
      try {
        var i = [7][r]();
        (i["return"] = function () {
          o = !0;
        }),
          Array.from(i, function () {
            throw 2;
          });
      } catch (a) {}
      e.exports = function (e, t) {
        if (!t && !o) return !1;
        var n = !1;
        try {
          var i = [7],
            c = i[r]();
          (c.next = function () {
            return { done: (n = !0) };
          }),
            (i[r] = function () {
              return c;
            }),
            e(i);
        } catch (a) {}
        return n;
      };
    },
    "5ce7": function (e, t, n) {
      "use strict";
      var r = n("7108"),
        o = n("f845"),
        i = n("c0d8"),
        a = {};
      n("8ce0")(a, n("1b55")("iterator"), function () {
        return this;
      }),
        (e.exports = function (e, t, n) {
          (e.prototype = r(a, { next: o(1, n) })), i(e, t + " Iterator");
        });
    },
    "5d58": function (e, t, n) {
      e.exports = n("5927");
    },
    "5d67": function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "PosiÃ§Ã£o da capitalizaÃ§Ã£o no mercado",
          mcap: "CapitalizaÃ§Ã£o de mercado",
          "24h_volume": "Volume em 24h",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "ComparaÃ§Ã£o de preÃ§o de criptomoedas",
          crypto_market_cap_comparison:
            "ComparaÃ§Ã£o de capitalizaÃ§Ã£o de mercado de criptomoedas",
        },
        coin_price_static_headline_widget: {
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "Alta de 24h",
          "24h_low": "Baixa de 24h",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
        },
        beam_widget: {
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
        },
        coin_ticker_widget: {
          "24h_high": "Alta de 24h",
          "24h_low": "Baixa de 24h",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "Mapa de Ã¡rvore de criptomoedas",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "Volume em 24h",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "Troca",
          pair: "Par",
          price: "PreÃ§o",
          volume: "Volume",
          trust_score: "PontuaÃ§Ã£o de Liquidez",
          view_price_chart: "Ver tabela de preÃ§os",
          powered_by: "Fornecido por %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "5d8f": function (e, t, n) {
      var r = n("7772")("keys"),
        o = n("7b00");
      e.exports = function (e) {
        return r[e] || (r[e] = o(e));
      };
    },
    "5dbc": function (e, t, n) {
      var r = n("d3f4"),
        o = n("8b97").set;
      e.exports = function (e, t, n) {
        var i,
          a = t.constructor;
        return (
          a !== n &&
            "function" == typeof a &&
            (i = a.prototype) !== n.prototype &&
            r(i) &&
            o &&
            o(e, i),
          e
        );
      };
    },
    "5df3": function (e, t, n) {
      "use strict";
      var r = n("02f4")(!0);
      n("01f9")(
        String,
        "String",
        function (e) {
          (this._t = String(e)), (this._i = 0);
        },
        function () {
          var e,
            t = this._t,
            n = this._i;
          return n >= t.length
            ? { value: void 0, done: !0 }
            : ((e = r(t, n)), (this._i += e.length), { value: e, done: !1 });
        }
      );
    },
    "5f1b": function (e, t, n) {
      "use strict";
      var r = n("23c6"),
        o = RegExp.prototype.exec;
      e.exports = function (e, t) {
        var n = e.exec;
        if ("function" === typeof n) {
          var i = n.call(e, t);
          if ("object" !== typeof i)
            throw new TypeError(
              "RegExp exec method returned something other than an Object or null"
            );
          return i;
        }
        if ("RegExp" !== r(e))
          throw new TypeError("RegExp#exec called on incompatible receiver");
        return o.call(e, t);
      };
    },
    "613b": function (e, t, n) {
      var r = n("5537")("keys"),
        o = n("ca5a");
      e.exports = function (e) {
        return r[e] || (r[e] = o(e));
      };
    },
    "626a": function (e, t, n) {
      var r = n("2d95");
      e.exports = Object("z").propertyIsEnumerable(0)
        ? Object
        : function (e) {
            return "String" == r(e) ? e.split("") : Object(e);
          };
    },
    "626e": function (e, t, n) {
      var r = n("d74e"),
        o = n("f845"),
        i = n("6a9b"),
        a = n("2ea1"),
        c = n("43c8"),
        s = n("a47f"),
        u = Object.getOwnPropertyDescriptor;
      t.f = n("7d95")
        ? u
        : function (e, t) {
            if (((e = i(e)), (t = a(t, !0)), s))
              try {
                return u(e, t);
              } catch (n) {}
            if (c(e, t)) return o(!r.f.call(e, t), e[t]);
          };
    },
    6277: function (e, t, n) {
      var r = n("7b00")("meta"),
        o = n("6f8a"),
        i = n("43c8"),
        a = n("3adc").f,
        c = 0,
        s =
          Object.isExtensible ||
          function () {
            return !0;
          },
        u = !n("d782")(function () {
          return s(Object.preventExtensions({}));
        }),
        l = function (e) {
          a(e, r, { value: { i: "O" + ++c, w: {} } });
        },
        p = function (e, t) {
          if (!o(e))
            return "symbol" == typeof e
              ? e
              : ("string" == typeof e ? "S" : "P") + e;
          if (!i(e, r)) {
            if (!s(e)) return "F";
            if (!t) return "E";
            l(e);
          }
          return e[r].i;
        },
        f = function (e, t) {
          if (!i(e, r)) {
            if (!s(e)) return !0;
            if (!t) return !1;
            l(e);
          }
          return e[r].w;
        },
        d = function (e) {
          return u && h.NEED && s(e) && !i(e, r) && l(e), e;
        },
        h = (e.exports = {
          KEY: r,
          NEED: !1,
          fastKey: p,
          getWeak: f,
          onFreeze: d,
        });
    },
    "633a": function (e, t, n) {
      var r = n("d13f"),
        o = n("e5fa"),
        i = n("d782"),
        a = n("702a"),
        c = "[" + a + "]",
        s = "â€‹Â…",
        u = RegExp("^" + c + c + "*"),
        l = RegExp(c + c + "*$"),
        p = function (e, t, n) {
          var o = {},
            c = i(function () {
              return !!a[e]() || s[e]() != s;
            }),
            u = (o[e] = c ? t(f) : a[e]);
          n && (o[n] = u), r(r.P + r.F * c, "String", o);
        },
        f = (p.trim = function (e, t) {
          return (
            (e = String(o(e))),
            1 & t && (e = e.replace(u, "")),
            2 & t && (e = e.replace(l, "")),
            e
          );
        });
      e.exports = p;
    },
    "67bb": function (e, t, n) {
      e.exports = n("b258");
    },
    6821: function (e, t, n) {
      var r = n("626a"),
        o = n("be13");
      e.exports = function (e) {
        return r(o(e));
      };
    },
    "688e": function (e, t, n) {
      "use strict";
      var r = "Function.prototype.bind called on incompatible ",
        o = Array.prototype.slice,
        i = Object.prototype.toString,
        a = "[object Function]";
      e.exports = function (e) {
        var t = this;
        if ("function" !== typeof t || i.call(t) !== a)
          throw new TypeError(r + t);
        for (
          var n,
            c = o.call(arguments, 1),
            s = function () {
              if (this instanceof n) {
                var r = t.apply(this, c.concat(o.call(arguments)));
                return Object(r) === r ? r : this;
              }
              return t.apply(e, c.concat(o.call(arguments)));
            },
            u = Math.max(0, t.length - c.length),
            l = [],
            p = 0;
          p < u;
          p++
        )
          l.push("$" + p);
        if (
          ((n = Function(
            "binder",
            "return function (" +
              l.join(",") +
              "){ return binder.apply(this,arguments); }"
          )(s)),
          t.prototype)
        ) {
          var f = function () {};
          (f.prototype = t.prototype),
            (n.prototype = new f()),
            (f.prototype = null);
        }
        return n;
      };
    },
    "69a8": function (e, t) {
      var n = {}.hasOwnProperty;
      e.exports = function (e, t) {
        return n.call(e, t);
      };
    },
    "6a99": function (e, t, n) {
      var r = n("d3f4");
      e.exports = function (e, t) {
        if (!r(e)) return e;
        var n, o;
        if (t && "function" == typeof (n = e.toString) && !r((o = n.call(e))))
          return o;
        if ("function" == typeof (n = e.valueOf) && !r((o = n.call(e)))) return o;
        if (!t && "function" == typeof (n = e.toString) && !r((o = n.call(e))))
          return o;
        throw TypeError("Can't convert object to primitive value");
      };
    },
    "6a9b": function (e, t, n) {
      var r = n("8bab"),
        o = n("e5fa");
      e.exports = function (e) {
        return r(o(e));
      };
    },
    "6b54": function (e, t, n) {
      "use strict";
      n("3846");
      var r = n("cb7c"),
        o = n("0bfb"),
        i = n("9e1e"),
        a = "toString",
        c = /./[a],
        s = function (e) {
          n("2aba")(RegExp.prototype, a, e, !0);
        };
      n("79e5")(function () {
        return "/a/b" != c.call({ source: "a", flags: "b" });
      })
        ? s(function () {
            var e = r(this);
            return "/".concat(
              e.source,
              "/",
              "flags" in e
                ? e.flags
                : !i && e instanceof RegExp
                ? o.call(e)
                : void 0
            );
          })
        : c.name != a &&
          s(function () {
            return c.call(this);
          });
    },
    "6ce2": function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "Marktkapitalisierungsrang",
          mcap: "Marktkapitalisierung",
          "24h_volume": "24-Stunden-Volumen",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "KryptowÃ¤hrungs-Preisvergleich",
          crypto_market_cap_comparison:
            "Vergleich der KryptowÃ¤hrungs-Marktkapitalisierung",
        },
        coin_price_static_headline_widget: {
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "24h Hoch",
          "24h_low": "24h Tief",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
        },
        beam_widget: {
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
        },
        coin_ticker_widget: {
          "24h_high": "24h Hoch",
          "24h_low": "24h Tief",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "KryptowÃ¤hrungs-Tree-Map",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "24-Stunden-Volumen",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "BÃ¶rse",
          pair: "Paar",
          price: "Kurs",
          volume: "Volumen",
          trust_score: "Vertrauenswert",
          view_price_chart: "PreisÃ¼bersicht anzeigen",
          powered_by: "PrÃ¤sentiert von %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "6e1f": function (e, t) {
      var n = {}.toString;
      e.exports = function (e) {
        return n.call(e).slice(8, -1);
      };
    },
    "6f8a": function (e, t) {
      e.exports = function (e) {
        return "object" === typeof e ? null !== e : "function" === typeof e;
      };
    },
    "702a": function (e, t) {
      e.exports =
        "\t\n\v\f\r Â áš€á Žâ€€â€â€‚â€ƒâ€„â€…â€†â€‡â€ˆâ€‰â€Šâ€¯âŸã€€\u2028\u2029\ufeff";
    },
    7108: function (e, t, n) {
      var r = n("0f89"),
        o = n("f568"),
        i = n("0029"),
        a = n("5d8f")("IE_PROTO"),
        c = function () {},
        s = "prototype",
        u = function () {
          var e,
            t = n("12fd")("iframe"),
            r = i.length,
            o = "<",
            a = ">";
          (t.style.display = "none"),
            n("103a").appendChild(t),
            (t.src = "javascript:"),
            (e = t.contentWindow.document),
            e.open(),
            e.write(o + "script" + a + "document.F=Object" + o + "/script" + a),
            e.close(),
            (u = e.F);
          while (r--) delete u[s][i[r]];
          return u();
        };
      e.exports =
        Object.create ||
        function (e, t) {
          var n;
          return (
            null !== e
              ? ((c[s] = r(e)), (n = new c()), (c[s] = null), (n[a] = e))
              : (n = u()),
            void 0 === t ? n : o(n, t)
          );
        };
    },
    "75c9": function (e, t) {
      e.exports = function (e) {
        try {
          return { e: !1, v: e() };
        } catch (t) {
          return { e: !0, v: t };
        }
      };
    },
    7618: function (e, t, n) {
      "use strict";
      n.d(t, "a", function () {
        return s;
      });
      var r = n("5d58"),
        o = n.n(r),
        i = n("67bb"),
        a = n.n(i);
      function c(e) {
        return (
          (c =
            "function" === typeof a.a && "symbol" === typeof o.a
              ? function (e) {
                  return typeof e;
                }
              : function (e) {
                  return e &&
                    "function" === typeof a.a &&
                    e.constructor === a.a &&
                    e !== a.a.prototype
                    ? "symbol"
                    : typeof e;
                }),
          c(e)
        );
      }
      function s(e) {
        return (
          (s =
            "function" === typeof a.a && "symbol" === c(o.a)
              ? function (e) {
                  return c(e);
                }
              : function (e) {
                  return e &&
                    "function" === typeof a.a &&
                    e.constructor === a.a &&
                    e !== a.a.prototype
                    ? "symbol"
                    : c(e);
                }),
          s(e)
        );
      }
    },
    7633: function (e, t, n) {
      var r = n("2695"),
        o = n("0029");
      e.exports =
        Object.keys ||
        function (e) {
          return r(e, o);
        };
    },
    7704: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "ÐŸÐ¾Ð·Ð¸Ñ†Ð¸Ñ Ð² Ñ€ÐµÐ¹Ñ‚Ð¸Ð½Ð³Ðµ Market Cap",
          mcap: "Ð Ñ‹Ð½Ð¾Ñ‡Ð½Ð°Ñ ÐºÐ°Ð¿Ð¸Ñ‚Ð°Ð»Ð¸Ð·Ð°Ñ†Ð¸Ñ",
          "24h_volume": "ÐžÐ±ÑŠÐµÐ¼ Ð·Ð° 24Â Ñ‡Ð°ÑÐ°",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}",
          crypto_price_comparison:
            "Ð¡Ñ€Ð°Ð²Ð½ÐµÐ½Ð¸Ðµ ÐºÑƒÑ€ÑÐ¾Ð² ÐºÑ€Ð¸Ð¿Ñ‚Ð¾Ð²Ð°Ð»ÑŽÑ‚",
          crypto_market_cap_comparison:
            "Ð¡Ñ€Ð°Ð²Ð½ÐµÐ½Ð¸Ðµ ÐºÑ€Ð¸Ð¿Ñ‚Ð¾Ð²Ð°Ð»ÑŽÑ‚ Ð¿Ð¾ Ñ€Ñ‹Ð½Ð¾Ñ‡Ð½Ð¾Ð¹ ÐºÐ°Ð¿Ð¸Ñ‚Ð°Ð»Ð¸Ð·Ð°Ñ†Ð¸Ð¸",
        },
        coin_price_static_headline_widget: {
          powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "ÐœÐ°ÐºÑ. Ð·Ð° 24Â Ñ‡Ð°ÑÐ°",
          "24h_low": "ÐœÐ¸Ð½. Ð·Ð° 24Â Ñ‡Ð°ÑÐ°",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: { powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}" },
        beam_widget: { powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}" },
        coin_ticker_widget: {
          "24h_high": "ÐœÐ°ÐºÑ. Ð·Ð° 24Â Ñ‡Ð°ÑÐ°",
          "24h_low": "ÐœÐ¸Ð½. Ð·Ð° 24Â Ñ‡Ð°ÑÐ°",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "ÐšÐ°Ñ€Ñ‚Ð° Ð´ÐµÑ€ÐµÐ²Ð° ÐºÑ€Ð¸Ð¿Ñ‚Ð¾Ð²Ð°Ð»ÑŽÑ‚",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "ÐžÐ±ÑŠÐµÐ¼ Ñ‚Ð¾Ñ€Ð³Ð¾Ð² Ð·Ð° 24Â Ñ‡Ð°ÑÐ°",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "ÐžÐ±Ð¼ÐµÐ½",
          pair: "ÐŸÐ°Ñ€Ð°",
          price: "Ð¦ÐµÐ½Ð°",
          volume: "ÐžÐ±ÑŠÐµÐ¼",
          trust_score: "ÐŸÐ¾ÐºÐ°Ð·Ð°Ñ‚ÐµÐ»ÑŒ Ð½Ð°Ð´ÐµÐ¶Ð½Ð¾ÑÑ‚Ð¸",
          view_price_chart:
            "ÐŸÐ¾ÐºÐ°Ð·Ð°Ñ‚ÑŒ Ð³Ñ€Ð°Ñ„Ð¸Ðº Ð¸Ð·Ð¼ÐµÐ½ÐµÐ½Ð¸Ñ ÐºÑƒÑ€ÑÐ°",
          powered_by: "ÐžÑ‚ %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    7726: function (e, t) {
      var n = (e.exports =
        "undefined" != typeof window && window.Math == Math
          ? window
          : "undefined" != typeof self && self.Math == Math
          ? self
          : Function("return this")());
      "number" == typeof __g && (__g = n);
    },
    7772: function (e, t, n) {
      var r = n("a7d3"),
        o = n("da3c"),
        i = "__core-js_shared__",
        a = o[i] || (o[i] = {});
      (e.exports = function (e, t) {
        return a[e] || (a[e] = void 0 !== t ? t : {});
      })("versions", []).push({
        version: r.version,
        mode: n("b457") ? "pure" : "global",
        copyright: "Â© 2018 Denis Pushkarev (zloirock.ru)",
      });
    },
    "77f1": function (e, t, n) {
      var r = n("4588"),
        o = Math.max,
        i = Math.min;
      e.exports = function (e, t) {
        return (e = r(e)), e < 0 ? o(e + t, 0) : i(e, t);
      };
    },
    "795b": function (e, t, n) {
      e.exports = n("dd04");
    },
    "79e5": function (e, t) {
      e.exports = function (e) {
        try {
          return !!e();
        } catch (t) {
          return !0;
        }
      };
    },
    "7a56": function (e, t, n) {
      "use strict";
      var r = n("7726"),
        o = n("86cc"),
        i = n("9e1e"),
        a = n("2b4c")("species");
      e.exports = function (e) {
        var t = r[e];
        i &&
          t &&
          !t[a] &&
          o.f(t, a, {
            configurable: !0,
            get: function () {
              return this;
            },
          });
      };
    },
    "7b00": function (e, t) {
      var n = 0,
        r = Math.random();
      e.exports = function (e) {
        return "Symbol(".concat(
          void 0 === e ? "" : e,
          ")_",
          (++n + r).toString(36)
        );
      };
    },
    "7d8a": function (e, t, n) {
      var r = n("6e1f"),
        o = n("1b55")("toStringTag"),
        i =
          "Arguments" ==
          r(
            (function () {
              return arguments;
            })()
          ),
        a = function (e, t) {
          try {
            return e[t];
          } catch (n) {}
        };
      e.exports = function (e) {
        var t, n, c;
        return void 0 === e
          ? "Undefined"
          : null === e
          ? "Null"
          : "string" == typeof (n = a((t = Object(e)), o))
          ? n
          : i
          ? r(t)
          : "Object" == (c = r(t)) && "function" == typeof t.callee
          ? "Arguments"
          : c;
      };
    },
    "7d95": function (e, t, n) {
      e.exports = !n("d782")(function () {
        return (
          7 !=
          Object.defineProperty({}, "a", {
            get: function () {
              return 7;
            },
          }).a
        );
      });
    },
    "7f20": function (e, t, n) {
      var r = n("86cc").f,
        o = n("69a8"),
        i = n("2b4c")("toStringTag");
      e.exports = function (e, t, n) {
        e &&
          !o((e = n ? e : e.prototype), i) &&
          r(e, i, { configurable: !0, value: t });
      };
    },
    "7f7f": function (e, t, n) {
      var r = n("86cc").f,
        o = Function.prototype,
        i = /^\s*function ([^ (]*)/,
        a = "name";
      a in o ||
        (n("9e1e") &&
          r(o, a, {
            configurable: !0,
            get: function () {
              try {
                return ("" + this).match(i)[1];
              } catch (e) {
                return "";
              }
            },
          }));
    },
    8079: function (e, t, n) {
      var r = n("7726"),
        o = n("1991").set,
        i = r.MutationObserver || r.WebKitMutationObserver,
        a = r.process,
        c = r.Promise,
        s = "process" == n("2d95")(a);
      e.exports = function () {
        var e,
          t,
          n,
          u = function () {
            var r, o;
            s && (r = a.domain) && r.exit();
            while (e) {
              (o = e.fn), (e = e.next);
              try {
                o();
              } catch (i) {
                throw (e ? n() : (t = void 0), i);
              }
            }
            (t = void 0), r && r.enter();
          };
        if (s)
          n = function () {
            a.nextTick(u);
          };
        else if (!i || (r.navigator && r.navigator.standalone))
          if (c && c.resolve) {
            var l = c.resolve(void 0);
            n = function () {
              l.then(u);
            };
          } else
            n = function () {
              o.call(r, u);
            };
        else {
          var p = !0,
            f = document.createTextNode("");
          new i(u).observe(f, { characterData: !0 }),
            (n = function () {
              f.data = p = !p;
            });
        }
        return function (r) {
          var o = { fn: r, next: void 0 };
          t && (t.next = o), e || ((e = o), n()), (t = o);
        };
      };
    },
    "81ee": function (e, t, n) {
      n("9a51"), (e.exports = n("a7d3").Object.assign);
    },
    "82a3": function (e, t, n) {
      e.exports = n("29a3");
    },
    8378: function (e, t) {
      var n = (e.exports = { version: "2.6.5" });
      "number" == typeof __e && (__e = n);
    },
    "84f2": function (e, t) {
      e.exports = {};
    },
    "856e": function (e, t, n) {
      "use strict";
      n.r(t);
      n("6b54"), n("cadf"), n("551c"), n("097d");
      var r = n("2b0e"),
        o = n("c894"),
        i = n("5309"),
        a = n("af14"),
        c = n("c649"),
        s = n("148f"),
        u = n("e024"),
        l = n.n(u);
      r["a"].use(o["a"]);
      var p = function () {
        var e =
          arguments.length > 0 && void 0 !== arguments[0]
            ? arguments[0]
            : { shadow: !1 };
        r["a"].customElement("coingecko-coin-ticker-widget", s["a"], {
          shadow: e.shadow,
          shadowCss: l.a.toString(),
          connectedCallback: function () {
            if (!e.shadow) {
              var t = document.createElement("style");
              (t.innerHTML = l.a.toString()), document.head.append(t);
            }
          },
        });
      };
      Object(a["a"])()
        ? p({ shadow: !0 })
        : Object(c["c"])([
            i["a"].customElement,
            i["a"].fetch,
            i["a"].cssvar,
          ]).then(function () {
            return p({ shadow: !1 });
          });
    },
    8680: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank:
            "à¸­à¸±à¸™à¸”à¸±à¸šà¸¡à¸¹à¸¥à¸„à¹ˆà¸²à¸•à¸²à¸¡à¸£à¸²à¸„à¸²à¸•à¸¥à¸²à¸”",
          mcap: "à¸¡à¸¹à¸¥à¸„à¹ˆà¸²à¸•à¸²à¸¡à¸£à¸²à¸„à¸²à¸•à¸¥à¸²à¸”",
          "24h_volume": "à¸›à¸£à¸´à¸¡à¸²à¸“ 24 à¸Šà¸¡.",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
          crypto_price_comparison:
            "à¸à¸²à¸£à¹€à¸›à¸£à¸µà¸¢à¸šà¹€à¸—à¸µà¸¢à¸šà¸£à¸²à¸„à¸² Crypto",
          crypto_market_cap_comparison:
            "à¸à¸²à¸£à¹€à¸›à¸£à¸µà¸¢à¸šà¹€à¸—à¸µà¸¢à¸šà¸¡à¸¹à¸¥à¸„à¹ˆà¸²à¸•à¸²à¸¡à¸£à¸²à¸„à¸²à¸•à¸¥à¸²à¸”à¸‚à¸­à¸‡ Crypto",
        },
        coin_price_static_headline_widget: {
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "à¸ªà¸¹à¸‡ 24 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡",
          "24h_low": "à¸•à¹ˆà¸³ 24 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡",
          view_price_chart: "View %{coin} Price Chart",
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
        },
        beam_widget: {
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
        },
        coin_ticker_widget: {
          "24h_high": "à¸ªà¸¹à¸‡ 24 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡",
          "24h_low": "à¸•à¹ˆà¸³ 24 à¸Šà¸±à¹ˆà¸§à¹‚à¸¡à¸‡",
          view_price_chart: "View %{coin} Price Chart",
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "à¹à¸œà¸™à¸—à¸µà¹ˆà¸£à¸¹à¸›à¸•à¹‰à¸™à¹„à¸«à¸¡ Cryptocurrency",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "à¸›à¸£à¸´à¸¡à¸²à¸“ 24 à¸Šà¸¡.",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "à¹à¸¥à¸à¹€à¸›à¸¥à¸µà¹ˆà¸¢à¸™",
          pair: "à¸ˆà¸±à¸šà¸„à¸¹à¹ˆ",
          price: "à¸£à¸²à¸„à¸²",
          volume: "à¸›à¸£à¸´à¸¡à¸²à¸“",
          trust_score: "à¸„à¸°à¹à¸™à¸™à¸„à¸§à¸²à¸¡à¹€à¸Šà¸·à¹ˆà¸­à¸¡à¸±à¹ˆà¸™",
          view_price_chart: "à¸”à¸¹à¸à¸£à¸²à¸Ÿà¸£à¸²à¸„à¸²",
          powered_by:
            "à¸‚à¸±à¸šà¹€à¸„à¸¥à¸·à¹ˆà¸­à¸™à¸”à¹‰à¸§à¸¢ %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "86cc": function (e, t, n) {
      var r = n("cb7c"),
        o = n("c69a"),
        i = n("6a99"),
        a = Object.defineProperty;
      t.f = n("9e1e")
        ? Object.defineProperty
        : function (e, t, n) {
            if ((r(e), (t = i(t, !0)), r(n), o))
              try {
                return a(e, t, n);
              } catch (c) {}
            if ("get" in n || "set" in n)
              throw TypeError("Accessors not supported!");
            return "value" in n && (e[t] = n.value), e;
          };
    },
    "89b2": function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "Ocena wg. kapitalizacji rynku",
          mcap: "Kapitalizacja rynkowa",
          "24h_volume": "Wolumen â€“ 24 godz.",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "PorÃ³wnanie cen kryptowalut",
          crypto_market_cap_comparison:
            "PorÃ³wnanie dominacji w kapitalizacji rynku kryptowalut",
        },
        coin_price_static_headline_widget: {
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "24 godz. â€“ maks.",
          "24h_low": "24 godz. â€“ min.",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
        },
        beam_widget: {
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
        },
        coin_ticker_widget: {
          "24h_high": "24 godz. â€“ maks.",
          "24h_low": "24 godz. â€“ min.",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "Drzewo kryptowalut",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "Wolumen â€“ 24 godz.",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "GieÅ‚da",
          pair: "Para",
          price: "Kurs",
          volume: "Wolumen",
          trust_score: "Wynik zaufania",
          view_price_chart: "WyÅ›wietl wykres ceny",
          powered_by: "TreÅ›Ä‡ dostarczona przez %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    "8a12": function (e, t, n) {
      var r = n("da3c"),
        o = r.navigator;
      e.exports = (o && o.userAgent) || "";
    },
    "8b97": function (e, t, n) {
      var r = n("d3f4"),
        o = n("cb7c"),
        i = function (e, t) {
          if ((o(e), !r(t) && null !== t))
            throw TypeError(t + ": can't set as prototype!");
        };
      e.exports = {
        set:
          Object.setPrototypeOf ||
          ("__proto__" in {}
            ? (function (e, t, r) {
                try {
                  (r = n("9b43")(
                    Function.call,
                    n("11e9").f(Object.prototype, "__proto__").set,
                    2
                  )),
                    r(e, []),
                    (t = !(e instanceof Array));
                } catch (o) {
                  t = !0;
                }
                return function (e, n) {
                  return i(e, n), t ? (e.__proto__ = n) : r(e, n), e;
                };
              })({}, !1)
            : void 0),
        check: i,
      };
    },
    "8bab": function (e, t, n) {
      var r = n("6e1f");
      e.exports = Object("z").propertyIsEnumerable(0)
        ? Object
        : function (e) {
            return "String" == r(e) ? e.split("") : Object(e);
          };
    },
    "8ce0": function (e, t, n) {
      var r = n("3adc"),
        o = n("f845");
      e.exports = n("7d95")
        ? function (e, t, n) {
            return r.f(e, t, o(1, n));
          }
        : function (e, t, n) {
            return (e[t] = n), e;
          };
    },
    9093: function (e, t, n) {
      var r = n("ce10"),
        o = n("e11e").concat("length", "prototype");
      t.f =
        Object.getOwnPropertyNames ||
        function (e) {
          return r(e, o);
        };
    },
    "93c4": function (e, t, n) {
      "use strict";
      var r = n("2a4e")(!0);
      n("e4a9")(
        String,
        "String",
        function (e) {
          (this._t = String(e)), (this._i = 0);
        },
        function () {
          var e,
            t = this._t,
            n = this._i;
          return n >= t.length
            ? { value: void 0, done: !0 }
            : ((e = r(t, n)), (this._i += e.length), { value: e, done: !1 });
        }
      );
    },
    "9a51": function (e, t, n) {
      var r = n("d13f");
      r(r.S + r.F, "Object", { assign: n("9e44") });
    },
    "9add": function (e, t, n) {
      "use strict";
      var r = function () {
          var e = this,
            t = e.$createElement,
            n = e._self._c || t;
          return n("div", { staticClass: "cg-widget cg-py-2" }, [
            n("div", { staticClass: "cg-left-panel" }, [
              n("img", {
                staticClass: "cg-my-1",
                attrs: { src: e.apiCoinData.image.small },
              }),
              n(
                "div",
                { staticClass: "cg-px-2 cg-flex cg-flex-column cg-items-center" },
                [
                  n(
                    "a",
                    {
                      staticClass: "cg-bold cg-medium",
                      attrs: {
                        href: e.linkToPriceChart("coins"),
                        target: "_blank",
                      },
                    },
                    [
                      e._v(
                        "\n        " +
                          e._s(
                            e.apiCoinData.localization[e.locale] ||
                              e.apiCoinData.name
                          ) +
                          "\n      "
                      ),
                    ]
                  ),
                  n("div", { staticClass: "cg-base cg-ticker" }, [
                    e._v(
                      "\n        " +
                        e._s(e.apiCoinData.symbol.toUpperCase()) +
                        " / " +
                        e._s(e.currencyCode.toUpperCase()) +
                        "\n      "
                    ),
                  ]),
                ]
              ),
            ]),
            n("div", { staticClass: "cg-right-panel cg-my-2 cg-px-1 cg-sm" }, [
              n("div", [
                n(
                  "div",
                  {
                    staticClass: "cg-bold cg-lg cg-nowrap",
                    class: e.pricingHighlightClass,
                  },
                  [
                    e._v(
                      "\n        " +
                        e._s(
                          e.formatCurrency(
                            e.apiCoinData.market_data.current_price[
                              e.currencyCode
                            ]
                          )
                        ) +
                        "\n      "
                    ),
                  ]
                ),
                n(
                  "div",
                  {
                    staticClass: "cg-mb-1 cg-base cg-center",
                    class: e.percentageClass,
                  },
                  [
                    e._v(
                      "\n        (" +
                        e._s(
                          e.formatPercentage(
                            e.apiCoinData.market_data
                              .price_change_percentage_24h_in_currency[
                              e.currencyCode
                            ]
                          )
                        ) +
                        ")\n      "
                    ),
                  ]
                ),
              ]),
              n(
                "div",
                {
                  staticClass:
                    "cg-flex cg-flex-row cg-justify-between cg-py-1 cg-ticker-item",
                },
                [
                  n("span", { staticClass: "cg-bold" }, [
                    e._v(e._s(e.polyglot.t("coin_details.mcap_rank"))),
                  ]),
                  n("span", [e._v("#" + e._s(e.apiCoinData.market_cap_rank))]),
                ]
              ),
              n(
                "div",
                {
                  staticClass:
                    "cg-flex cg-flex-row cg-justify-between cg-py-1 cg-ticker-item",
                },
                [
                  n("span", { staticClass: "cg-bold" }, [
                    e._v(e._s(e.polyglot.t("coin_details.mcap"))),
                  ]),
                  n("span", [
                    e._v(
                      e._s(
                        e.formatCurrency(
                          e.apiCoinData.market_data.market_cap[e.currencyCode]
                        )
                      )
                    ),
                  ]),
                ]
              ),
              n(
                "div",
                {
                  staticClass:
                    "cg-flex cg-flex-row cg-justify-between cg-py-1 cg-ticker-item",
                },
                [
                  n("span", { staticClass: "cg-bold" }, [
                    e._v(e._s(e.polyglot.t("coin_details.24h_volume"))),
                  ]),
                  n("span", [
                    e._v(
                      e._s(
                        e.formatCurrency(
                          e.apiCoinData.market_data.total_volume[e.currencyCode]
                        )
                      )
                    ),
                  ]),
                ]
              ),
              n(
                "div",
                {
                  staticClass:
                    "cg-center cg-flex flex-row cg-py-1 cg-justify-between cg-ticker-item",
                },
                [
                  n("span", { staticClass: "cg-bold cg-self-start" }, [
                    e._v(e._s(e.polyglot.t("coin_details.24h_high_low"))),
                  ]),
                  n("span", { staticClass: "cg-self-end" }, [
                    e._v(
                      "\n        " +
                        e._s(
                          e.formatCurrency(
                            e.apiCoinData.market_data.high_24h[e.currencyCode]
                          )
                        ) +
                        "/" +
                        e._s(
                          e.formatCurrency(
                            e.apiCoinData.market_data.low_24h[e.currencyCode]
                          )
                        ) +
                        "\n      "
                    ),
                  ]),
                ]
              ),
            ]),
          ]);
        },
        o = [],
        i = (n("c5f6"), n("82a3")),
        a = n.n(i),
        c = n("e8ba"),
        s = n("c1e2"),
        u = {
          name: "CoinDetails",
          mixins: [Object(s["a"])()],
          props: {
            apiCoinData: { type: Object },
            locale: { type: String, default: "en" },
            currency: { type: String, default: "usd" },
            pricingHighlightClass: { type: String, default: null },
            utmParams: { type: String, default: "" },
            currencyCode: { type: String, default: "usd" },
          },
          methods: {
            formatCurrency: function (e) {
              return Object(c["formatCurrency"])(
                e,
                this.currencyCode,
                this.locale
              );
            },
            formatPercentage: function (e) {
              var t = a()(e);
              return "".concat(t.toFixed(2), "%");
            },
            linkToPriceChart: function (e) {
              return "https://www.coingecko.com/resource_redirect?locale="
                .concat(this.locale, "&route=")
                .concat(e, "/")
                .concat(this.apiCoinData.id, "/")
                .concat(this.currencyCode, "&")
                .concat(this.utmParams);
            },
          },
          computed: {
            percentageClass: function () {
              var e = Number(
                this.apiCoinData.market_data
                  .price_change_percentage_24h_in_currency[this.currencyCode]
              );
              return {
                "cg-primary-color-dark": e >= 0,
                "cg-red-color-dark": e < 0,
              };
            },
          },
        },
        l = u,
        p = n("2877"),
        f = Object(p["a"])(l, r, o, !1, null, null, null);
      f.options.__file = "CoinDetails.vue";
      t["a"] = f.exports;
    },
    "9b43": function (e, t, n) {
      var r = n("d8e8");
      e.exports = function (e, t, n) {
        if ((r(e), void 0 === t)) return e;
        switch (n) {
          case 1:
            return function (n) {
              return e.call(t, n);
            };
          case 2:
            return function (n, r) {
              return e.call(t, n, r);
            };
          case 3:
            return function (n, r, o) {
              return e.call(t, n, r, o);
            };
        }
        return function () {
          return e.apply(t, arguments);
        };
      };
    },
    "9c6c": function (e, t, n) {
      var r = n("2b4c")("unscopables"),
        o = Array.prototype;
      void 0 == o[r] && n("32e9")(o, r, {}),
        (e.exports = function (e) {
          o[r][e] = !0;
        });
    },
    "9c80": function (e, t) {
      e.exports = function (e) {
        try {
          return { e: !1, v: e() };
        } catch (t) {
          return { e: !0, v: t };
        }
      };
    },
    "9c93": function (e, t, n) {
      var r = n("0f89");
      e.exports = function (e, t, n, o) {
        try {
          return o ? t(r(n)[0], n[1]) : t(n);
        } catch (a) {
          var i = e["return"];
          throw (void 0 !== i && r(i.call(e)), a);
        }
      };
    },
    "9def": function (e, t, n) {
      var r = n("4588"),
        o = Math.min;
      e.exports = function (e) {
        return e > 0 ? o(r(e), 9007199254740991) : 0;
      };
    },
    "9e1e": function (e, t, n) {
      e.exports = !n("79e5")(function () {
        return (
          7 !=
          Object.defineProperty({}, "a", {
            get: function () {
              return 7;
            },
          }).a
        );
      });
    },
    "9e44": function (e, t, n) {
      "use strict";
      var r = n("7633"),
        o = n("31c2"),
        i = n("d74e"),
        a = n("0185"),
        c = n("8bab"),
        s = Object.assign;
      e.exports =
        !s ||
        n("d782")(function () {
          var e = {},
            t = {},
            n = Symbol(),
            r = "abcdefghijklmnopqrst";
          return (
            (e[n] = 7),
            r.split("").forEach(function (e) {
              t[e] = e;
            }),
            7 != s({}, e)[n] || Object.keys(s({}, t)).join("") != r
          );
        })
          ? function (e, t) {
              var n = a(e),
                s = arguments.length,
                u = 1,
                l = o.f,
                p = i.f;
              while (s > u) {
                var f,
                  d = c(arguments[u++]),
                  h = l ? r(d).concat(l(d)) : r(d),
                  _ = h.length,
                  m = 0;
                while (_ > m) p.call(d, (f = h[m++])) && (n[f] = d[f]);
              }
              return n;
            }
          : s;
    },
    a0d3: function (e, t, n) {
      "use strict";
      var r = n("0f7c");
      e.exports = r.call(Function.call, Object.prototype.hasOwnProperty);
    },
    a25f: function (e, t, n) {
      var r = n("7726"),
        o = r.navigator;
      e.exports = (o && o.userAgent) || "";
    },
    a306: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "ClasificaciÃ³n de capitalizaciÃ³n de mercado",
          mcap: "Cap. de mercado",
          "24h_volume": "Volumen en 24Â h",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "ComparaciÃ³n de precios de criptomonedas",
          crypto_market_cap_comparison:
            "ComparaciÃ³n de la capitalizaciÃ³n de mercado de las criptomonedas",
        },
        coin_price_static_headline_widget: {
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "MÃ¡ximo en 24 h",
          "24h_low": "MÃ­nimo en 24 h",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
        },
        beam_widget: {
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
        },
        coin_ticker_widget: {
          "24h_high": "MÃ¡ximo en 24 h",
          "24h_low": "MÃ­nimo en 24 h",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "Mapa de Ã¡rbol de criptomonedas",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "Volumen en 24Â h",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "Intercambios",
          pair: "Par",
          price: "Precio",
          volume: "Volumen",
          trust_score: "Trust Score",
          view_price_chart: "Ver tabla de precios",
          powered_by: "Con tecnologÃ­a de %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    a47f: function (e, t, n) {
      e.exports =
        !n("7d95") &&
        !n("d782")(function () {
          return (
            7 !=
            Object.defineProperty(n("12fd")("div"), "a", {
              get: function () {
                return 7;
              },
            }).a
          );
        });
    },
    a481: function (e, t, n) {
      "use strict";
      var r = n("cb7c"),
        o = n("4bf8"),
        i = n("9def"),
        a = n("4588"),
        c = n("0390"),
        s = n("5f1b"),
        u = Math.max,
        l = Math.min,
        p = Math.floor,
        f = /\$([$&`']|\d\d?|<[^>]*>)/g,
        d = /\$([$&`']|\d\d?)/g,
        h = function (e) {
          return void 0 === e ? e : String(e);
        };
      n("214f")("replace", 2, function (e, t, n, _) {
        return [
          function (r, o) {
            var i = e(this),
              a = void 0 == r ? void 0 : r[t];
            return void 0 !== a ? a.call(r, i, o) : n.call(String(i), r, o);
          },
          function (e, t) {
            var o = _(n, e, this, t);
            if (o.done) return o.value;
            var p = r(e),
              f = String(this),
              d = "function" === typeof t;
            d || (t = String(t));
            var v = p.global;
            if (v) {
              var y = p.unicode;
              p.lastIndex = 0;
            }
            var g = [];
            while (1) {
              var b = s(p, f);
              if (null === b) break;
              if ((g.push(b), !v)) break;
              var w = String(b[0]);
              "" === w && (p.lastIndex = c(f, i(p.lastIndex), y));
            }
            for (var x = "", C = 0, k = 0; k < g.length; k++) {
              b = g[k];
              for (
                var S = String(b[0]),
                  P = u(l(a(b.index), f.length), 0),
                  A = [],
                  O = 1;
                O < b.length;
                O++
              )
                A.push(h(b[O]));
              var $ = b.groups;
              if (d) {
                var T = [S].concat(A, P, f);
                void 0 !== $ && T.push($);
                var j = String(t.apply(void 0, T));
              } else j = m(S, f, P, A, $, t);
              P >= C && ((x += f.slice(C, P) + j), (C = P + S.length));
            }
            return x + f.slice(C);
          },
        ];
        function m(e, t, r, i, a, c) {
          var s = r + e.length,
            u = i.length,
            l = d;
          return (
            void 0 !== a && ((a = o(a)), (l = f)),
            n.call(c, l, function (n, o) {
              var c;
              switch (o.charAt(0)) {
                case "$":
                  return "$";
                case "&":
                  return e;
                case "`":
                  return t.slice(0, r);
                case "'":
                  return t.slice(s);
                case "<":
                  c = a[o.slice(1, -1)];
                  break;
                default:
                  var l = +o;
                  if (0 === l) return n;
                  if (l > u) {
                    var f = p(l / 10);
                    return 0 === f
                      ? n
                      : f <= u
                      ? void 0 === i[f - 1]
                        ? o.charAt(1)
                        : i[f - 1] + o.charAt(1)
                      : n;
                  }
                  c = i[l - 1];
              }
              return void 0 === c ? "" : c;
            })
          );
        }
      });
    },
    a5ab: function (e, t, n) {
      var r = n("a812"),
        o = Math.min;
      e.exports = function (e) {
        return e > 0 ? o(r(e), 9007199254740991) : 0;
      };
    },
    a5b8: function (e, t, n) {
      "use strict";
      var r = n("d8e8");
      function o(e) {
        var t, n;
        (this.promise = new e(function (e, r) {
          if (void 0 !== t || void 0 !== n)
            throw TypeError("Bad Promise constructor");
          (t = e), (n = r);
        })),
          (this.resolve = r(t)),
          (this.reject = r(n));
      }
      e.exports.f = function (e) {
        return new o(e);
      };
    },
    a7d3: function (e, t) {
      var n = (e.exports = { version: "2.6.1" });
      "number" == typeof __e && (__e = n);
    },
    a812: function (e, t) {
      var n = Math.ceil,
        r = Math.floor;
      e.exports = function (e) {
        return isNaN((e = +e)) ? 0 : (e > 0 ? r : n)(e);
      };
    },
    aa77: function (e, t, n) {
      var r = n("5ca1"),
        o = n("be13"),
        i = n("79e5"),
        a = n("fdef"),
        c = "[" + a + "]",
        s = "â€‹Â…",
        u = RegExp("^" + c + c + "*"),
        l = RegExp(c + c + "*$"),
        p = function (e, t, n) {
          var o = {},
            c = i(function () {
              return !!a[e]() || s[e]() != s;
            }),
            u = (o[e] = c ? t(f) : a[e]);
          n && (o[n] = u), r(r.P + r.F * c, "String", o);
        },
        f = (p.trim = function (e, t) {
          return (
            (e = String(o(e))),
            1 & t && (e = e.replace(u, "")),
            2 & t && (e = e.replace(l, "")),
            e
          );
        });
      e.exports = p;
    },
    ac6a: function (e, t, n) {
      for (
        var r = n("cadf"),
          o = n("0d58"),
          i = n("2aba"),
          a = n("7726"),
          c = n("32e9"),
          s = n("84f2"),
          u = n("2b4c"),
          l = u("iterator"),
          p = u("toStringTag"),
          f = s.Array,
          d = {
            CSSRuleList: !0,
            CSSStyleDeclaration: !1,
            CSSValueList: !1,
            ClientRectList: !1,
            DOMRectList: !1,
            DOMStringList: !1,
            DOMTokenList: !0,
            DataTransferItemList: !1,
            FileList: !1,
            HTMLAllCollection: !1,
            HTMLCollection: !1,
            HTMLFormElement: !1,
            HTMLSelectElement: !1,
            MediaList: !0,
            MimeTypeArray: !1,
            NamedNodeMap: !1,
            NodeList: !0,
            PaintRequestList: !1,
            Plugin: !1,
            PluginArray: !1,
            SVGLengthList: !1,
            SVGNumberList: !1,
            SVGPathSegList: !1,
            SVGPointList: !1,
            SVGStringList: !1,
            SVGTransformList: !1,
            SourceBufferList: !1,
            StyleSheetList: !0,
            TextTrackCueList: !1,
            TextTrackList: !1,
            TouchList: !1,
          },
          h = o(d),
          _ = 0;
        _ < h.length;
        _++
      ) {
        var m,
          v = h[_],
          y = d[v],
          g = a[v],
          b = g && g.prototype;
        if (b && (b[l] || c(b, l, f), b[p] || c(b, p, v), (s[v] = f), y))
          for (m in r) b[m] || i(b, m, r[m], !0);
      }
    },
    aced: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "Xáº¿p háº¡ng Vá»‘n hÃ³a thá»‹ trÆ°á»ng",
          mcap: "GiÃ¡ trá»‹ vá»‘n hÃ³a thá»‹ trÆ°á»ng",
          "24h_volume": "Khá»‘i lÆ°á»£ng trong 24h",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "So sÃ¡nh giÃ¡ tiá»n mÃ£ hÃ³a",
          crypto_market_cap_comparison:
            "So sÃ¡nh vá»‘n hÃ³a thá»‹ trÆ°á»ng tiá»n mÃ£ hÃ³a",
        },
        coin_price_static_headline_widget: {
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "Cao trong 24H",
          "24h_low": "Tháº¥p trong 24H",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
        },
        beam_widget: {
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
        },
        coin_ticker_widget: {
          "24h_high": "Cao trong 24H",
          "24h_low": "Tháº¥p trong 24H",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "SÆ¡ Ä‘á»“ cÃ¢y Tiá»n mÃ£ hÃ³a",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "Khá»‘i lÆ°á»£ng trong 24h",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "SÃ n giao dá»‹ch",
          pair: "Cáº·p",
          price: "GiÃ¡",
          volume: "Khá»‘i lÆ°á»£ng",
          trust_score: "Äiá»ƒm tin cáº­y",
          view_price_chart: "Xem biá»ƒu Ä‘á»“ giÃ¡",
          powered_by: "ÄÆ°á»£c há»— trá»£ bá»Ÿi %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    af08: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "ØªØµÙ†ÙŠÙ Ø§Ù„Ù‚ÙŠÙ…Ø© Ø§Ù„Ø³ÙˆÙ‚ÙŠØ©",
          mcap: "Ø§Ù„Ù‚ÙŠÙ…Ø© Ø§Ù„Ø³ÙˆÙ‚ÙŠØ©",
          "24h_volume": "Ø­Ø¬Ù… 24 Ø³Ø§Ø¹Ø©",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
          crypto_price_comparison:
            "Ù…Ù‚Ø§Ø±Ù†Ø© Ø£Ø³Ø¹Ø§Ø± Ø§Ù„Ø¹Ù…Ù„Ø© Ø§Ù„Ù…Ø´ÙØ±Ø©",
          crypto_market_cap_comparison:
            "Ù…Ù‚Ø§Ø±Ù†Ø© Ø³Ù‚Ù Ø£Ø³Ø¹Ø§Ø± Ø³ÙˆÙ‚ Ø§Ù„Ø¹Ù…Ù„Ø§Øª Ø§Ù„Ù…Ø´ÙØ±Ø©",
        },
        coin_price_static_headline_widget: {
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "Ø§Ø±ØªÙØ§Ø¹ Ø¹Ù„Ù‰ Ù…Ø¯Ø§Ø± 24 Ø³Ø§Ø¹Ø©",
          "24h_low": "Ø§Ù†Ø®ÙØ§Ø¶ Ø¹Ù„Ù‰ Ù…Ø¯Ø§Ø± 24 Ø³Ø§Ø¹Ø©",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
        },
        beam_widget: {
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
        },
        coin_ticker_widget: {
          "24h_high": "Ø§Ø±ØªÙØ§Ø¹ Ø¹Ù„Ù‰ Ù…Ø¯Ø§Ø± 24 Ø³Ø§Ø¹Ø©",
          "24h_low": "Ø§Ù†Ø®ÙØ§Ø¶ Ø¹Ù„Ù‰ Ù…Ø¯Ø§Ø± 24 Ø³Ø§Ø¹Ø©",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "Ø®Ø±ÙŠØ·Ø© Ø´Ø¬Ø±Ø© Ø§Ù„Ø¹Ù…Ù„Ø§Øª Ø§Ù„Ù…Ø´ÙØ±Ø©",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "Ø­Ø¬Ù… 24 Ø³Ø§Ø¹Ø©",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "Ø¨ÙˆØ±ØµØ©",
          pair: "Ø²ÙˆØ¬",
          price: "Ø§Ù„Ø³Ø¹Ø±",
          volume: "Ø­Ø¬Ù… Ø§Ù„ØªØ¯Ø§ÙˆÙ„",
          trust_score: "Ù†ØªÙŠØ¬Ø© Ø§Ù„Ù…ÙˆØ«ÙˆÙ‚ÙŠØ©",
          view_price_chart: "Ø¹Ø±Ø¶ Ù…Ø®Ø·Ø· Ø§Ù„Ø³Ø¹Ø±",
          powered_by: "Ø¨Ø±Ø¹Ø§ÙŠØ© %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    af14: function (e, t, n) {
      "use strict";
      n.d(t, "a", function () {
        return r;
      });
      n("7618");
      function r() {
        return (
          null != document.head.attachShadow &&
          null != window.customElements &&
          null != window.fetch
        );
      }
    },
    b0bc: function (e, t) {
      e.exports = function (e, t, n, r) {
        if (!(e instanceof t) || (void 0 !== r && r in e))
          throw TypeError(n + ": incorrect invocation!");
        return e;
      };
    },
    b0c5: function (e, t, n) {
      "use strict";
      var r = n("520a");
      n("5ca1")(
        { target: "RegExp", proto: !0, forced: r !== /./.exec },
        { exec: r }
      );
    },
    b22a: function (e, t) {
      e.exports = {};
    },
    b258: function (e, t, n) {
      n("d256"), n("12fd9"), n("d127"), n("d24f"), (e.exports = n("a7d3").Symbol);
    },
    b3e7: function (e, t) {
      e.exports = function () {};
    },
    b3fd: function (e, t, n) {
      "use strict";
      var r = n("f367"),
        o = n("1b7f");
      e.exports = function () {
        var e = o();
        return (
          r(
            String.prototype,
            { trim: e },
            {
              trim: function () {
                return String.prototype.trim !== e;
              },
            }
          ),
          e
        );
      };
    },
    b42c: function (e, t, n) {
      n("fa54");
      for (
        var r = n("da3c"),
          o = n("8ce0"),
          i = n("b22a"),
          a = n("1b55")("toStringTag"),
          c =
            "CSSRuleList,CSSStyleDeclaration,CSSValueList,ClientRectList,DOMRectList,DOMStringList,DOMTokenList,DataTransferItemList,FileList,HTMLAllCollection,HTMLCollection,HTMLFormElement,HTMLSelectElement,MediaList,MimeTypeArray,NamedNodeMap,NodeList,PaintRequestList,Plugin,PluginArray,SVGLengthList,SVGNumberList,SVGPathSegList,SVGPointList,SVGStringList,SVGTransformList,SourceBufferList,StyleSheetList,TextTrackCueList,TextTrackList,TouchList".split(
              ","
            ),
          s = 0;
        s < c.length;
        s++
      ) {
        var u = c[s],
          l = r[u],
          p = l && l.prototype;
        p && !p[a] && o(p, a, u), (i[u] = i.Array);
      }
    },
    b457: function (e, t) {
      e.exports = !0;
    },
    b5aa: function (e, t, n) {
      var r = n("6e1f");
      e.exports =
        Array.isArray ||
        function (e) {
          return "Array" == r(e);
        };
    },
    b604: function (e, t, n) {
      "use strict";
      var r = n("d13f"),
        o = n("a7d3"),
        i = n("da3c"),
        a = n("302f"),
        c = n("decf");
      r(r.P + r.R, "Promise", {
        finally: function (e) {
          var t = a(this, o.Promise || i.Promise),
            n = "function" == typeof e;
          return this.then(
            n
              ? function (n) {
                  return c(t, e()).then(function () {
                    return n;
                  });
                }
              : e,
            n
              ? function (n) {
                  return c(t, e()).then(function () {
                    throw n;
                  });
                }
              : e
          );
        },
      });
    },
    bb01: function (e, t, n) {
      (t = e.exports = n("2350")(!1)),
        t.push([
          e.i,
          ".cg-widget {\n  display: flex;\n  position: relative;\n  box-sizing: border-box;\n}\n\n.cg-widget a {\n  text-decoration: none;\n  color: #fff;\n}\n\n.cg-left-panel {\n  display: flex;\n  flex-direction: column;\n  flex: 1 1 auto;\n  justify-content: center;\n  align-items: center;\n}\n\n.cg-right-panel {\n  display: flex;\n  flex-direction: column;\n  flex: 2 2 auto;\n  align-items: center;\n  justify-content: space-between;\n}\n\n.small .cg-widget {\n  flex-direction: column;\n}\n\n.small .cg-left-panel {\n  flex-direction: row;\n  flex: 1 1 auto;\n}\n\n.small .cg-right-panel {\n  margin-top: 16px;\n}\n\n.small .cg-ticker {\n  font-size: 12px;\n}\n\n.large .cg-lg-hide {\n  display: none;\n}\n\n.cg-gecko-score {\n  width: 100%;\n}\n\n.small .cg-sm-hide {\n  display: none;\n}\n\n.large .cg-gecko-score {\n  flex-direction: row;\n  justify-content: space-around;\n}\n\n.small .cg-gecko-score {\n  flex-direction: column;\n}\n\n.large .cg-score-container {\n  flex-direction: column;\n}\n\n.small .cg-score-container {\n  flex-direction: row;\n  justify-content: space-between;\n}\n\n.cg-ticker-item {\n  width: 100%;\n  max-width: 300px;\n}\n",
          "",
        ]);
    },
    bb53: function (e, t) {
      e.exports = function (e, t) {
        var n = e % t;
        return Math.floor(n >= 0 ? n : n + t);
      };
    },
    bc25: function (e, t, n) {
      var r = n("f2fe");
      e.exports = function (e, t, n) {
        if ((r(e), void 0 === t)) return e;
        switch (n) {
          case 1:
            return function (n) {
              return e.call(t, n);
            };
          case 2:
            return function (n, r) {
              return e.call(t, n, r);
            };
          case 3:
            return function (n, r, o) {
              return e.call(t, n, r, o);
            };
        }
        return function () {
          return e.apply(t, arguments);
        };
      };
    },
    bcaa: function (e, t, n) {
      var r = n("cb7c"),
        o = n("d3f4"),
        i = n("a5b8");
      e.exports = function (e, t) {
        if ((r(e), o(t) && t.constructor === e)) return t;
        var n = i.f(e),
          a = n.resolve;
        return a(t), n.promise;
      };
    },
    be13: function (e, t) {
      e.exports = function (e) {
        if (void 0 == e) throw TypeError("Can't call method on  " + e);
        return e;
      };
    },
    c0d8: function (e, t, n) {
      var r = n("3adc").f,
        o = n("43c8"),
        i = n("1b55")("toStringTag");
      e.exports = function (e, t, n) {
        e &&
          !o((e = n ? e : e.prototype), i) &&
          r(e, i, { configurable: !0, value: t });
      };
    },
    c1e2: function (e, t, n) {
      "use strict";
      var r = n("2b0e"),
        o = n("288a"),
        i = n.n(o),
        a = n("7618"),
        c = n("5176"),
        s = n.n(c),
        u = n("af08"),
        l = n("6ce2"),
        p = n("edd4"),
        f = n("a306"),
        d = n("f693"),
        h = n("210c"),
        _ = n("0825"),
        m = n("0423"),
        v = n("dd11"),
        y = n("89b2"),
        g = n("5d67"),
        b = n("7704"),
        w = n("8680"),
        x = n("ffeb"),
        C = n("aced"),
        k = n("056c"),
        S = n("3504"),
        P = {
          ar: u,
          de: l,
          en: p,
          es: f,
          fr: d,
          id: h,
          it: _,
          ja: m,
          ko: v,
          pl: y,
          pt: g,
          ru: b,
          th: w,
          tr: x,
          vi: C,
          "zh-tw": k,
          zh: S,
        },
        A = P;
      function O(e) {
        var t =
          arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "en";
        return $(P[e], P[t]);
      }
      function $(e, t) {
        var n = s()({}, t);
        for (var r in n) {
          var o = e[r],
            i = n[r];
          if (o && i)
            if ("object" === Object(a["a"])(o) && "object" === Object(a["a"])(i))
              for (var c in e[r]) n[r][c] = e[r][c];
            else n[r] = e[r];
        }
        return n;
      }
      var T = function () {
        return r["a"].mixin({
          data: function () {
            return { polyglot: new i.a({ phrases: O("en") }) };
          },
          methods: {
            reloadLocale: function () {
              if (void 0 !== this.locale) {
                if (!A[this.locale])
                  throw new Error(
                    "Locale not supported by widget. Contact support@coingecko.com for help."
                  );
                this.polyglot = new i.a({ phrases: O(this.locale, "en") });
              }
            },
          },
          watch: {
            locale: function () {
              this.reloadLocale();
            },
          },
          created: function () {
            this.reloadLocale();
          },
        });
      };
      t["a"] = T;
    },
    c227: function (e, t, n) {
      var r = n("b22a"),
        o = n("1b55")("iterator"),
        i = Array.prototype;
      e.exports = function (e) {
        return void 0 !== e && (r.Array === e || i[o] === e);
      };
    },
    c366: function (e, t, n) {
      var r = n("6821"),
        o = n("9def"),
        i = n("77f1");
      e.exports = function (e) {
        return function (t, n, a) {
          var c,
            s = r(t),
            u = o(s.length),
            l = i(a, u);
          if (e && n != n) {
            while (u > l) if (((c = s[l++]), c != c)) return !0;
          } else
            for (; u > l; l++)
              if ((e || l in s) && s[l] === n) return e || l || 0;
          return !e && -1;
        };
      };
    },
    c46d: function (e, t, n) {
      "use strict";
      var r = n("e9ac"),
        o = r("%TypeError%"),
        i = r("%SyntaxError%"),
        a = n("a0d3"),
        c = {
          "Property Descriptor": function (e, t) {
            if ("Object" !== e.Type(t)) return !1;
            var n = {
              "[[Configurable]]": !0,
              "[[Enumerable]]": !0,
              "[[Get]]": !0,
              "[[Set]]": !0,
              "[[Value]]": !0,
              "[[Writable]]": !0,
            };
            for (var r in t) if (a(t, r) && !n[r]) return !1;
            var i = a(t, "[[Value]]"),
              c = a(t, "[[Get]]") || a(t, "[[Set]]");
            if (i && c)
              throw new o(
                "Property Descriptors may not be both accessor and data descriptors"
              );
            return !0;
          },
        };
      e.exports = function (e, t, n, r) {
        var a = c[t];
        if ("function" !== typeof a) throw new i("unknown record type: " + t);
        if (!a(e, r)) throw new o(n + " must be a " + t);
        console.log(a(e, r), r);
      };
    },
    c5f6: function (e, t, n) {
      "use strict";
      var r = n("7726"),
        o = n("69a8"),
        i = n("2d95"),
        a = n("5dbc"),
        c = n("6a99"),
        s = n("79e5"),
        u = n("9093").f,
        l = n("11e9").f,
        p = n("86cc").f,
        f = n("aa77").trim,
        d = "Number",
        h = r[d],
        _ = h,
        m = h.prototype,
        v = i(n("2aeb")(m)) == d,
        y = "trim" in String.prototype,
        g = function (e) {
          var t = c(e, !1);
          if ("string" == typeof t && t.length > 2) {
            t = y ? t.trim() : f(t, 3);
            var n,
              r,
              o,
              i = t.charCodeAt(0);
            if (43 === i || 45 === i) {
              if (((n = t.charCodeAt(2)), 88 === n || 120 === n)) return NaN;
            } else if (48 === i) {
              switch (t.charCodeAt(1)) {
                case 66:
                case 98:
                  (r = 2), (o = 49);
                  break;
                case 79:
                case 111:
                  (r = 8), (o = 55);
                  break;
                default:
                  return +t;
              }
              for (var a, s = t.slice(2), u = 0, l = s.length; u < l; u++)
                if (((a = s.charCodeAt(u)), a < 48 || a > o)) return NaN;
              return parseInt(s, r);
            }
          }
          return +t;
        };
      if (!h(" 0o1") || !h("0b1") || h("+0x1")) {
        h = function (e) {
          var t = arguments.length < 1 ? 0 : e,
            n = this;
          return n instanceof h &&
            (v
              ? s(function () {
                  m.valueOf.call(n);
                })
              : i(n) != d)
            ? a(new _(g(t)), n, h)
            : g(t);
        };
        for (
          var b,
            w = n("9e1e")
              ? u(_)
              : "MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger".split(
                  ","
                ),
            x = 0;
          w.length > x;
          x++
        )
          o(_, (b = w[x])) && !o(h, b) && p(h, b, l(_, b));
        (h.prototype = m), (m.constructor = h), n("2aba")(r, d, h);
      }
    },
    c609: function (e, t, n) {
      "use strict";
      var r = n("d13f"),
        o = n("03ca"),
        i = n("75c9");
      r(r.S, "Promise", {
        try: function (e) {
          var t = o.f(this),
            n = i(e);
          return (n.e ? t.reject : t.resolve)(n.v), t.promise;
        },
      });
    },
    c612: function (e, t) {
      var n =
        Number.isNaN ||
        function (e) {
          return e !== e;
        };
      e.exports =
        Number.isFinite ||
        function (e) {
          return "number" === typeof e && !n(e) && e !== 1 / 0 && e !== -1 / 0;
        };
    },
    c649: function (e, t, n) {
      "use strict";
      n.d(t, "c", function () {
        return i;
      }),
        n.d(t, "b", function () {
          return c;
        }),
        n.d(t, "a", function () {
          return s;
        });
      n("a481"), n("5df3");
      var r = n("795b"),
        o = n.n(r);
      n("ac6a");
      function i(e) {
        var t = [];
        return (
          e.forEach(function (e) {
            t.push(
              new o.a(function (t, n) {
                a(e, t, n);
              })
            );
          }),
          o.a.all(t)
        );
      }
      function a(e) {
        var t =
            arguments.length > 1 && void 0 !== arguments[1]
              ? arguments[1]
              : function () {},
          n =
            arguments.length > 2 && void 0 !== arguments[2]
              ? arguments[2]
              : function () {},
          r = document.createElement("script");
        (r.src = e.src),
          (r.crossOrigin = "anonymous"),
          (r.integrity = e.integrity),
          (r.onload = t),
          (r.onerror = function () {
            n(new Error("Failed to load script " + e.src));
          }),
          document.head.appendChild(r);
      }
      function c(e, t, n) {
        var r;
        return function () {
          var o = this,
            i = arguments,
            a = function () {
              (r = null), n || e.apply(o, i);
            },
            c = n && !r;
          clearTimeout(r), (r = setTimeout(a, t)), c && e.apply(o, i);
        };
      }
      function s(e) {
        var t = [].slice,
          n = 1 <= arguments.length ? t.call(arguments, 0) : [],
          r =
            /(^|[\s\n]|<[A-Za-z]*\/?>)((?:https?|ftp):\/\/[\-A-Z0-9+\u0026\u2019@#\/%?=()~_|!:,.;]*[\-A-Z0-9+\u0026@#\/%=~()_|])/gi;
        return n.length > 0
          ? e.replace(r, function (e, t, n) {
              var r =
                '<a href="' +
                n +
                '" class="cg-primary-color-dark cg-no-underline" target="_blank">' +
                n +
                "</a>";
              return "" + t + r;
            })
          : e.replace(
              r,
              '$1<a class="cg-primary-color-dark cg-no-underline" target="_blank" href="$2">$2</a>'
            );
      }
    },
    c69a: function (e, t, n) {
      e.exports =
        !n("9e1e") &&
        !n("79e5")(function () {
          return (
            7 !=
            Object.defineProperty(n("230e")("div"), "a", {
              get: function () {
                return 7;
              },
            }).a
          );
        });
    },
    c894: function (e, t, n) {
      "use strict";
      function r(e, t) {
        return (e.__proto__ = t), e;
      }
      Object.setPrototypeOf = Object.setPrototypeOf || r;
      r.bind(Object);
      function o() {
        return (
          "undefined" !== typeof Symbol &&
          "undefined" !== typeof Reflect &&
          "undefined" !== typeof Proxy &&
          !Object.isSealed(Proxy)
        );
      }
      var i = o(),
        a = (function () {
          function e(e, t) {
            for (var n = 0; n < t.length; n++) {
              var r = t[n];
              (r.enumerable = r.enumerable || !1),
                (r.configurable = !0),
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r);
            }
          }
          return function (t, n, r) {
            return n && e(t.prototype, n), r && e(t, r), t;
          };
        })();
      function c(e, t) {
        if (!(e instanceof t))
          throw new TypeError("Cannot call a class as a function");
      }
      function s(e, t) {
        if (!e)
          throw new ReferenceError(
            "this hasn't been initialised - super() hasn't been called"
          );
        return !t || ("object" !== typeof t && "function" !== typeof t) ? e : t;
      }
      function u(e, t) {
        if ("function" !== typeof t && null !== t)
          throw new TypeError(
            "Super expression must either be null or a function, not " + typeof t
          );
        (e.prototype = Object.create(t && t.prototype, {
          constructor: {
            value: e,
            enumerable: !1,
            writable: !0,
            configurable: !0,
          },
        })),
          t &&
            (Object.setPrototypeOf
              ? Object.setPrototypeOf(e, t)
              : (e.__proto__ = t));
      }
      function l() {
        return Reflect.construct(HTMLElement, [], this.__proto__.constructor);
      }
      function p(e) {
        var t =
          arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
        if ("undefined" !== typeof customElements) {
          if (i) {
            var n = (function (e) {
              function n(e) {
                var t;
                c(this, n);
                var r = s(
                    this,
                    (n.__proto__ || Object.getPrototypeOf(n)).call(this)
                  ),
                  i = e ? HTMLElement.call(e) : r;
                return o.call(i), (t = i), s(r, t);
              }
              return (
                u(n, e),
                a(n, null, [
                  {
                    key: "observedAttributes",
                    get: function () {
                      return t.observedAttributes || [];
                    },
                  },
                ]),
                n
              );
            })(l);
            return (
              (n.prototype.connectedCallback = p),
              (n.prototype.disconnectedCallback = f),
              (n.prototype.attributeChangedCallback = d),
              h(e, n),
              n
            );
          }
          var r = function (e) {
            var t = e ? HTMLElement.call(e) : this;
            return o.call(t), t;
          };
          return (
            (r.observedAttributes = t.observedAttributes || []),
            (r.prototype = Object.create(HTMLElement.prototype, {
              constructor: { configurable: !0, writable: !0, value: r },
            })),
            (r.prototype.connectedCallback = p),
            (r.prototype.disconnectedCallback = f),
            (r.prototype.attributeChangedCallback = d),
            h(e, r),
            r
          );
        }
        function o() {
          !0 === t.shadow &&
            HTMLElement.prototype.attachShadow &&
            this.attachShadow({ mode: "open" }),
            "function" === typeof t.constructorCallback &&
              t.constructorCallback.call(this);
        }
        function p() {
          "function" === typeof t.connectedCallback &&
            t.connectedCallback.call(this);
        }
        function f() {
          "function" === typeof t.disconnectedCallback &&
            t.disconnectedCallback.call(this);
        }
        function d(e, n, r) {
          "function" === typeof t.attributeChangedCallback &&
            t.attributeChangedCallback.call(this, e, n, r);
        }
        function h(e, t) {
          var n = customElements.get(e);
          return "undefined" !== typeof n ? n : customElements.define(e, t);
        }
      }
      Object.setPrototypeOf(l.prototype, HTMLElement.prototype),
        Object.setPrototypeOf(l, HTMLElement);
      var f = /-(\w)/g,
        d = function (e) {
          return e.replace(f, function (e, t) {
            return t ? t.toUpperCase() : "";
          });
        },
        h = /([^-])([A-Z])/g,
        _ = function (e) {
          return e.replace(h, "$1-$2").replace(h, "$1-$2").toLowerCase();
        };
      function m(e) {
        var t =
            arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
          n = e.length - t,
          r = new Array(n);
        while (n--) r[n] = e[n + t];
        return r;
      }
      var v =
        "function" === typeof Symbol && "symbol" === typeof Symbol.iterator
          ? function (e) {
              return typeof e;
            }
          : function (e) {
              return e &&
                "function" === typeof Symbol &&
                e.constructor === Symbol &&
                e !== Symbol.prototype
                ? "symbol"
                : typeof e;
            };
      function y(e, t) {
        var n = e,
          r = ["true", "false"].indexOf(e) > -1,
          o = parseFloat(n, 10),
          i =
            !isNaN(o) &&
            isFinite(n) &&
            "string" === typeof n &&
            !n.match(/^0+[^.]\d*$/g);
        return (
          t &&
          t !== Boolean &&
          ("undefined" === typeof n ? "undefined" : v(n)) !== t
            ? (n = t(e))
            : r || t === Boolean
            ? (n = "" === n || "true" === n)
            : i && (n = o),
          n
        );
      }
      function g(e, t) {
        if (e && e.length)
          e.forEach(function (e) {
            var n = d(e);
            -1 === t.camelCase.indexOf(n) && t.camelCase.push(n);
          });
        else if (
          e &&
          "object" === ("undefined" === typeof e ? "undefined" : v(e))
        )
          for (var n in e) {
            var r = d(n);
            -1 === t.camelCase.indexOf(r) && t.camelCase.push(r),
              e[r] && e[r].type && (t.types[n] = [].concat(e[r].type)[0]);
          }
      }
      function b() {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
          t = { camelCase: [], hyphenate: [], types: {} };
        if (
          (e.mixins &&
            e.mixins.forEach(function (e) {
              g(e.props, t);
            }),
          e.extends && e.extends.props)
        ) {
          var n = e.extends.props;
          g(n, t);
        }
        return (
          g(e.props, t),
          t.camelCase.forEach(function (e) {
            t.hyphenate.push(_(e));
          }),
          t
        );
      }
      function w(e, t) {
        t.camelCase.forEach(function (n, r) {
          Object.defineProperty(e, n, {
            get: function () {
              return this.__vue_custom_element__[n];
            },
            set: function (e) {
              if (
                ("object" !== ("undefined" === typeof e ? "undefined" : v(e)) &&
                  "function" !== typeof e) ||
                !this.__vue_custom_element__
              ) {
                var n = t.types[t.camelCase[r]];
                this.setAttribute(t.hyphenate[r], y(e, n));
              } else {
                var o = t.camelCase[r];
                this.__vue_custom_element__[o] = e;
              }
            },
          });
        });
      }
      function x(e, t, n) {
        var r = t.propsData || {};
        return (
          n.hyphenate.forEach(function (t, o) {
            var i = n.camelCase[o],
              a = e.attributes[t] || e[i],
              c = null;
            n.types[i] && (c = n.types[i]),
              a instanceof Attr
                ? (r[i] = y(a.value, c))
                : "undefined" !== typeof a && (r[i] = a);
          }),
          r
        );
      }
      function C(e) {
        var t = {};
        return (
          m(e.attributes).forEach(function (e) {
            t["vue-slot" === e.nodeName ? "slot" : e.nodeName] = e.nodeValue;
          }),
          t
        );
      }
      function k(e) {
        if (e.childNodes.length) return e.childNodes;
        if (e.content && e.content.childNodes && e.content.childNodes.length)
          return e.content.childNodes;
        var t = document.createElement("div");
        return (t.innerHTML = e.innerHTML), t.childNodes;
      }
      function S(e, t, n) {
        var r = k(t),
          o = m(r).map(function (t) {
            return "#text" === t.nodeName
              ? t.nodeValue
              : e(t.tagName, {
                  attrs: C(t),
                  domProps: { innerHTML: t.innerHTML },
                });
          });
        return (n.slot = t.id), e("template", n, o);
      }
      function P() {
        var e =
            arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [],
          t = arguments[1],
          n = [];
        return (
          m(e).forEach(function (e) {
            if ("#text" === e.nodeName)
              e.nodeValue.trim() && n.push(t("span", e.nodeValue));
            else if ("#comment" !== e.nodeName) {
              var r = C(e),
                o = {
                  attrs: r,
                  domProps: {
                    innerHTML: "" === e.innerHTML ? e.innerText : e.innerHTML,
                  },
                };
              r.slot && ((o.slot = r.slot), (r.slot = void 0));
              var i = "TEMPLATE" === e.tagName ? S(t, e, o) : t(e.tagName, o);
              n.push(i);
            }
          }),
          n
        );
      }
      function A(e, t) {
        var n = { bubbles: !1, cancelable: !1, detail: t },
          r = void 0;
        return (
          "function" === typeof window.CustomEvent
            ? (r = new CustomEvent(e, n))
            : ((r = document.createEvent("CustomEvent")),
              r.initCustomEvent(e, n.bubbles, n.cancelable, n.detail)),
          r
        );
      }
      function O(e, t) {
        for (
          var n = arguments.length, r = Array(n > 2 ? n - 2 : 0), o = 2;
          o < n;
          o++
        )
          r[o - 2] = arguments[o];
        var i = A(t, [].concat(r));
        e.dispatchEvent(i);
      }
      function $(e, t, n, r, o) {
        if (!e.__vue_custom_element__) {
          var i = function () {
              this.$emit = function () {
                for (var t, n = arguments.length, r = Array(n), o = 0; o < n; o++)
                  r[o] = arguments[o];
                O.apply(void 0, [e].concat(r)),
                  this.__proto__ &&
                    (t = this.__proto__.$emit).call.apply(t, [this].concat(r));
              };
            },
            a = t.util.extend({}, n),
            c = x(e, a, r),
            s = (t.version && parseInt(t.version.split(".")[0], 10)) || 0;
          if (
            ((a.beforeCreate = [].concat(a.beforeCreate || [], i)), a._compiled)
          ) {
            var u = {};
            a._Ctor && (u = Object.values(a._Ctor)[0].options),
              (u.beforeCreate = a.beforeCreate);
          }
          var l = void 0;
          if (s >= 2) {
            var p = e.cloneNode(!0).childNodes;
            l = {
              propsData: c,
              props: r.camelCase,
              computed: {
                reactiveProps: function () {
                  var e = this,
                    t = {};
                  return (
                    r.camelCase.forEach(function (n) {
                      "undefined" !== typeof e[n] && (t[n] = e[n]);
                    }),
                    t
                  );
                },
              },
              render: function (e) {
                var t = { props: this.reactiveProps };
                return e(a, t, P(p, e));
              },
            };
          } else if (1 === s) (l = a), (l.propsData = c);
          else {
            l = a;
            var f = {};
            Object.keys(c).forEach(function (e) {
              f[e] = { default: c[e] };
            }),
              (l.props = f);
          }
          var d =
            s >= 2
              ? "<div></div>"
              : ("<div>" + e.innerHTML + "</div>").replace(/vue-slot=/g, "slot=");
          if (
            (o.shadow && e.shadowRoot
              ? ((e.shadowRoot.innerHTML = d), (l.el = e.shadowRoot.children[0]))
              : ((e.innerHTML = d), (l.el = e.children[0])),
            w(e, r),
            "function" === typeof o.beforeCreateVueInstance &&
              (l = o.beforeCreateVueInstance(l) || l),
            (e.__vue_custom_element__ = new t(l)),
            (e.__vue_custom_element_props__ = r),
            (e.getVueInstance = function () {
              return e.__vue_custom_element__.$children[0];
            }),
            o.shadow && o.shadowCss && e.shadowRoot)
          ) {
            var h = document.createElement("style");
            (h.type = "text/css"),
              h.appendChild(document.createTextNode(o.shadowCss)),
              e.shadowRoot.appendChild(h);
          }
          e.removeAttribute("vce-cloak"),
            e.setAttribute("vce-ready", ""),
            O(e, "vce-ready");
        }
      }
      function T(e) {
        e.customElement = function (t, n) {
          var r =
              arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
            o = "function" === typeof n,
            i = o && { props: r.props || [] },
            a = b(o ? i : n),
            c = p(t, {
              constructorCallback: function () {
                "function" === typeof r.constructorCallback &&
                  r.constructorCallback.call(this);
              },
              connectedCallback: function () {
                var i = this,
                  c = o && n(),
                  s = c && c.then && "function" === typeof c.then;
                if (
                  ("function" === typeof r.connectedCallback &&
                    r.connectedCallback.call(this),
                  o && !s)
                )
                  throw new Error(
                    "Async component " + t + " do not returns Promise"
                  );
                this.__detached__ ||
                  (s
                    ? c.then(function (t) {
                        var n = b(t);
                        $(i, e, t, n, r),
                          "function" === typeof r.vueInstanceCreatedCallback &&
                            r.vueInstanceCreatedCallback.call(i);
                      })
                    : ($(this, e, n, a, r),
                      "function" === typeof r.vueInstanceCreatedCallback &&
                        r.vueInstanceCreatedCallback.call(this))),
                  (this.__detached__ = !1);
              },
              disconnectedCallback: function () {
                var e = this;
                (this.__detached__ = !0),
                  "function" === typeof r.disconnectedCallback &&
                    r.disconnectedCallback.call(this),
                  setTimeout(function () {
                    e.__detached__ &&
                      e.__vue_custom_element__ &&
                      (e.__vue_custom_element__.$destroy(!0),
                      delete e.__vue_custom_element__,
                      delete e.__vue_custom_element_props__);
                  }, r.destroyTimeout || 3e3);
              },
              attributeChangedCallback: function (e, t, n) {
                if (this.__vue_custom_element__ && "undefined" !== typeof n) {
                  var o = d(e);
                  "function" === typeof r.attributeChangedCallback &&
                    r.attributeChangedCallback.call(this, e, t, n);
                  var i = this.__vue_custom_element_props__.types[o];
                  this.__vue_custom_element__[o] = y(n, i);
                }
              },
              observedAttributes: a.hyphenate,
              shadow: !!r.shadow && !!HTMLElement.prototype.attachShadow,
            });
          return c;
        };
      }
      "undefined" !== typeof window &&
        window.Vue &&
        (window.Vue.use(T), T.installed && (T.installed = !1)),
        (t["a"] = T);
    },
    c8ba: function (e, t) {
      var n;
      n = (function () {
        return this;
      })();
      try {
        n = n || new Function("return this")();
      } catch (r) {
        "object" === typeof window && (n = window);
      }
      e.exports = n;
    },
    ca5a: function (e, t) {
      var n = 0,
        r = Math.random();
      e.exports = function (e) {
        return "Symbol(".concat(
          void 0 === e ? "" : e,
          ")_",
          (++n + r).toString(36)
        );
      };
    },
    ca9f: function (e, t, n) {
      "use strict";
      var r = n("0f7c"),
        o = n("f367"),
        i = n("562e"),
        a = n("1b7f"),
        c = n("b3fd"),
        s = r.call(Function.call, a());
      o(s, { getPolyfill: a, implementation: i, shim: c }), (e.exports = s);
    },
    cadf: function (e, t, n) {
      "use strict";
      var r = n("9c6c"),
        o = n("d53b"),
        i = n("84f2"),
        a = n("6821");
      (e.exports = n("01f9")(
        Array,
        "Array",
        function (e, t) {
          (this._t = a(e)), (this._i = 0), (this._k = t);
        },
        function () {
          var e = this._t,
            t = this._k,
            n = this._i++;
          return !e || n >= e.length
            ? ((this._t = void 0), o(1))
            : o(0, "keys" == t ? n : "values" == t ? e[n] : [n, e[n]]);
        },
        "values"
      )),
        (i.Arguments = i.Array),
        r("keys"),
        r("values"),
        r("entries");
    },
    cb7c: function (e, t, n) {
      var r = n("d3f4");
      e.exports = function (e) {
        if (!r(e)) throw TypeError(e + " is not an object!");
        return e;
      };
    },
    ce10: function (e, t, n) {
      var r = n("69a8"),
        o = n("6821"),
        i = n("c366")(!1),
        a = n("613b")("IE_PROTO");
      e.exports = function (e, t) {
        var n,
          c = o(e),
          s = 0,
          u = [];
        for (n in c) n != a && r(c, n) && u.push(n);
        while (t.length > s) r(c, (n = t[s++])) && (~i(u, n) || u.push(n));
        return u;
      };
    },
    d024: function (e, t, n) {
      "use strict";
      var r = n("21d0"),
        o = Object.prototype.toString,
        i = Object.prototype.hasOwnProperty,
        a = function (e, t, n) {
          for (var r = 0, o = e.length; r < o; r++)
            i.call(e, r) && (null == n ? t(e[r], r, e) : t.call(n, e[r], r, e));
        },
        c = function (e, t, n) {
          for (var r = 0, o = e.length; r < o; r++)
            null == n ? t(e.charAt(r), r, e) : t.call(n, e.charAt(r), r, e);
        },
        s = function (e, t, n) {
          for (var r in e)
            i.call(e, r) && (null == n ? t(e[r], r, e) : t.call(n, e[r], r, e));
        },
        u = function (e, t, n) {
          if (!r(t)) throw new TypeError("iterator must be a function");
          var i;
          arguments.length >= 3 && (i = n),
            "[object Array]" === o.call(e)
              ? a(e, t, i)
              : "string" === typeof e
              ? c(e, t, i)
              : s(e, t, i);
        };
      e.exports = u;
    },
    d127: function (e, t, n) {
      n("0a0a")("asyncIterator");
    },
    d13f: function (e, t, n) {
      var r = n("da3c"),
        o = n("a7d3"),
        i = n("bc25"),
        a = n("8ce0"),
        c = n("43c8"),
        s = "prototype",
        u = function (e, t, n) {
          var l,
            p,
            f,
            d = e & u.F,
            h = e & u.G,
            _ = e & u.S,
            m = e & u.P,
            v = e & u.B,
            y = e & u.W,
            g = h ? o : o[t] || (o[t] = {}),
            b = g[s],
            w = h ? r : _ ? r[t] : (r[t] || {})[s];
          for (l in (h && (n = t), n))
            (p = !d && w && void 0 !== w[l]),
              (p && c(g, l)) ||
                ((f = p ? w[l] : n[l]),
                (g[l] =
                  h && "function" != typeof w[l]
                    ? n[l]
                    : v && p
                    ? i(f, r)
                    : y && w[l] == f
                    ? (function (e) {
                        var t = function (t, n, r) {
                          if (this instanceof e) {
                            switch (arguments.length) {
                              case 0:
                                return new e();
                              case 1:
                                return new e(t);
                              case 2:
                                return new e(t, n);
                            }
                            return new e(t, n, r);
                          }
                          return e.apply(this, arguments);
                        };
                        return (t[s] = e[s]), t;
                      })(f)
                    : m && "function" == typeof f
                    ? i(Function.call, f)
                    : f),
                m &&
                  (((g.virtual || (g.virtual = {}))[l] = f),
                  e & u.R && b && !b[l] && a(b, l, f)));
        };
      (u.F = 1),
        (u.G = 2),
        (u.S = 4),
        (u.P = 8),
        (u.B = 16),
        (u.W = 32),
        (u.U = 64),
        (u.R = 128),
        (e.exports = u);
    },
    d24f: function (e, t, n) {
      n("0a0a")("observable");
    },
    d256: function (e, t, n) {
      "use strict";
      var r = n("da3c"),
        o = n("43c8"),
        i = n("7d95"),
        a = n("d13f"),
        c = n("2312"),
        s = n("6277").KEY,
        u = n("d782"),
        l = n("7772"),
        p = n("c0d8"),
        f = n("7b00"),
        d = n("1b55"),
        h = n("fda1"),
        _ = n("0a0a"),
        m = n("d2d6"),
        v = n("b5aa"),
        y = n("0f89"),
        g = n("6f8a"),
        b = n("6a9b"),
        w = n("2ea1"),
        x = n("f845"),
        C = n("7108"),
        k = n("565d"),
        S = n("626e"),
        P = n("3adc"),
        A = n("7633"),
        O = S.f,
        $ = P.f,
        T = k.f,
        j = r.Symbol,
        E = r.JSON,
        M = E && E.stringify,
        D = "prototype",
        I = d("_hidden"),
        L = d("toPrimitive"),
        F = {}.propertyIsEnumerable,
        N = l("symbol-registry"),
        V = l("symbols"),
        R = l("op-symbols"),
        H = Object[D],
        U = "function" == typeof j,
        z = r.QObject,
        G = !z || !z[D] || !z[D].findChild,
        B =
          i &&
          u(function () {
            return (
              7 !=
              C(
                $({}, "a", {
                  get: function () {
                    return $(this, "a", { value: 7 }).a;
                  },
                })
              ).a
            );
          })
            ? function (e, t, n) {
                var r = O(H, t);
                r && delete H[t], $(e, t, n), r && e !== H && $(H, t, r);
              }
            : $,
        W = function (e) {
          var t = (V[e] = C(j[D]));
          return (t._k = e), t;
        },
        K =
          U && "symbol" == typeof j.iterator
            ? function (e) {
                return "symbol" == typeof e;
              }
            : function (e) {
                return e instanceof j;
              },
        q = function (e, t, n) {
          return (
            e === H && q(R, t, n),
            y(e),
            (t = w(t, !0)),
            y(n),
            o(V, t)
              ? (n.enumerable
                  ? (o(e, I) && e[I][t] && (e[I][t] = !1),
                    (n = C(n, { enumerable: x(0, !1) })))
                  : (o(e, I) || $(e, I, x(1, {})), (e[I][t] = !0)),
                B(e, t, n))
              : $(e, t, n)
          );
        },
        X = function (e, t) {
          y(e);
          var n,
            r = m((t = b(t))),
            o = 0,
            i = r.length;
          while (i > o) q(e, (n = r[o++]), t[n]);
          return e;
        },
        J = function (e, t) {
          return void 0 === t ? C(e) : X(C(e), t);
        },
        Y = function (e) {
          var t = F.call(this, (e = w(e, !0)));
          return (
            !(this === H && o(V, e) && !o(R, e)) &&
            (!(t || !o(this, e) || !o(V, e) || (o(this, I) && this[I][e])) || t)
          );
        },
        Z = function (e, t) {
          if (((e = b(e)), (t = w(t, !0)), e !== H || !o(V, t) || o(R, t))) {
            var n = O(e, t);
            return (
              !n || !o(V, t) || (o(e, I) && e[I][t]) || (n.enumerable = !0), n
            );
          }
        },
        Q = function (e) {
          var t,
            n = T(b(e)),
            r = [],
            i = 0;
          while (n.length > i)
            o(V, (t = n[i++])) || t == I || t == s || r.push(t);
          return r;
        },
        ee = function (e) {
          var t,
            n = e === H,
            r = T(n ? R : b(e)),
            i = [],
            a = 0;
          while (r.length > a)
            !o(V, (t = r[a++])) || (n && !o(H, t)) || i.push(V[t]);
          return i;
        };
      U ||
        ((j = function () {
          if (this instanceof j) throw TypeError("Symbol is not a constructor!");
          var e = f(arguments.length > 0 ? arguments[0] : void 0),
            t = function (n) {
              this === H && t.call(R, n),
                o(this, I) && o(this[I], e) && (this[I][e] = !1),
                B(this, e, x(1, n));
            };
          return i && G && B(H, e, { configurable: !0, set: t }), W(e);
        }),
        c(j[D], "toString", function () {
          return this._k;
        }),
        (S.f = Z),
        (P.f = q),
        (n("d876").f = k.f = Q),
        (n("d74e").f = Y),
        (n("31c2").f = ee),
        i && !n("b457") && c(H, "propertyIsEnumerable", Y, !0),
        (h.f = function (e) {
          return W(d(e));
        })),
        a(a.G + a.W + a.F * !U, { Symbol: j });
      for (
        var te =
            "hasInstance,isConcatSpreadable,iterator,match,replace,search,species,split,toPrimitive,toStringTag,unscopables".split(
              ","
            ),
          ne = 0;
        te.length > ne;
  
      )
        d(te[ne++]);
      for (var re = A(d.store), oe = 0; re.length > oe; ) _(re[oe++]);
      a(a.S + a.F * !U, "Symbol", {
        for: function (e) {
          return o(N, (e += "")) ? N[e] : (N[e] = j(e));
        },
        keyFor: function (e) {
          if (!K(e)) throw TypeError(e + " is not a symbol!");
          for (var t in N) if (N[t] === e) return t;
        },
        useSetter: function () {
          G = !0;
        },
        useSimple: function () {
          G = !1;
        },
      }),
        a(a.S + a.F * !U, "Object", {
          create: J,
          defineProperty: q,
          defineProperties: X,
          getOwnPropertyDescriptor: Z,
          getOwnPropertyNames: Q,
          getOwnPropertySymbols: ee,
        }),
        E &&
          a(
            a.S +
              a.F *
                (!U ||
                  u(function () {
                    var e = j();
                    return (
                      "[null]" != M([e]) ||
                      "{}" != M({ a: e }) ||
                      "{}" != M(Object(e))
                    );
                  })),
            "JSON",
            {
              stringify: function (e) {
                var t,
                  n,
                  r = [e],
                  o = 1;
                while (arguments.length > o) r.push(arguments[o++]);
                if (((n = t = r[1]), (g(t) || void 0 !== e) && !K(e)))
                  return (
                    v(t) ||
                      (t = function (e, t) {
                        if (
                          ("function" == typeof n && (t = n.call(this, e, t)),
                          !K(t))
                        )
                          return t;
                      }),
                    (r[1] = t),
                    M.apply(E, r)
                  );
              },
            }
          ),
        j[D][L] || n("8ce0")(j[D], L, j[D].valueOf),
        p(j, "Symbol"),
        p(Math, "Math", !0),
        p(r.JSON, "JSON", !0);
    },
    d2d6: function (e, t, n) {
      var r = n("7633"),
        o = n("31c2"),
        i = n("d74e");
      e.exports = function (e) {
        var t = r(e),
          n = o.f;
        if (n) {
          var a,
            c = n(e),
            s = i.f,
            u = 0;
          while (c.length > u) s.call(e, (a = c[u++])) && t.push(a);
        }
        return t;
      };
    },
    d3f4: function (e, t) {
      e.exports = function (e) {
        return "object" === typeof e ? null !== e : "function" === typeof e;
      };
    },
    d4ab: function (e, t, n) {
      "use strict";
      var r = Object.prototype.toString;
      e.exports = function (e) {
        var t = r.call(e),
          n = "[object Arguments]" === t;
        return (
          n ||
            (n =
              "[object Array]" !== t &&
              null !== e &&
              "object" === typeof e &&
              "number" === typeof e.length &&
              e.length >= 0 &&
              "[object Function]" === r.call(e.callee)),
          n
        );
      };
    },
    d525: function (e, t, n) {
      "use strict";
      n.d(t, "a", function () {
        return i;
      });
      n("ac6a");
      var r = n("f5ee"),
        o = n.n(r);
      function i(e, t) {
        var n = o.a.createConsumer("wss://cable.coingecko.com/cable"),
          r = [];
        return (
          e.forEach(function (e) {
            r.push(
              n.subscriptions.create(
                { channel: "AChannel", m: e },
                {
                  received: function (e) {
                    t(e);
                  },
                }
              )
            );
          }),
          {
            unsubscribe: function () {
              r.forEach(function (e) {
                e.unsubscribe();
              });
            },
          }
        );
      }
    },
    d53b: function (e, t) {
      e.exports = function (e, t) {
        return { value: t, done: !!e };
      };
    },
    d6c7: function (e, t, n) {
      "use strict";
      var r = Object.prototype.hasOwnProperty,
        o = Object.prototype.toString,
        i = Array.prototype.slice,
        a = n("d4ab"),
        c = Object.prototype.propertyIsEnumerable,
        s = !c.call({ toString: null }, "toString"),
        u = c.call(function () {}, "prototype"),
        l = [
          "toString",
          "toLocaleString",
          "valueOf",
          "hasOwnProperty",
          "isPrototypeOf",
          "propertyIsEnumerable",
          "constructor",
        ],
        p = function (e) {
          var t = e.constructor;
          return t && t.prototype === e;
        },
        f = {
          $applicationCache: !0,
          $console: !0,
          $external: !0,
          $frame: !0,
          $frameElement: !0,
          $frames: !0,
          $innerHeight: !0,
          $innerWidth: !0,
          $outerHeight: !0,
          $outerWidth: !0,
          $pageXOffset: !0,
          $pageYOffset: !0,
          $parent: !0,
          $scrollLeft: !0,
          $scrollTop: !0,
          $scrollX: !0,
          $scrollY: !0,
          $self: !0,
          $webkitIndexedDB: !0,
          $webkitStorageInfo: !0,
          $window: !0,
        },
        d = (function () {
          if ("undefined" === typeof window) return !1;
          for (var e in window)
            try {
              if (
                !f["$" + e] &&
                r.call(window, e) &&
                null !== window[e] &&
                "object" === typeof window[e]
              )
                try {
                  p(window[e]);
                } catch (t) {
                  return !0;
                }
            } catch (t) {
              return !0;
            }
          return !1;
        })(),
        h = function (e) {
          if ("undefined" === typeof window || !d) return p(e);
          try {
            return p(e);
          } catch (t) {
            return !1;
          }
        },
        _ = function (e) {
          var t = null !== e && "object" === typeof e,
            n = "[object Function]" === o.call(e),
            i = a(e),
            c = t && "[object String]" === o.call(e),
            p = [];
          if (!t && !n && !i)
            throw new TypeError("Object.keys called on a non-object");
          var f = u && n;
          if (c && e.length > 0 && !r.call(e, 0))
            for (var d = 0; d < e.length; ++d) p.push(String(d));
          if (i && e.length > 0)
            for (var _ = 0; _ < e.length; ++_) p.push(String(_));
          else
            for (var m in e)
              (f && "prototype" === m) || !r.call(e, m) || p.push(String(m));
          if (s)
            for (var v = h(e), y = 0; y < l.length; ++y)
              (v && "constructor" === l[y]) || !r.call(e, l[y]) || p.push(l[y]);
          return p;
        };
      (_.shim = function () {
        if (Object.keys) {
          var e = (function () {
            return 2 === (Object.keys(arguments) || "").length;
          })(1, 2);
          if (!e) {
            var t = Object.keys;
            Object.keys = function (e) {
              return a(e) ? t(i.call(e)) : t(e);
            };
          }
        } else Object.keys = _;
        return Object.keys || _;
      }),
        (e.exports = _);
    },
    d74e: function (e, t) {
      t.f = {}.propertyIsEnumerable;
    },
    d782: function (e, t) {
      e.exports = function (e) {
        try {
          return !!e();
        } catch (t) {
          return !0;
        }
      };
    },
    d876: function (e, t, n) {
      var r = n("2695"),
        o = n("0029").concat("length", "prototype");
      t.f =
        Object.getOwnPropertyNames ||
        function (e) {
          return r(e, o);
        };
    },
    d8e8: function (e, t) {
      e.exports = function (e) {
        if ("function" != typeof e) throw TypeError(e + " is not a function!");
        return e;
      };
    },
    da3c: function (e, t) {
      var n = (e.exports =
        "undefined" != typeof window && window.Math == Math
          ? window
          : "undefined" != typeof self && self.Math == Math
          ? self
          : Function("return this")());
      "number" == typeof __g && (__g = n);
    },
    dcbc: function (e, t, n) {
      var r = n("2aba");
      e.exports = function (e, t, n) {
        for (var o in t) r(e, o, t[o], n);
        return e;
      };
    },
    dd04: function (e, t, n) {
      n("12fd9"),
        n("93c4"),
        n("b42c"),
        n("5b5f"),
        n("b604"),
        n("c609"),
        (e.exports = n("a7d3").Promise);
    },
    dd11: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "ì‹œê°€ì´ì•¡ ìˆœìœ„",
          mcap: "ì‹œê°€ì´ì•¡",
          "24h_volume": "24ì‹œê°„ ê±°ëž˜ëŸ‰",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "ì•”í˜¸í™”í ê°€ê²© ë¹„êµ",
          crypto_market_cap_comparison: "ì•”í˜¸í™”í ì‹œê°€ì´ì•¡ ë¹„êµ",
        },
        coin_price_static_headline_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "ê³ ê°€ (24ì‹œê°„)",
          "24h_low": "ì €ê°€ (24ì‹œê°„)",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        beam_widget: { powered_by: "Powered by %{name_start}%{name}%{name_end}" },
        coin_ticker_widget: {
          "24h_high": "ê³ ê°€ (24ì‹œê°„)",
          "24h_low": "ì €ê°€ (24ì‹œê°„)",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "ì•”í˜¸í™”í ë‚˜ë¬´ì§€ë„",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "24ì‹œê°„ ê±°ëž˜ëŸ‰",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "ê±°ëž˜ì†Œ",
          pair: "ê±°ëž˜ìŒ",
          price: "ì‹œì„¸",
          volume: "ê±°ëž˜ëŒ€ê¸ˆ",
          trust_score: "ì‹ ë¢°ì§€ìˆ˜",
          view_price_chart: "ì°¨íŠ¸ ë³´ê¸°",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    decf: function (e, t, n) {
      var r = n("0f89"),
        o = n("6f8a"),
        i = n("03ca");
      e.exports = function (e, t) {
        if ((r(e), o(t) && t.constructor === e)) return t;
        var n = i.f(e),
          a = n.resolve;
        return a(t), n.promise;
      };
    },
    df0a: function (e, t, n) {
      var r,
        o,
        i,
        a = n("bc25"),
        c = n("196c"),
        s = n("103a"),
        u = n("12fd"),
        l = n("da3c"),
        p = l.process,
        f = l.setImmediate,
        d = l.clearImmediate,
        h = l.MessageChannel,
        _ = l.Dispatch,
        m = 0,
        v = {},
        y = "onreadystatechange",
        g = function () {
          var e = +this;
          if (v.hasOwnProperty(e)) {
            var t = v[e];
            delete v[e], t();
          }
        },
        b = function (e) {
          g.call(e.data);
        };
      (f && d) ||
        ((f = function (e) {
          var t = [],
            n = 1;
          while (arguments.length > n) t.push(arguments[n++]);
          return (
            (v[++m] = function () {
              c("function" == typeof e ? e : Function(e), t);
            }),
            r(m),
            m
          );
        }),
        (d = function (e) {
          delete v[e];
        }),
        "process" == n("6e1f")(p)
          ? (r = function (e) {
              p.nextTick(a(g, e, 1));
            })
          : _ && _.now
          ? (r = function (e) {
              _.now(a(g, e, 1));
            })
          : h
          ? ((o = new h()),
            (i = o.port2),
            (o.port1.onmessage = b),
            (r = a(i.postMessage, i, 1)))
          : l.addEventListener &&
            "function" == typeof postMessage &&
            !l.importScripts
          ? ((r = function (e) {
              l.postMessage(e + "", "*");
            }),
            l.addEventListener("message", b, !1))
          : (r =
              y in u("script")
                ? function (e) {
                    s.appendChild(u("script"))[y] = function () {
                      s.removeChild(this), g.call(e);
                    };
                  }
                : function (e) {
                    setTimeout(a(g, e, 1), 0);
                  })),
        (e.exports = { set: f, clear: d });
    },
    e024: function (e, t, n) {
      (t = e.exports = n("2350")(!1)),
        t.i(n("51e3"), ""),
        t.i(n("bb01"), ""),
        t.push([
          e.i,
          ".cg-container {\n  font-family: sans-serif;\n  border: none;\n  color: #fff;\n  line-height: 1.25;\n  font-size: 12px;\n  box-sizing: border-box;\n  min-width: 250px;\n}\n\n.cg-footer {\n  background: rgba(141, 198, 71, 0.1);\n}\n",
          "",
        ]);
    },
    e11e: function (e, t) {
      e.exports =
        "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(
          ","
        );
    },
    e4a9: function (e, t, n) {
      "use strict";
      var r = n("b457"),
        o = n("d13f"),
        i = n("2312"),
        a = n("8ce0"),
        c = n("b22a"),
        s = n("5ce7"),
        u = n("c0d8"),
        l = n("ff0c"),
        p = n("1b55")("iterator"),
        f = !([].keys && "next" in [].keys()),
        d = "@@iterator",
        h = "keys",
        _ = "values",
        m = function () {
          return this;
        };
      e.exports = function (e, t, n, v, y, g, b) {
        s(n, t, v);
        var w,
          x,
          C,
          k = function (e) {
            if (!f && e in O) return O[e];
            switch (e) {
              case h:
                return function () {
                  return new n(this, e);
                };
              case _:
                return function () {
                  return new n(this, e);
                };
            }
            return function () {
              return new n(this, e);
            };
          },
          S = t + " Iterator",
          P = y == _,
          A = !1,
          O = e.prototype,
          $ = O[p] || O[d] || (y && O[y]),
          T = $ || k(y),
          j = y ? (P ? k("entries") : T) : void 0,
          E = ("Array" == t && O.entries) || $;
        if (
          (E &&
            ((C = l(E.call(new e()))),
            C !== Object.prototype &&
              C.next &&
              (u(C, S, !0), r || "function" == typeof C[p] || a(C, p, m))),
          P &&
            $ &&
            $.name !== _ &&
            ((A = !0),
            (T = function () {
              return $.call(this);
            })),
          (r && !b) || (!f && !A && O[p]) || a(O, p, T),
          (c[t] = T),
          (c[S] = m),
          y)
        )
          if (((w = { values: P ? T : k(_), keys: g ? T : k(h), entries: j }), b))
            for (x in w) x in O || i(O, x, w[x]);
          else o(o.P + o.F * (f || A), t, w);
        return w;
      };
    },
    e5fa: function (e, t) {
      e.exports = function (e) {
        if (void 0 == e) throw TypeError("Can't call method on  " + e);
        return e;
      };
    },
    e8ba: function (e, t, n) {
      (function (e, n) {
        n(t);
      })(0, function (e) {
        "use strict";
        const t = {
            BTC: "Éƒ",
            ETH: "Îž",
            USD: "$",
            CAD: "C$",
            GBP: "Â£",
            EUR: "â‚¬",
            CHF: "Fr.",
            SEK: "kr",
            JPY: "Â¥",
            CNY: "Â¥",
            INR: "â‚¹",
            RUB: "â‚½",
            AUD: "A$",
            HKD: "HK$",
            SGD: "S$",
            TWD: "NT$",
            BRL: "R$",
            KRW: "â‚©",
            ZAR: "R",
            MYR: "RM",
            IDR: "Rp",
            NZD: "NZ$",
            MXN: "MX$",
            PHP: "â‚±",
            DKK: "kr.",
            PLN: "zÅ‚",
            AED: "DH",
            ARS: "$",
            CLP: "CLP",
            CZK: "KÄ",
            HUF: "Ft",
            ILS: "â‚ª",
            KWD: "KD",
            LKR: "Rs",
            NOK: "kr",
            PKR: "â‚¨",
            SAR: "SR",
            THB: "à¸¿",
            TRY: "â‚º",
            XAU: "XAU",
            XAG: "XAG",
            XDR: "XDR",
          },
          n = {
            MYR: { location: { start: !0 }, forLocales: { en: !0 } },
            SGD: { location: { start: !0 }, forLocales: { en: !0 } },
            PHP: { location: { start: !0 }, forLocales: { en: !0 } },
            BTC: { location: { start: !0 }, forLocales: { en: !0 } },
            ETH: { location: { start: !0 }, forLocales: { en: !0 } },
          };
        function r() {
          return !(
            "object" != typeof Intl ||
            !Intl ||
            "function" != typeof Intl.NumberFormat
          );
        }
        function o(e) {
          return "BTC" === e || "ETH" === e;
        }
        function i(e) {
          return o(e) || null == t[e];
        }
        function a(e, r = "en") {
          const o = e.match(/^[A-Z]{3}\s?/);
          if (null != o) {
            const i = o[0].trim(),
              a = n[i];
            return a && a.location.start && a.forLocales[r]
              ? e.replace(o[0], t[i])
              : e;
          }
          const i = e.match(/[A-Z]{3}$/);
          if (null != i) {
            const o = i[0],
              a = n[o];
            return a && a.location.end && a.forLocales[r]
              ? e.replace(o, t[o])
              : e;
          }
          return e;
        }
        function c(e, t, n) {
          let r;
          try {
            r = new Intl.NumberFormat(t, {
              style: "currency",
              currency: e,
              currencyDisplay: "symbol",
              minimumFractionDigits: n,
              maximumFractionDigits: n,
            });
          } catch (o) {
            return s(e, t, n);
          }
          return r;
        }
        function s(e, t, n = 2) {
          return (
            (e = e.toUpperCase()),
            n > 2
              ? {
                  format: (t) => {
                    return i(e) ? `${t.toFixed(n)} ${e}` : `${e} ${t.toFixed(n)}`;
                  },
                }
              : {
                  format: (n) => {
                    return i(e)
                      ? `${n.toLocaleString(t)} ${e}`
                      : `${e} ${n.toLocaleString(t)}`;
                  },
                }
          );
        }
        function u(e, t, n) {
          const a = r(),
            u = a && (!i(e) || o(e));
          return u ? c(e, t, n) : s(e, t, n);
        }
        let l,
          p,
          f,
          d,
          h,
          _,
          m,
          v = {};
        function y() {
          v = {};
        }
        function g(e, t) {
          const n = `${e}-${t}`,
            r = v[n];
          (f = r ? r.currencyFormatterNormal : u(e, t)),
            (d = r ? r.currencyFormatterNoDecimal : u(e, t, 0)),
            (h = r ? r.currencyFormatterMedium : u(e, t, 3)),
            (_ = r ? r.currencyFormatterSmall : u(e, t, 6)),
            (m = r ? r.currencyFormatterVerySmall : u(e, t, 8)),
            null == r &&
              ((v[n] = {}),
              (v[n].currencyFormatterNormal = f),
              (v[n].currencyFormatterNoDecimal = d),
              (v[n].currencyFormatterMedium = h),
              (v[n].currencyFormatterSmall = _),
              (v[n].currencyFormatterVerySmall = m));
        }
        const b = 50,
          w = 1e3;
        function x(e, t, n = "en", r = !1) {
          if (
            ((t = t.toUpperCase()),
            (l === t && p == n) || ((l = t), (p = n), g(t, n)),
            i(t))
          ) {
            let t = parseFloat(e);
            return r
              ? 0 === e
                ? t.toFixed(2)
                : t.toPrecision(8)
              : a(
                  0 === e
                    ? f.format(e)
                    : t >= w
                    ? d.format(e)
                    : t >= b && t < w
                    ? h.format(e)
                    : t >= 1 && t < b
                    ? _.format(e)
                    : m.format(e),
                  n
                );
          }
          return r
            ? e < 0.001
              ? e.toFixed(8)
              : e < 1
              ? e.toFixed(6)
              : e.toFixed(2)
            : a(
                0 === e
                  ? f.format(e)
                  : e < 0.05
                  ? m.format(e)
                  : e < 1
                  ? _.format(e)
                  : e > 2e4
                  ? d.format(e)
                  : f.format(e),
                n
              );
        }
        (e.isCrypto = i),
          (e.clearCache = y),
          (e.formatCurrency = x),
          Object.defineProperty(e, "__esModule", { value: !0 });
      });
    },
    e9ac: function (e, t, n) {
      "use strict";
      var r,
        o,
        i,
        a,
        c = Object.getOwnPropertyDescriptor
          ? (function () {
              return Object.getOwnPropertyDescriptor(arguments, "callee").get;
            })()
          : function () {
              throw new TypeError();
            },
        s = "function" === typeof Symbol && "symbol" === typeof Symbol.iterator,
        u =
          Object.getPrototypeOf ||
          function (e) {
            return e.__proto__;
          },
        l = o ? u(o) : r,
        p = i ? i.constructor : r,
        f = a ? u(a) : r,
        d = a ? a() : r,
        h = "undefined" === typeof Uint8Array ? r : u(Uint8Array),
        _ = {
          "$ %Array%": Array,
          "$ %ArrayBuffer%": "undefined" === typeof ArrayBuffer ? r : ArrayBuffer,
          "$ %ArrayBufferPrototype%":
            "undefined" === typeof ArrayBuffer ? r : ArrayBuffer.prototype,
          "$ %ArrayIteratorPrototype%": s ? u([][Symbol.iterator]()) : r,
          "$ %ArrayPrototype%": Array.prototype,
          "$ %ArrayProto_entries%": Array.prototype.entries,
          "$ %ArrayProto_forEach%": Array.prototype.forEach,
          "$ %ArrayProto_keys%": Array.prototype.keys,
          "$ %ArrayProto_values%": Array.prototype.values,
          "$ %AsyncFromSyncIteratorPrototype%": r,
          "$ %AsyncFunction%": p,
          "$ %AsyncFunctionPrototype%": p ? p.prototype : r,
          "$ %AsyncGenerator%": a ? u(d) : r,
          "$ %AsyncGeneratorFunction%": f,
          "$ %AsyncGeneratorPrototype%": f ? f.prototype : r,
          "$ %AsyncIteratorPrototype%":
            d && s && Symbol.asyncIterator ? d[Symbol.asyncIterator]() : r,
          "$ %Atomics%": "undefined" === typeof Atomics ? r : Atomics,
          "$ %Boolean%": Boolean,
          "$ %BooleanPrototype%": Boolean.prototype,
          "$ %DataView%": "undefined" === typeof DataView ? r : DataView,
          "$ %DataViewPrototype%":
            "undefined" === typeof DataView ? r : DataView.prototype,
          "$ %Date%": Date,
          "$ %DatePrototype%": Date.prototype,
          "$ %decodeURI%": decodeURI,
          "$ %decodeURIComponent%": decodeURIComponent,
          "$ %encodeURI%": encodeURI,
          "$ %encodeURIComponent%": encodeURIComponent,
          "$ %Error%": Error,
          "$ %ErrorPrototype%": Error.prototype,
          "$ %eval%": eval,
          "$ %EvalError%": EvalError,
          "$ %EvalErrorPrototype%": EvalError.prototype,
          "$ %Float32Array%":
            "undefined" === typeof Float32Array ? r : Float32Array,
          "$ %Float32ArrayPrototype%":
            "undefined" === typeof Float32Array ? r : Float32Array.prototype,
          "$ %Float64Array%":
            "undefined" === typeof Float64Array ? r : Float64Array,
          "$ %Float64ArrayPrototype%":
            "undefined" === typeof Float64Array ? r : Float64Array.prototype,
          "$ %Function%": Function,
          "$ %FunctionPrototype%": Function.prototype,
          "$ %Generator%": o ? u(o()) : r,
          "$ %GeneratorFunction%": l,
          "$ %GeneratorPrototype%": l ? l.prototype : r,
          "$ %Int8Array%": "undefined" === typeof Int8Array ? r : Int8Array,
          "$ %Int8ArrayPrototype%":
            "undefined" === typeof Int8Array ? r : Int8Array.prototype,
          "$ %Int16Array%": "undefined" === typeof Int16Array ? r : Int16Array,
          "$ %Int16ArrayPrototype%":
            "undefined" === typeof Int16Array ? r : Int8Array.prototype,
          "$ %Int32Array%": "undefined" === typeof Int32Array ? r : Int32Array,
          "$ %Int32ArrayPrototype%":
            "undefined" === typeof Int32Array ? r : Int32Array.prototype,
          "$ %isFinite%": isFinite,
          "$ %isNaN%": isNaN,
          "$ %IteratorPrototype%": s ? u(u([][Symbol.iterator]())) : r,
          "$ %JSON%": JSON,
          "$ %JSONParse%": JSON.parse,
          "$ %Map%": "undefined" === typeof Map ? r : Map,
          "$ %MapIteratorPrototype%":
            "undefined" !== typeof Map && s ? u(new Map()[Symbol.iterator]()) : r,
          "$ %MapPrototype%": "undefined" === typeof Map ? r : Map.prototype,
          "$ %Math%": Math,
          "$ %Number%": Number,
          "$ %NumberPrototype%": Number.prototype,
          "$ %Object%": Object,
          "$ %ObjectPrototype%": Object.prototype,
          "$ %ObjProto_toString%": Object.prototype.toString,
          "$ %ObjProto_valueOf%": Object.prototype.valueOf,
          "$ %parseFloat%": parseFloat,
          "$ %parseInt%": parseInt,
          "$ %Promise%": "undefined" === typeof Promise ? r : Promise,
          "$ %PromisePrototype%":
            "undefined" === typeof Promise ? r : Promise.prototype,
          "$ %PromiseProto_then%":
            "undefined" === typeof Promise ? r : Promise.prototype.then,
          "$ %Promise_all%": "undefined" === typeof Promise ? r : Promise.all,
          "$ %Promise_reject%":
            "undefined" === typeof Promise ? r : Promise.reject,
          "$ %Promise_resolve%":
            "undefined" === typeof Promise ? r : Promise.resolve,
          "$ %Proxy%": "undefined" === typeof Proxy ? r : Proxy,
          "$ %RangeError%": RangeError,
          "$ %RangeErrorPrototype%": RangeError.prototype,
          "$ %ReferenceError%": ReferenceError,
          "$ %ReferenceErrorPrototype%": ReferenceError.prototype,
          "$ %Reflect%": "undefined" === typeof Reflect ? r : Reflect,
          "$ %RegExp%": RegExp,
          "$ %RegExpPrototype%": RegExp.prototype,
          "$ %Set%": "undefined" === typeof Set ? r : Set,
          "$ %SetIteratorPrototype%":
            "undefined" !== typeof Set && s ? u(new Set()[Symbol.iterator]()) : r,
          "$ %SetPrototype%": "undefined" === typeof Set ? r : Set.prototype,
          "$ %SharedArrayBuffer%":
            "undefined" === typeof SharedArrayBuffer ? r : SharedArrayBuffer,
          "$ %SharedArrayBufferPrototype%":
            "undefined" === typeof SharedArrayBuffer
              ? r
              : SharedArrayBuffer.prototype,
          "$ %String%": String,
          "$ %StringIteratorPrototype%": s ? u(""[Symbol.iterator]()) : r,
          "$ %StringPrototype%": String.prototype,
          "$ %Symbol%": s ? Symbol : r,
          "$ %SymbolPrototype%": s ? Symbol.prototype : r,
          "$ %SyntaxError%": SyntaxError,
          "$ %SyntaxErrorPrototype%": SyntaxError.prototype,
          "$ %ThrowTypeError%": c,
          "$ %TypedArray%": h,
          "$ %TypedArrayPrototype%": h ? h.prototype : r,
          "$ %TypeError%": TypeError,
          "$ %TypeErrorPrototype%": TypeError.prototype,
          "$ %Uint8Array%": "undefined" === typeof Uint8Array ? r : Uint8Array,
          "$ %Uint8ArrayPrototype%":
            "undefined" === typeof Uint8Array ? r : Uint8Array.prototype,
          "$ %Uint8ClampedArray%":
            "undefined" === typeof Uint8ClampedArray ? r : Uint8ClampedArray,
          "$ %Uint8ClampedArrayPrototype%":
            "undefined" === typeof Uint8ClampedArray
              ? r
              : Uint8ClampedArray.prototype,
          "$ %Uint16Array%": "undefined" === typeof Uint16Array ? r : Uint16Array,
          "$ %Uint16ArrayPrototype%":
            "undefined" === typeof Uint16Array ? r : Uint16Array.prototype,
          "$ %Uint32Array%": "undefined" === typeof Uint32Array ? r : Uint32Array,
          "$ %Uint32ArrayPrototype%":
            "undefined" === typeof Uint32Array ? r : Uint32Array.prototype,
          "$ %URIError%": URIError,
          "$ %URIErrorPrototype%": URIError.prototype,
          "$ %WeakMap%": "undefined" === typeof WeakMap ? r : WeakMap,
          "$ %WeakMapPrototype%":
            "undefined" === typeof WeakMap ? r : WeakMap.prototype,
          "$ %WeakSet%": "undefined" === typeof WeakSet ? r : WeakSet,
          "$ %WeakSetPrototype%":
            "undefined" === typeof WeakSet ? r : WeakSet.prototype,
        };
      e.exports = function (e, t) {
        if (arguments.length > 1 && "boolean" !== typeof t)
          throw new TypeError('"allowMissing" argument must be a boolean');
        var n = "$ " + e;
        if (!(n in _))
          throw new SyntaxError("intrinsic " + e + " does not exist!");
        if ("undefined" === typeof _[n] && !t)
          throw new TypeError(
            "intrinsic " +
              e +
              " exists, but is not available. Please file an issue!"
          );
        return _[n];
      };
    },
    ebd6: function (e, t, n) {
      var r = n("cb7c"),
        o = n("d8e8"),
        i = n("2b4c")("species");
      e.exports = function (e, t) {
        var n,
          a = r(e).constructor;
        return void 0 === a || void 0 == (n = r(a)[i]) ? t : o(n);
      };
    },
    edd4: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "Market Cap Rank",
          mcap: "Market Cap",
          "24h_volume": "24H Volume",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "Crypto Price Comparison",
          crypto_market_cap_comparison: "Crypto Market Cap Comparison",
        },
        coin_price_static_headline_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "24H High",
          "24h_low": "24H Low",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        beam_widget: { powered_by: "Powered by %{name_start}%{name}%{name_end}" },
        coin_ticker_widget: {
          "24h_high": "24H High",
          "24h_low": "24H Low",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "Cryptocurrencies Tree Map",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
          available_coins: "Available Coins",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "24h Volume",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "Exchange",
          pair: "Pair",
          price: "Price",
          volume: "Volume",
          trust_score: "Trust Score",
          view_price_chart: "View Price Chart",
          powered_by: "Powered by %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    f159: function (e, t, n) {
      var r = n("7d8a"),
        o = n("1b55")("iterator"),
        i = n("b22a");
      e.exports = n("a7d3").getIteratorMethod = function (e) {
        if (void 0 != e) return e[o] || e["@@iterator"] || i[r(e)];
      };
    },
    f2fe: function (e, t) {
      e.exports = function (e) {
        if ("function" != typeof e) throw TypeError(e + " is not a function!");
        return e;
      };
    },
    f367: function (e, t, n) {
      "use strict";
      var r = n("d6c7"),
        o = "function" === typeof Symbol && "symbol" === typeof Symbol("foo"),
        i = Object.prototype.toString,
        a = Array.prototype.concat,
        c = Object.defineProperty,
        s = function (e) {
          return "function" === typeof e && "[object Function]" === i.call(e);
        },
        u = function () {
          var e = {};
          try {
            for (var t in (c(e, "x", { enumerable: !1, value: e }), e)) return !1;
            return e.x === e;
          } catch (n) {
            return !1;
          }
        },
        l = c && u(),
        p = function (e, t, n, r) {
          (!(t in e) || (s(r) && r())) &&
            (l
              ? c(e, t, {
                  configurable: !0,
                  enumerable: !1,
                  value: n,
                  writable: !0,
                })
              : (e[t] = n));
        },
        f = function (e, t) {
          var n = arguments.length > 2 ? arguments[2] : {},
            i = r(t);
          o && (i = a.call(i, Object.getOwnPropertySymbols(t)));
          for (var c = 0; c < i.length; c += 1) p(e, i[c], t[i[c]], n[i[c]]);
        };
      (f.supportsDescriptors = !!l), (e.exports = f);
    },
    f46a: function (e, t, n) {
      var r = n("d13f"),
        o = n("11ff");
      r(r.S + r.F * (Number.parseFloat != o), "Number", { parseFloat: o });
    },
    f568: function (e, t, n) {
      var r = n("3adc"),
        o = n("0f89"),
        i = n("7633");
      e.exports = n("7d95")
        ? Object.defineProperties
        : function (e, t) {
            o(e);
            var n,
              a = i(t),
              c = a.length,
              s = 0;
            while (c > s) r.f(e, (n = a[s++]), t[n]);
            return e;
          };
    },
    f5ee: function (e, t, n) {
      var r, o;
      (function () {
        var i = this;
        (function () {
          (function () {
            var e = [].slice;
            this.ActionCable = {
              INTERNAL: {
                message_types: {
                  welcome: "welcome",
                  ping: "ping",
                  confirmation: "confirm_subscription",
                  rejection: "reject_subscription",
                },
                default_mount_path: "/cable",
                protocols: ["actioncable-v1-json", "actioncable-unsupported"],
              },
              WebSocket: window.WebSocket,
              logger: window.console,
              createConsumer: function (e) {
                var t;
                return (
                  null == e &&
                    (e =
                      null != (t = this.getConfig("url"))
                        ? t
                        : this.INTERNAL.default_mount_path),
                  new a.Consumer(this.createWebSocketURL(e))
                );
              },
              getConfig: function (e) {
                var t;
                return (
                  (t = document.head.querySelector(
                    "meta[name='action-cable-" + e + "']"
                  )),
                  null != t ? t.getAttribute("content") : void 0
                );
              },
              createWebSocketURL: function (e) {
                var t;
                return e && !/^wss?:/i.test(e)
                  ? ((t = document.createElement("a")),
                    (t.href = e),
                    (t.href = t.href),
                    (t.protocol = t.protocol.replace("http", "ws")),
                    t.href)
                  : e;
              },
              startDebugging: function () {
                return (this.debugging = !0);
              },
              stopDebugging: function () {
                return (this.debugging = null);
              },
              log: function () {
                var t, n;
                if (
                  ((t = 1 <= arguments.length ? e.call(arguments, 0) : []),
                  this.debugging)
                )
                  return (
                    t.push(Date.now()),
                    (n = this.logger).log.apply(
                      n,
                      ["[ActionCable]"].concat(e.call(t))
                    )
                  );
              },
            };
          }.call(this));
        }.call(i));
        var a = i.ActionCable;
        (function () {
          (function () {
            var e = function (e, t) {
              return function () {
                return e.apply(t, arguments);
              };
            };
            a.ConnectionMonitor = (function () {
              var t, n, r;
              function o(t) {
                (this.connection = t),
                  (this.visibilityDidChange = e(this.visibilityDidChange, this)),
                  (this.reconnectAttempts = 0);
              }
              return (
                (o.pollInterval = { min: 3, max: 30 }),
                (o.staleThreshold = 6),
                (o.prototype.start = function () {
                  if (!this.isRunning())
                    return (
                      (this.startedAt = n()),
                      delete this.stoppedAt,
                      this.startPolling(),
                      document.addEventListener(
                        "visibilitychange",
                        this.visibilityDidChange
                      ),
                      a.log(
                        "ConnectionMonitor started. pollInterval = " +
                          this.getPollInterval() +
                          " ms"
                      )
                    );
                }),
                (o.prototype.stop = function () {
                  if (this.isRunning())
                    return (
                      (this.stoppedAt = n()),
                      this.stopPolling(),
                      document.removeEventListener(
                        "visibilitychange",
                        this.visibilityDidChange
                      ),
                      a.log("ConnectionMonitor stopped")
                    );
                }),
                (o.prototype.isRunning = function () {
                  return null != this.startedAt && null == this.stoppedAt;
                }),
                (o.prototype.recordPing = function () {
                  return (this.pingedAt = n());
                }),
                (o.prototype.recordConnect = function () {
                  return (
                    (this.reconnectAttempts = 0),
                    this.recordPing(),
                    delete this.disconnectedAt,
                    a.log("ConnectionMonitor recorded connect")
                  );
                }),
                (o.prototype.recordDisconnect = function () {
                  return (
                    (this.disconnectedAt = n()),
                    a.log("ConnectionMonitor recorded disconnect")
                  );
                }),
                (o.prototype.startPolling = function () {
                  return this.stopPolling(), this.poll();
                }),
                (o.prototype.stopPolling = function () {
                  return clearTimeout(this.pollTimeout);
                }),
                (o.prototype.poll = function () {
                  return (this.pollTimeout = setTimeout(
                    (function (e) {
                      return function () {
                        return e.reconnectIfStale(), e.poll();
                      };
                    })(this),
                    this.getPollInterval()
                  ));
                }),
                (o.prototype.getPollInterval = function () {
                  var e, n, r, o;
                  return (
                    (o = this.constructor.pollInterval),
                    (r = o.min),
                    (n = o.max),
                    (e = 5 * Math.log(this.reconnectAttempts + 1)),
                    Math.round(1e3 * t(e, r, n))
                  );
                }),
                (o.prototype.reconnectIfStale = function () {
                  if (this.connectionIsStale())
                    return (
                      a.log(
                        "ConnectionMonitor detected stale connection. reconnectAttempts = " +
                          this.reconnectAttempts +
                          ", pollInterval = " +
                          this.getPollInterval() +
                          " ms, time disconnected = " +
                          r(this.disconnectedAt) +
                          " s, stale threshold = " +
                          this.constructor.staleThreshold +
                          " s"
                      ),
                      this.reconnectAttempts++,
                      this.disconnectedRecently()
                        ? a.log(
                            "ConnectionMonitor skipping reopening recent disconnect"
                          )
                        : (a.log("ConnectionMonitor reopening"),
                          this.connection.reopen())
                    );
                }),
                (o.prototype.connectionIsStale = function () {
                  var e;
                  return (
                    r(null != (e = this.pingedAt) ? e : this.startedAt) >
                    this.constructor.staleThreshold
                  );
                }),
                (o.prototype.disconnectedRecently = function () {
                  return (
                    this.disconnectedAt &&
                    r(this.disconnectedAt) < this.constructor.staleThreshold
                  );
                }),
                (o.prototype.visibilityDidChange = function () {
                  if ("visible" === document.visibilityState)
                    return setTimeout(
                      (function (e) {
                        return function () {
                          if (e.connectionIsStale() || !e.connection.isOpen())
                            return (
                              a.log(
                                "ConnectionMonitor reopening stale connection on visibilitychange. visbilityState = " +
                                  document.visibilityState
                              ),
                              e.connection.reopen()
                            );
                        };
                      })(this),
                      200
                    );
                }),
                (n = function () {
                  return new Date().getTime();
                }),
                (r = function (e) {
                  return (n() - e) / 1e3;
                }),
                (t = function (e, t, n) {
                  return Math.max(t, Math.min(n, e));
                }),
                o
              );
            })();
          }.call(this),
            function () {
              var e,
                t,
                n,
                r,
                o,
                i = [].slice,
                c = function (e, t) {
                  return function () {
                    return e.apply(t, arguments);
                  };
                },
                s =
                  [].indexOf ||
                  function (e) {
                    for (var t = 0, n = this.length; t < n; t++)
                      if (t in this && this[t] === e) return t;
                    return -1;
                  };
              (r = a.INTERNAL),
                (t = r.message_types),
                (n = r.protocols),
                (o =
                  2 <= n.length
                    ? i.call(n, 0, (e = n.length - 1))
                    : ((e = 0), [])),
                n[e++],
                (a.Connection = (function () {
                  function e(e) {
                    (this.consumer = e),
                      (this.open = c(this.open, this)),
                      (this.subscriptions = this.consumer.subscriptions),
                      (this.monitor = new a.ConnectionMonitor(this)),
                      (this.disconnected = !0);
                  }
                  return (
                    (e.reopenDelay = 500),
                    (e.prototype.send = function (e) {
                      return (
                        !!this.isOpen() &&
                        (this.webSocket.send(JSON.stringify(e)), !0)
                      );
                    }),
                    (e.prototype.open = function () {
                      return this.isActive()
                        ? (a.log(
                            "Attempted to open WebSocket, but existing socket is " +
                              this.getState()
                          ),
                          !1)
                        : (a.log(
                            "Opening WebSocket, current state is " +
                              this.getState() +
                              ", subprotocols: " +
                              n
                          ),
                          null != this.webSocket && this.uninstallEventHandlers(),
                          (this.webSocket = new a.WebSocket(
                            this.consumer.url,
                            n
                          )),
                          this.installEventHandlers(),
                          this.monitor.start(),
                          !0);
                    }),
                    (e.prototype.close = function (e) {
                      var t, n;
                      if (
                        ((t = (null != e ? e : { allowReconnect: !0 })
                          .allowReconnect),
                        t || this.monitor.stop(),
                        this.isActive())
                      )
                        return null != (n = this.webSocket) ? n.close() : void 0;
                    }),
                    (e.prototype.reopen = function () {
                      var e;
                      if (
                        (a.log(
                          "Reopening WebSocket, current state is " +
                            this.getState()
                        ),
                        !this.isActive())
                      )
                        return this.open();
                      try {
                        return this.close();
                      } catch (t) {
                        return (e = t), a.log("Failed to reopen WebSocket", e);
                      } finally {
                        a.log(
                          "Reopening WebSocket in " +
                            this.constructor.reopenDelay +
                            "ms"
                        ),
                          setTimeout(this.open, this.constructor.reopenDelay);
                      }
                    }),
                    (e.prototype.getProtocol = function () {
                      var e;
                      return null != (e = this.webSocket) ? e.protocol : void 0;
                    }),
                    (e.prototype.isOpen = function () {
                      return this.isState("open");
                    }),
                    (e.prototype.isActive = function () {
                      return this.isState("open", "connecting");
                    }),
                    (e.prototype.isProtocolSupported = function () {
                      var e;
                      return (e = this.getProtocol()), s.call(o, e) >= 0;
                    }),
                    (e.prototype.isState = function () {
                      var e, t;
                      return (
                        (t = 1 <= arguments.length ? i.call(arguments, 0) : []),
                        (e = this.getState()),
                        s.call(t, e) >= 0
                      );
                    }),
                    (e.prototype.getState = function () {
                      var e, t, n;
                      for (t in WebSocket)
                        if (
                          ((n = WebSocket[t]),
                          n ===
                            (null != (e = this.webSocket)
                              ? e.readyState
                              : void 0))
                        )
                          return t.toLowerCase();
                      return null;
                    }),
                    (e.prototype.installEventHandlers = function () {
                      var e, t;
                      for (e in this.events)
                        (t = this.events[e].bind(this)),
                          (this.webSocket["on" + e] = t);
                    }),
                    (e.prototype.uninstallEventHandlers = function () {
                      var e;
                      for (e in this.events)
                        this.webSocket["on" + e] = function () {};
                    }),
                    (e.prototype.events = {
                      message: function (e) {
                        var n, r, o, i;
                        if (this.isProtocolSupported())
                          switch (
                            ((o = JSON.parse(e.data)),
                            (n = o.identifier),
                            (r = o.message),
                            (i = o.type),
                            i)
                          ) {
                            case t.welcome:
                              return (
                                this.monitor.recordConnect(),
                                this.subscriptions.reload()
                              );
                            case t.ping:
                              return this.monitor.recordPing();
                            case t.confirmation:
                              return this.subscriptions.notify(n, "connected");
                            case t.rejection:
                              return this.subscriptions.reject(n);
                            default:
                              return this.subscriptions.notify(n, "received", r);
                          }
                      },
                      open: function () {
                        if (
                          (a.log(
                            "WebSocket onopen event, using '" +
                              this.getProtocol() +
                              "' subprotocol"
                          ),
                          (this.disconnected = !1),
                          !this.isProtocolSupported())
                        )
                          return (
                            a.log(
                              "Protocol is unsupported. Stopping monitor and disconnecting."
                            ),
                            this.close({ allowReconnect: !1 })
                          );
                      },
                      close: function (e) {
                        if (
                          (a.log("WebSocket onclose event"), !this.disconnected)
                        )
                          return (
                            (this.disconnected = !0),
                            this.monitor.recordDisconnect(),
                            this.subscriptions.notifyAll("disconnected", {
                              willAttemptReconnect: this.monitor.isRunning(),
                            })
                          );
                      },
                      error: function () {
                        return a.log("WebSocket onerror event");
                      },
                    }),
                    e
                  );
                })());
            }.call(this),
            function () {
              var e = [].slice;
              a.Subscriptions = (function () {
                function t(e) {
                  (this.consumer = e), (this.subscriptions = []);
                }
                return (
                  (t.prototype.create = function (e, t) {
                    var n, r, o;
                    return (
                      (n = e),
                      (r = "object" === typeof n ? n : { channel: n }),
                      (o = new a.Subscription(this.consumer, r, t)),
                      this.add(o)
                    );
                  }),
                  (t.prototype.add = function (e) {
                    return (
                      this.subscriptions.push(e),
                      this.consumer.ensureActiveConnection(),
                      this.notify(e, "initialized"),
                      this.sendCommand(e, "subscribe"),
                      e
                    );
                  }),
                  (t.prototype.remove = function (e) {
                    return (
                      this.forget(e),
                      this.findAll(e.identifier).length ||
                        this.sendCommand(e, "unsubscribe"),
                      e
                    );
                  }),
                  (t.prototype.reject = function (e) {
                    var t, n, r, o, i;
                    for (
                      r = this.findAll(e), o = [], t = 0, n = r.length;
                      t < n;
                      t++
                    )
                      (i = r[t]),
                        this.forget(i),
                        this.notify(i, "rejected"),
                        o.push(i);
                    return o;
                  }),
                  (t.prototype.forget = function (e) {
                    var t;
                    return (
                      (this.subscriptions = function () {
                        var n, r, o, i;
                        for (
                          o = this.subscriptions, i = [], n = 0, r = o.length;
                          n < r;
                          n++
                        )
                          (t = o[n]), t !== e && i.push(t);
                        return i;
                      }.call(this)),
                      e
                    );
                  }),
                  (t.prototype.findAll = function (e) {
                    var t, n, r, o, i;
                    for (
                      r = this.subscriptions, o = [], t = 0, n = r.length;
                      t < n;
                      t++
                    )
                      (i = r[t]), i.identifier === e && o.push(i);
                    return o;
                  }),
                  (t.prototype.reload = function () {
                    var e, t, n, r, o;
                    for (
                      n = this.subscriptions, r = [], e = 0, t = n.length;
                      e < t;
                      e++
                    )
                      (o = n[e]), r.push(this.sendCommand(o, "subscribe"));
                    return r;
                  }),
                  (t.prototype.notifyAll = function () {
                    var t, n, r, o, i, a, c;
                    for (
                      n = arguments[0],
                        t = 2 <= arguments.length ? e.call(arguments, 1) : [],
                        i = this.subscriptions,
                        a = [],
                        r = 0,
                        o = i.length;
                      r < o;
                      r++
                    )
                      (c = i[r]),
                        a.push(this.notify.apply(this, [c, n].concat(e.call(t))));
                    return a;
                  }),
                  (t.prototype.notify = function () {
                    var t, n, r, o, i, a, c;
                    for (
                      a = arguments[0],
                        n = arguments[1],
                        t = 3 <= arguments.length ? e.call(arguments, 2) : [],
                        c = "string" === typeof a ? this.findAll(a) : [a],
                        i = [],
                        r = 0,
                        o = c.length;
                      r < o;
                      r++
                    )
                      (a = c[r]),
                        i.push(
                          "function" === typeof a[n] ? a[n].apply(a, t) : void 0
                        );
                    return i;
                  }),
                  (t.prototype.sendCommand = function (e, t) {
                    var n;
                    return (
                      (n = e.identifier),
                      this.consumer.send({ command: t, identifier: n })
                    );
                  }),
                  t
                );
              })();
            }.call(this),
            function () {
              a.Subscription = (function () {
                var e;
                function t(t, n, r) {
                  (this.consumer = t),
                    null == n && (n = {}),
                    (this.identifier = JSON.stringify(n)),
                    e(this, r);
                }
                return (
                  (t.prototype.perform = function (e, t) {
                    return null == t && (t = {}), (t.action = e), this.send(t);
                  }),
                  (t.prototype.send = function (e) {
                    return this.consumer.send({
                      command: "message",
                      identifier: this.identifier,
                      data: JSON.stringify(e),
                    });
                  }),
                  (t.prototype.unsubscribe = function () {
                    return this.consumer.subscriptions.remove(this);
                  }),
                  (e = function (e, t) {
                    var n, r;
                    if (null != t) for (n in t) (r = t[n]), (e[n] = r);
                    return e;
                  }),
                  t
                );
              })();
            }.call(this),
            function () {
              a.Consumer = (function () {
                function e(e) {
                  (this.url = e),
                    (this.subscriptions = new a.Subscriptions(this)),
                    (this.connection = new a.Connection(this));
                }
                return (
                  (e.prototype.send = function (e) {
                    return this.connection.send(e);
                  }),
                  (e.prototype.connect = function () {
                    return this.connection.open();
                  }),
                  (e.prototype.disconnect = function () {
                    return this.connection.close({ allowReconnect: !1 });
                  }),
                  (e.prototype.ensureActiveConnection = function () {
                    if (!this.connection.isActive())
                      return this.connection.open();
                  }),
                  e
                );
              })();
            }.call(this));
        }.call(this),
          e.exports
            ? (e.exports = a)
            : ((r = a),
              (o = "function" === typeof r ? r.call(t, n, t, e) : r),
              void 0 === o || (e.exports = o)));
      }.call(this));
    },
    f605: function (e, t) {
      e.exports = function (e, t, n, r) {
        if (!(e instanceof t) || (void 0 !== r && r in e))
          throw TypeError(n + ": incorrect invocation!");
        return e;
      };
    },
    f693: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "Classement",
          mcap: "Capitalisation du marchÃ©",
          "24h_volume": "Volume (24h)",
          "24h_high_low": "Haut/Bas sur 24h",
        },
        coin_compare_chart_widget: {
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
          crypto_price_comparison: "Comparaison des cours de crypto",
          crypto_market_cap_comparison:
            "Comparaison des capitalisations de marchÃ© de crypto",
        },
        coin_price_static_headline_widget: {
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
        },
        coin_price_chart_widget: {
          "24h_high": "Haut sur 24h",
          "24h_low": "Bas sur 24h",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
        },
        coin_price_marquee_widget: {
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
        },
        coin_list_widget: {
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
        },
        beam_widget: { powered_by: "Fourni par %{name_start}%{name}%{name_end}" },
        coin_ticker_widget: {
          "24h_high": "Haut sur 24h",
          "24h_low": "Bas sur 24h",
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
        },
        coin_heatmap_widget: {
          title: "Diagramme des crypto-monnaies",
          subtitle: "(%{top} plus grosse capitalisations)",
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
        },
        random_coin_widget: {
          disclaimer:
            "Clause de non responsabilitÃ© : Cet outil ne sert qu'Ã  des fins de divertissement et ne constitue pas de conseils financiers",
          spin: "Tourner",
          available_coins: "Cryptos disponibles",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "Volume sur 24Â h",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "Plate-forme d'Ã©change",
          pair: "Paire",
          price: "Cours",
          volume: "Volume",
          trust_score: "Score de confiance",
          view_price_chart: "Voir le graphique des cours",
          powered_by: "Fourni par %{name_start}%{name}%{name_end}",
          view_all: "View all %{coin} markets",
        },
      };
    },
    f845: function (e, t) {
      e.exports = function (e, t) {
        return {
          enumerable: !(1 & e),
          configurable: !(2 & e),
          writable: !(4 & e),
          value: t,
        };
      };
    },
    fa4e: function (e, t, n) {
      "use strict";
      var r = !1,
        o = function () {};
      if (r) {
        var i = function (e, t) {
          var n = arguments.length;
          t = new Array(n > 2 ? n - 2 : 0);
          for (var r = 2; r < n; r++) t[r - 2] = arguments[r];
          var o = 0,
            i =
              "Warning: " +
              e.replace(/%s/g, function () {
                return t[o++];
              });
          "undefined" !== typeof console && console.error(i);
          try {
            throw new Error(i);
          } catch (a) {}
        };
        o = function (e, t, n) {
          var r = arguments.length;
          n = new Array(r > 2 ? r - 2 : 0);
          for (var o = 2; o < r; o++) n[o - 2] = arguments[o];
          if (void 0 === t)
            throw new Error(
              "`warning(condition, format, ...args)` requires a warning message argument"
            );
          e || i.apply(null, [t].concat(n));
        };
      }
      e.exports = o;
    },
    fa54: function (e, t, n) {
      "use strict";
      var r = n("b3e7"),
        o = n("245b"),
        i = n("b22a"),
        a = n("6a9b");
      (e.exports = n("e4a9")(
        Array,
        "Array",
        function (e, t) {
          (this._t = a(e)), (this._i = 0), (this._k = t);
        },
        function () {
          var e = this._t,
            t = this._k,
            n = this._i++;
          return !e || n >= e.length
            ? ((this._t = void 0), o(1))
            : o(0, "keys" == t ? n : "values" == t ? e[n] : [n, e[n]]);
        },
        "values"
      )),
        (i.Arguments = i.Array),
        r("keys"),
        r("values"),
        r("entries");
    },
    fa5b: function (e, t, n) {
      e.exports = n("5537")("native-function-to-string", Function.toString);
    },
    fab2: function (e, t, n) {
      var r = n("7726").document;
      e.exports = r && r.documentElement;
    },
    fda1: function (e, t, n) {
      t.f = n("1b55");
    },
    fdef: function (e, t) {
      e.exports =
        "\t\n\v\f\r Â áš€á Žâ€€â€â€‚â€ƒâ€„â€…â€†â€‡â€ˆâ€‰â€Šâ€¯âŸã€€\u2028\u2029\ufeff";
    },
    ff0c: function (e, t, n) {
      var r = n("43c8"),
        o = n("0185"),
        i = n("5d8f")("IE_PROTO"),
        a = Object.prototype;
      e.exports =
        Object.getPrototypeOf ||
        function (e) {
          return (
            (e = o(e)),
            r(e, i)
              ? e[i]
              : "function" == typeof e.constructor && e instanceof e.constructor
              ? e.constructor.prototype
              : e instanceof Object
              ? a
              : null
          );
        };
    },
    ffeb: function (e) {
      e.exports = {
        coin_details: {
          mcap_rank: "Piyasa DeÄŸeri SÄ±ralamasÄ±",
          mcap: "Piyasa DeÄŸeri",
          "24h_volume": "24 Saatlik Hacim",
          "24h_high_low": "24H High/Low",
        },
        coin_compare_chart_widget: {
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
          crypto_price_comparison: "Kripto Fiyat KarÅŸÄ±laÅŸtÄ±rmasÄ±",
          crypto_market_cap_comparison:
            "Kripto Piyasa DeÄŸeri KarÅŸÄ±laÅŸtÄ±rmasÄ±",
        },
        coin_price_static_headline_widget: {
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
        },
        coin_price_chart_widget: {
          "24h_high": "24S YÃ¼ksek",
          "24h_low": "24S DÃ¼ÅŸÃ¼k",
          view_price_chart: "View %{coin} Price Chart",
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
        },
        coin_price_marquee_widget: {
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
        },
        coin_list_widget: {
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
        },
        beam_widget: {
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
        },
        coin_ticker_widget: {
          "24h_high": "24S YÃ¼ksek",
          "24h_low": "24S DÃ¼ÅŸÃ¼k",
          view_price_chart: "View %{coin} Price Chart",
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
        },
        coin_converter_widget: {
          view_price_chart: "View %{coin} Price Chart",
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
        },
        coin_heatmap_widget: {
          title: "Kripto Para AÄŸacÄ± HaritasÄ±",
          subtitle: "(Top %{top} by Market Cap)",
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
        },
        random_coin_widget: {
          disclaimer:
            "Disclaimer: This tools serve as an entertainment and does not constitute financial advice.",
          spin: "Spin",
        },
        coin_daily_price_widget: {
          title: "CoinGecko Price Update",
          total_mcap: "Total M cap",
          "24h_vol": "24 Saatlik Hacim",
          dom: "Dom",
        },
        coin_market_ticker_list_widget: {
          exchange: "Borsa",
          pair: "Ã‡ift",
          price: "Fiyat",
          volume: "Hacim",
          trust_score: "GÃ¼ven PuanÄ±",
          view_price_chart: "Fiyat Tablosunu GÃ¶r",
          powered_by:
            "%{name_start}%{name}%{name_end} tarafÄ±ndan desteklenmektedir",
          view_all: "View all %{coin} markets",
        },
      };
    },
  });
  
// Externals
/*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
!(function (e, t) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports
        ? (module.exports = e.document
              ? t(e, !0)
              : function (e) {
                    if (!e.document) throw new Error("jQuery requires a window with a document");
                    return t(e);
                })
        : t(e);
})("undefined" != typeof window ? window : this, function (e, t) {
    "use strict";
    var n = [],
        r = e.document,
        i = Object.getPrototypeOf,
        o = n.slice,
        a = n.concat,
        s = n.push,
        u = n.indexOf,
        l = {},
        c = l.toString,
        f = l.hasOwnProperty,
        p = f.toString,
        d = p.call(Object),
        h = {},
        g = function e(t) {
            return "function" == typeof t && "number" != typeof t.nodeType;
        },
        y = function e(t) {
            return null != t && t === t.window;
        },
        v = { type: !0, src: !0, noModule: !0 };
    function m(e, t, n) {
        var i,
            o = (t = t || r).createElement("script");
        if (((o.text = e), n)) for (i in v) n[i] && (o[i] = n[i]);
        t.head.appendChild(o).parentNode.removeChild(o);
    }
    function x(e) {
        return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[c.call(e)] || "object" : typeof e;
    }
    var b = "3.3.1",
        w = function (e, t) {
            return new w.fn.init(e, t);
        },
        T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
    (w.fn = w.prototype = {
        jquery: "3.3.1",
        constructor: w,
        length: 0,
        toArray: function () {
            return o.call(this);
        },
        get: function (e) {
            return null == e ? o.call(this) : e < 0 ? this[e + this.length] : this[e];
        },
        pushStack: function (e) {
            var t = w.merge(this.constructor(), e);
            return (t.prevObject = this), t;
        },
        each: function (e) {
            return w.each(this, e);
        },
        map: function (e) {
            return this.pushStack(
                w.map(this, function (t, n) {
                    return e.call(t, n, t);
                })
            );
        },
        slice: function () {
            return this.pushStack(o.apply(this, arguments));
        },
        first: function () {
            return this.eq(0);
        },
        last: function () {
            return this.eq(-1);
        },
        eq: function (e) {
            var t = this.length,
                n = +e + (e < 0 ? t : 0);
            return this.pushStack(n >= 0 && n < t ? [this[n]] : []);
        },
        end: function () {
            return this.prevObject || this.constructor();
        },
        push: s,
        sort: n.sort,
        splice: n.splice,
    }),
        (w.extend = w.fn.extend = function () {
            var e,
                t,
                n,
                r,
                i,
                o,
                a = arguments[0] || {},
                s = 1,
                u = arguments.length,
                l = !1;
            for ("boolean" == typeof a && ((l = a), (a = arguments[s] || {}), s++), "object" == typeof a || g(a) || (a = {}), s === u && ((a = this), s--); s < u; s++)
                if (null != (e = arguments[s]))
                    for (t in e)
                        (n = a[t]),
                            a !== (r = e[t]) &&
                                (l && r && (w.isPlainObject(r) || (i = Array.isArray(r)))
                                    ? (i ? ((i = !1), (o = n && Array.isArray(n) ? n : [])) : (o = n && w.isPlainObject(n) ? n : {}), (a[t] = w.extend(l, o, r)))
                                    : void 0 !== r && (a[t] = r));
            return a;
        }),
        w.extend({
            expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""),
            isReady: !0,
            error: function (e) {
                throw new Error(e);
            },
            noop: function () {},
            isPlainObject: function (e) {
                var t, n;
                return !(!e || "[object Object]" !== c.call(e)) && (!(t = i(e)) || ("function" == typeof (n = f.call(t, "constructor") && t.constructor) && p.call(n) === d));
            },
            isEmptyObject: function (e) {
                var t;
                for (t in e) return !1;
                return !0;
            },
            globalEval: function (e) {
                m(e);
            },
            each: function (e, t) {
                var n,
                    r = 0;
                if (C(e)) {
                    for (n = e.length; r < n; r++) if (!1 === t.call(e[r], r, e[r])) break;
                } else for (r in e) if (!1 === t.call(e[r], r, e[r])) break;
                return e;
            },
            trim: function (e) {
                return null == e ? "" : (e + "").replace(T, "");
            },
            makeArray: function (e, t) {
                var n = t || [];
                return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : s.call(n, e)), n;
            },
            inArray: function (e, t, n) {
                return null == t ? -1 : u.call(t, e, n);
            },
            merge: function (e, t) {
                for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
                return (e.length = i), e;
            },
            grep: function (e, t, n) {
                for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++) (r = !t(e[o], o)) !== s && i.push(e[o]);
                return i;
            },
            map: function (e, t, n) {
                var r,
                    i,
                    o = 0,
                    s = [];
                if (C(e)) for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && s.push(i);
                else for (o in e) null != (i = t(e[o], o, n)) && s.push(i);
                return a.apply([], s);
            },
            guid: 1,
            support: h,
        }),
        "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]),
        w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
            l["[object " + t + "]"] = t.toLowerCase();
        });
    function C(e) {
        var t = !!e && "length" in e && e.length,
            n = x(e);
        return !g(e) && !y(e) && ("array" === n || 0 === t || ("number" == typeof t && t > 0 && t - 1 in e));
    }
    var E = (function (e) {
        var t,
            n,
            r,
            i,
            o,
            a,
            s,
            u,
            l,
            c,
            f,
            p,
            d,
            h,
            g,
            y,
            v,
            m,
            x,
            b = "sizzle" + 1 * new Date(),
            w = e.document,
            T = 0,
            C = 0,
            E = ae(),
            k = ae(),
            S = ae(),
            D = function (e, t) {
                return e === t && (f = !0), 0;
            },
            N = {}.hasOwnProperty,
            A = [],
            j = A.pop,
            q = A.push,
            L = A.push,
            H = A.slice,
            O = function (e, t) {
                for (var n = 0, r = e.length; n < r; n++) if (e[n] === t) return n;
                return -1;
            },
            P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            M = "[\\x20\\t\\r\\n\\f]",
            R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
            I = "\\[" + M + "*(" + R + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + M + "*\\]",
            W = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + I + ")*)|.*)\\)|)",
            $ = new RegExp(M + "+", "g"),
            B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
            F = new RegExp("^" + M + "*," + M + "*"),
            _ = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
            z = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"),
            X = new RegExp(W),
            U = new RegExp("^" + R + "$"),
            V = {
                ID: new RegExp("^#(" + R + ")"),
                CLASS: new RegExp("^\\.(" + R + ")"),
                TAG: new RegExp("^(" + R + "|[*])"),
                ATTR: new RegExp("^" + I),
                PSEUDO: new RegExp("^" + W),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + P + ")$", "i"),
                needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i"),
            },
            G = /^(?:input|select|textarea|button)$/i,
            Y = /^h\d$/i,
            Q = /^[^{]+\{\s*\[native \w/,
            J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            K = /[+~]/,
            Z = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"),
            ee = function (e, t, n) {
                var r = "0x" + t - 65536;
                return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode((r >> 10) | 55296, (1023 & r) | 56320);
            },
            te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            ne = function (e, t) {
                return t ? ("\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " ") : "\\" + e;
            },
            re = function () {
                p();
            },
            ie = me(
                function (e) {
                    return !0 === e.disabled && ("form" in e || "label" in e);
                },
                { dir: "parentNode", next: "legend" }
            );
        try {
            L.apply((A = H.call(w.childNodes)), w.childNodes), A[w.childNodes.length].nodeType;
        } catch (e) {
            L = {
                apply: A.length
                    ? function (e, t) {
                          q.apply(e, H.call(t));
                      }
                    : function (e, t) {
                          var n = e.length,
                              r = 0;
                          while ((e[n++] = t[r++]));
                          e.length = n - 1;
                      },
            };
        }
        function oe(e, t, r, i) {
            var o,
                s,
                l,
                c,
                f,
                h,
                v,
                m = t && t.ownerDocument,
                T = t ? t.nodeType : 9;
            if (((r = r || []), "string" != typeof e || !e || (1 !== T && 9 !== T && 11 !== T))) return r;
            if (!i && ((t ? t.ownerDocument || t : w) !== d && p(t), (t = t || d), g)) {
                if (11 !== T && (f = J.exec(e)))
                    if ((o = f[1])) {
                        if (9 === T) {
                            if (!(l = t.getElementById(o))) return r;
                            if (l.id === o) return r.push(l), r;
                        } else if (m && (l = m.getElementById(o)) && x(t, l) && l.id === o) return r.push(l), r;
                    } else {
                        if (f[2]) return L.apply(r, t.getElementsByTagName(e)), r;
                        if ((o = f[3]) && n.getElementsByClassName && t.getElementsByClassName) return L.apply(r, t.getElementsByClassName(o)), r;
                    }
                if (n.qsa && !S[e + " "] && (!y || !y.test(e))) {
                    if (1 !== T) (m = t), (v = e);
                    else if ("object" !== t.nodeName.toLowerCase()) {
                        (c = t.getAttribute("id")) ? (c = c.replace(te, ne)) : t.setAttribute("id", (c = b)), (s = (h = a(e)).length);
                        while (s--) h[s] = "#" + c + " " + ve(h[s]);
                        (v = h.join(",")), (m = (K.test(e) && ge(t.parentNode)) || t);
                    }
                    if (v)
                        try {
                            return L.apply(r, m.querySelectorAll(v)), r;
                        } catch (e) {
                        } finally {
                            c === b && t.removeAttribute("id");
                        }
                }
            }
            return u(e.replace(B, "$1"), t, r, i);
        }
        function ae() {
            var e = [];
            function t(n, i) {
                return e.push(n + " ") > r.cacheLength && delete t[e.shift()], (t[n + " "] = i);
            }
            return t;
        }
        function se(e) {
            return (e[b] = !0), e;
        }
        function ue(e) {
            var t = d.createElement("fieldset");
            try {
                return !!e(t);
            } catch (e) {
                return !1;
            } finally {
                t.parentNode && t.parentNode.removeChild(t), (t = null);
            }
        }
        function le(e, t) {
            var n = e.split("|"),
                i = n.length;
            while (i--) r.attrHandle[n[i]] = t;
        }
        function ce(e, t) {
            var n = t && e,
                r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
            if (r) return r;
            if (n) while ((n = n.nextSibling)) if (n === t) return -1;
            return e ? 1 : -1;
        }
        function fe(e) {
            return function (t) {
                return "input" === t.nodeName.toLowerCase() && t.type === e;
            };
        }
        function pe(e) {
            return function (t) {
                var n = t.nodeName.toLowerCase();
                return ("input" === n || "button" === n) && t.type === e;
            };
        }
        function de(e) {
            return function (t) {
                return "form" in t
                    ? t.parentNode && !1 === t.disabled
                        ? "label" in t
                            ? "label" in t.parentNode
                                ? t.parentNode.disabled === e
                                : t.disabled === e
                            : t.isDisabled === e || (t.isDisabled !== !e && ie(t) === e)
                        : t.disabled === e
                    : "label" in t && t.disabled === e;
            };
        }
        function he(e) {
            return se(function (t) {
                return (
                    (t = +t),
                    se(function (n, r) {
                        var i,
                            o = e([], n.length, t),
                            a = o.length;
                        while (a--) n[(i = o[a])] && (n[i] = !(r[i] = n[i]));
                    })
                );
            });
        }
        function ge(e) {
            return e && "undefined" != typeof e.getElementsByTagName && e;
        }
        (n = oe.support = {}),
            (o = oe.isXML = function (e) {
                var t = e && (e.ownerDocument || e).documentElement;
                return !!t && "HTML" !== t.nodeName;
            }),
            (p = oe.setDocument = function (e) {
                var t,
                    i,
                    a = e ? e.ownerDocument || e : w;
                return a !== d && 9 === a.nodeType && a.documentElement
                    ? ((d = a),
                      (h = d.documentElement),
                      (g = !o(d)),
                      w !== d && (i = d.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", re, !1) : i.attachEvent && i.attachEvent("onunload", re)),
                      (n.attributes = ue(function (e) {
                          return (e.className = "i"), !e.getAttribute("className");
                      })),
                      (n.getElementsByTagName = ue(function (e) {
                          return e.appendChild(d.createComment("")), !e.getElementsByTagName("*").length;
                      })),
                      (n.getElementsByClassName = Q.test(d.getElementsByClassName)),
                      (n.getById = ue(function (e) {
                          return (h.appendChild(e).id = b), !d.getElementsByName || !d.getElementsByName(b).length;
                      })),
                      n.getById
                          ? ((r.filter.ID = function (e) {
                                var t = e.replace(Z, ee);
                                return function (e) {
                                    return e.getAttribute("id") === t;
                                };
                            }),
                            (r.find.ID = function (e, t) {
                                if ("undefined" != typeof t.getElementById && g) {
                                    var n = t.getElementById(e);
                                    return n ? [n] : [];
                                }
                            }))
                          : ((r.filter.ID = function (e) {
                                var t = e.replace(Z, ee);
                                return function (e) {
                                    var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                                    return n && n.value === t;
                                };
                            }),
                            (r.find.ID = function (e, t) {
                                if ("undefined" != typeof t.getElementById && g) {
                                    var n,
                                        r,
                                        i,
                                        o = t.getElementById(e);
                                    if (o) {
                                        if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                                        (i = t.getElementsByName(e)), (r = 0);
                                        while ((o = i[r++])) if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                                    }
                                    return [];
                                }
                            })),
                      (r.find.TAG = n.getElementsByTagName
                          ? function (e, t) {
                                return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0;
                            }
                          : function (e, t) {
                                var n,
                                    r = [],
                                    i = 0,
                                    o = t.getElementsByTagName(e);
                                if ("*" === e) {
                                    while ((n = o[i++])) 1 === n.nodeType && r.push(n);
                                    return r;
                                }
                                return o;
                            }),
                      (r.find.CLASS =
                          n.getElementsByClassName &&
                          function (e, t) {
                              if ("undefined" != typeof t.getElementsByClassName && g) return t.getElementsByClassName(e);
                          }),
                      (v = []),
                      (y = []),
                      (n.qsa = Q.test(d.querySelectorAll)) &&
                          (ue(function (e) {
                              (h.appendChild(e).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>"),
                                  e.querySelectorAll("[msallowcapture^='']").length && y.push("[*^$]=" + M + "*(?:''|\"\")"),
                                  e.querySelectorAll("[selected]").length || y.push("\\[" + M + "*(?:value|" + P + ")"),
                                  e.querySelectorAll("[id~=" + b + "-]").length || y.push("~="),
                                  e.querySelectorAll(":checked").length || y.push(":checked"),
                                  e.querySelectorAll("a#" + b + "+*").length || y.push(".#.+[+~]");
                          }),
                          ue(function (e) {
                              e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                              var t = d.createElement("input");
                              t.setAttribute("type", "hidden"),
                                  e.appendChild(t).setAttribute("name", "D"),
                                  e.querySelectorAll("[name=d]").length && y.push("name" + M + "*[*^$|!~]?="),
                                  2 !== e.querySelectorAll(":enabled").length && y.push(":enabled", ":disabled"),
                                  (h.appendChild(e).disabled = !0),
                                  2 !== e.querySelectorAll(":disabled").length && y.push(":enabled", ":disabled"),
                                  e.querySelectorAll("*,:x"),
                                  y.push(",.*:");
                          })),
                      (n.matchesSelector = Q.test((m = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector))) &&
                          ue(function (e) {
                              (n.disconnectedMatch = m.call(e, "*")), m.call(e, "[s!='']:x"), v.push("!=", W);
                          }),
                      (y = y.length && new RegExp(y.join("|"))),
                      (v = v.length && new RegExp(v.join("|"))),
                      (t = Q.test(h.compareDocumentPosition)),
                      (x =
                          t || Q.test(h.contains)
                              ? function (e, t) {
                                    var n = 9 === e.nodeType ? e.documentElement : e,
                                        r = t && t.parentNode;
                                    return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)));
                                }
                              : function (e, t) {
                                    if (t) while ((t = t.parentNode)) if (t === e) return !0;
                                    return !1;
                                }),
                      (D = t
                          ? function (e, t) {
                                if (e === t) return (f = !0), 0;
                                var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
                                return (
                                    r ||
                                    (1 & (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || (!n.sortDetached && t.compareDocumentPosition(e) === r)
                                        ? e === d || (e.ownerDocument === w && x(w, e))
                                            ? -1
                                            : t === d || (t.ownerDocument === w && x(w, t))
                                            ? 1
                                            : c
                                            ? O(c, e) - O(c, t)
                                            : 0
                                        : 4 & r
                                        ? -1
                                        : 1)
                                );
                            }
                          : function (e, t) {
                                if (e === t) return (f = !0), 0;
                                var n,
                                    r = 0,
                                    i = e.parentNode,
                                    o = t.parentNode,
                                    a = [e],
                                    s = [t];
                                if (!i || !o) return e === d ? -1 : t === d ? 1 : i ? -1 : o ? 1 : c ? O(c, e) - O(c, t) : 0;
                                if (i === o) return ce(e, t);
                                n = e;
                                while ((n = n.parentNode)) a.unshift(n);
                                n = t;
                                while ((n = n.parentNode)) s.unshift(n);
                                while (a[r] === s[r]) r++;
                                return r ? ce(a[r], s[r]) : a[r] === w ? -1 : s[r] === w ? 1 : 0;
                            }),
                      d)
                    : d;
            }),
            (oe.matches = function (e, t) {
                return oe(e, null, null, t);
            }),
            (oe.matchesSelector = function (e, t) {
                if (((e.ownerDocument || e) !== d && p(e), (t = t.replace(z, "='$1']")), n.matchesSelector && g && !S[t + " "] && (!v || !v.test(t)) && (!y || !y.test(t))))
                    try {
                        var r = m.call(e, t);
                        if (r || n.disconnectedMatch || (e.document && 11 !== e.document.nodeType)) return r;
                    } catch (e) {}
                return oe(t, d, null, [e]).length > 0;
            }),
            (oe.contains = function (e, t) {
                return (e.ownerDocument || e) !== d && p(e), x(e, t);
            }),
            (oe.attr = function (e, t) {
                (e.ownerDocument || e) !== d && p(e);
                var i = r.attrHandle[t.toLowerCase()],
                    o = i && N.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !g) : void 0;
                return void 0 !== o ? o : n.attributes || !g ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null;
            }),
            (oe.escape = function (e) {
                return (e + "").replace(te, ne);
            }),
            (oe.error = function (e) {
                throw new Error("Syntax error, unrecognized expression: " + e);
            }),
            (oe.uniqueSort = function (e) {
                var t,
                    r = [],
                    i = 0,
                    o = 0;
                if (((f = !n.detectDuplicates), (c = !n.sortStable && e.slice(0)), e.sort(D), f)) {
                    while ((t = e[o++])) t === e[o] && (i = r.push(o));
                    while (i--) e.splice(r[i], 1);
                }
                return (c = null), e;
            }),
            (i = oe.getText = function (e) {
                var t,
                    n = "",
                    r = 0,
                    o = e.nodeType;
                if (o) {
                    if (1 === o || 9 === o || 11 === o) {
                        if ("string" == typeof e.textContent) return e.textContent;
                        for (e = e.firstChild; e; e = e.nextSibling) n += i(e);
                    } else if (3 === o || 4 === o) return e.nodeValue;
                } else while ((t = e[r++])) n += i(t);
                return n;
            }),
            ((r = oe.selectors = {
                cacheLength: 50,
                createPseudo: se,
                match: V,
                attrHandle: {},
                find: {},
                relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } },
                preFilter: {
                    ATTR: function (e) {
                        return (e[1] = e[1].replace(Z, ee)), (e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee)), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4);
                    },
                    CHILD: function (e) {
                        return (
                            (e[1] = e[1].toLowerCase()),
                            "nth" === e[1].slice(0, 3) ? (e[3] || oe.error(e[0]), (e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3]))), (e[5] = +(e[7] + e[8] || "odd" === e[3]))) : e[3] && oe.error(e[0]),
                            e
                        );
                    },
                    PSEUDO: function (e) {
                        var t,
                            n = !e[6] && e[2];
                        return V.CHILD.test(e[0])
                            ? null
                            : (e[3] ? (e[2] = e[4] || e[5] || "") : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && ((e[0] = e[0].slice(0, t)), (e[2] = n.slice(0, t))), e.slice(0, 3));
                    },
                },
                filter: {
                    TAG: function (e) {
                        var t = e.replace(Z, ee).toLowerCase();
                        return "*" === e
                            ? function () {
                                  return !0;
                              }
                            : function (e) {
                                  return e.nodeName && e.nodeName.toLowerCase() === t;
                              };
                    },
                    CLASS: function (e) {
                        var t = E[e + " "];
                        return (
                            t ||
                            ((t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) &&
                                E(e, function (e) {
                                    return t.test(("string" == typeof e.className && e.className) || ("undefined" != typeof e.getAttribute && e.getAttribute("class")) || "");
                                }))
                        );
                    },
                    ATTR: function (e, t, n) {
                        return function (r) {
                            var i = oe.attr(r, e);
                            return null == i
                                ? "!=" === t
                                : !t ||
                                      ((i += ""),
                                      "=" === t
                                          ? i === n
                                          : "!=" === t
                                          ? i !== n
                                          : "^=" === t
                                          ? n && 0 === i.indexOf(n)
                                          : "*=" === t
                                          ? n && i.indexOf(n) > -1
                                          : "$=" === t
                                          ? n && i.slice(-n.length) === n
                                          : "~=" === t
                                          ? (" " + i.replace($, " ") + " ").indexOf(n) > -1
                                          : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-"));
                        };
                    },
                    CHILD: function (e, t, n, r, i) {
                        var o = "nth" !== e.slice(0, 3),
                            a = "last" !== e.slice(-4),
                            s = "of-type" === t;
                        return 1 === r && 0 === i
                            ? function (e) {
                                  return !!e.parentNode;
                              }
                            : function (t, n, u) {
                                  var l,
                                      c,
                                      f,
                                      p,
                                      d,
                                      h,
                                      g = o !== a ? "nextSibling" : "previousSibling",
                                      y = t.parentNode,
                                      v = s && t.nodeName.toLowerCase(),
                                      m = !u && !s,
                                      x = !1;
                                  if (y) {
                                      if (o) {
                                          while (g) {
                                              p = t;
                                              while ((p = p[g])) if (s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) return !1;
                                              h = g = "only" === e && !h && "nextSibling";
                                          }
                                          return !0;
                                      }
                                      if (((h = [a ? y.firstChild : y.lastChild]), a && m)) {
                                          (x = (d = (l = (c = (f = (p = y)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]) && l[2]), (p = d && y.childNodes[d]);
                                          while ((p = (++d && p && p[g]) || (x = d = 0) || h.pop()))
                                              if (1 === p.nodeType && ++x && p === t) {
                                                  c[e] = [T, d, x];
                                                  break;
                                              }
                                      } else if ((m && (x = d = (l = (c = (f = (p = t)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]), !1 === x))
                                          while ((p = (++d && p && p[g]) || (x = d = 0) || h.pop()))
                                              if ((s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) && ++x && (m && ((c = (f = p[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] = [T, x]), p === t)) break;
                                      return (x -= i) === r || (x % r == 0 && x / r >= 0);
                                  }
                              };
                    },
                    PSEUDO: function (e, t) {
                        var n,
                            i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || oe.error("unsupported pseudo: " + e);
                        return i[b]
                            ? i(t)
                            : i.length > 1
                            ? ((n = [e, e, "", t]),
                              r.setFilters.hasOwnProperty(e.toLowerCase())
                                  ? se(function (e, n) {
                                        var r,
                                            o = i(e, t),
                                            a = o.length;
                                        while (a--) e[(r = O(e, o[a]))] = !(n[r] = o[a]);
                                    })
                                  : function (e) {
                                        return i(e, 0, n);
                                    })
                            : i;
                    },
                },
                pseudos: {
                    not: se(function (e) {
                        var t = [],
                            n = [],
                            r = s(e.replace(B, "$1"));
                        return r[b]
                            ? se(function (e, t, n, i) {
                                  var o,
                                      a = r(e, null, i, []),
                                      s = e.length;
                                  while (s--) (o = a[s]) && (e[s] = !(t[s] = o));
                              })
                            : function (e, i, o) {
                                  return (t[0] = e), r(t, null, o, n), (t[0] = null), !n.pop();
                              };
                    }),
                    has: se(function (e) {
                        return function (t) {
                            return oe(e, t).length > 0;
                        };
                    }),
                    contains: se(function (e) {
                        return (
                            (e = e.replace(Z, ee)),
                            function (t) {
                                return (t.textContent || t.innerText || i(t)).indexOf(e) > -1;
                            }
                        );
                    }),
                    lang: se(function (e) {
                        return (
                            U.test(e || "") || oe.error("unsupported lang: " + e),
                            (e = e.replace(Z, ee).toLowerCase()),
                            function (t) {
                                var n;
                                do {
                                    if ((n = g ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang"))) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-");
                                } while ((t = t.parentNode) && 1 === t.nodeType);
                                return !1;
                            }
                        );
                    }),
                    target: function (t) {
                        var n = e.location && e.location.hash;
                        return n && n.slice(1) === t.id;
                    },
                    root: function (e) {
                        return e === h;
                    },
                    focus: function (e) {
                        return e === d.activeElement && (!d.hasFocus || d.hasFocus()) && !!(e.type || e.href || ~e.tabIndex);
                    },
                    enabled: de(!1),
                    disabled: de(!0),
                    checked: function (e) {
                        var t = e.nodeName.toLowerCase();
                        return ("input" === t && !!e.checked) || ("option" === t && !!e.selected);
                    },
                    selected: function (e) {
                        return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected;
                    },
                    empty: function (e) {
                        for (e = e.firstChild; e; e = e.nextSibling) if (e.nodeType < 6) return !1;
                        return !0;
                    },
                    parent: function (e) {
                        return !r.pseudos.empty(e);
                    },
                    header: function (e) {
                        return Y.test(e.nodeName);
                    },
                    input: function (e) {
                        return G.test(e.nodeName);
                    },
                    button: function (e) {
                        var t = e.nodeName.toLowerCase();
                        return ("input" === t && "button" === e.type) || "button" === t;
                    },
                    text: function (e) {
                        var t;
                        return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase());
                    },
                    first: he(function () {
                        return [0];
                    }),
                    last: he(function (e, t) {
                        return [t - 1];
                    }),
                    eq: he(function (e, t, n) {
                        return [n < 0 ? n + t : n];
                    }),
                    even: he(function (e, t) {
                        for (var n = 0; n < t; n += 2) e.push(n);
                        return e;
                    }),
                    odd: he(function (e, t) {
                        for (var n = 1; n < t; n += 2) e.push(n);
                        return e;
                    }),
                    lt: he(function (e, t, n) {
                        for (var r = n < 0 ? n + t : n; --r >= 0; ) e.push(r);
                        return e;
                    }),
                    gt: he(function (e, t, n) {
                        for (var r = n < 0 ? n + t : n; ++r < t; ) e.push(r);
                        return e;
                    }),
                },
            }).pseudos.nth = r.pseudos.eq);
        for (t in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) r.pseudos[t] = fe(t);
        for (t in { submit: !0, reset: !0 }) r.pseudos[t] = pe(t);
        function ye() {}
        (ye.prototype = r.filters = r.pseudos),
            (r.setFilters = new ye()),
            (a = oe.tokenize = function (e, t) {
                var n,
                    i,
                    o,
                    a,
                    s,
                    u,
                    l,
                    c = k[e + " "];
                if (c) return t ? 0 : c.slice(0);
                (s = e), (u = []), (l = r.preFilter);
                while (s) {
                    (n && !(i = F.exec(s))) || (i && (s = s.slice(i[0].length) || s), u.push((o = []))), (n = !1), (i = _.exec(s)) && ((n = i.shift()), o.push({ value: n, type: i[0].replace(B, " ") }), (s = s.slice(n.length)));
                    for (a in r.filter) !(i = V[a].exec(s)) || (l[a] && !(i = l[a](i))) || ((n = i.shift()), o.push({ value: n, type: a, matches: i }), (s = s.slice(n.length)));
                    if (!n) break;
                }
                return t ? s.length : s ? oe.error(e) : k(e, u).slice(0);
            });
        function ve(e) {
            for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
            return r;
        }
        function me(e, t, n) {
            var r = t.dir,
                i = t.next,
                o = i || r,
                a = n && "parentNode" === o,
                s = C++;
            return t.first
                ? function (t, n, i) {
                      while ((t = t[r])) if (1 === t.nodeType || a) return e(t, n, i);
                      return !1;
                  }
                : function (t, n, u) {
                      var l,
                          c,
                          f,
                          p = [T, s];
                      if (u) {
                          while ((t = t[r])) if ((1 === t.nodeType || a) && e(t, n, u)) return !0;
                      } else
                          while ((t = t[r]))
                              if (1 === t.nodeType || a)
                                  if (((f = t[b] || (t[b] = {})), (c = f[t.uniqueID] || (f[t.uniqueID] = {})), i && i === t.nodeName.toLowerCase())) t = t[r] || t;
                                  else {
                                      if ((l = c[o]) && l[0] === T && l[1] === s) return (p[2] = l[2]);
                                      if (((c[o] = p), (p[2] = e(t, n, u)))) return !0;
                                  }
                      return !1;
                  };
        }
        function xe(e) {
            return e.length > 1
                ? function (t, n, r) {
                      var i = e.length;
                      while (i--) if (!e[i](t, n, r)) return !1;
                      return !0;
                  }
                : e[0];
        }
        function be(e, t, n) {
            for (var r = 0, i = t.length; r < i; r++) oe(e, t[r], n);
            return n;
        }
        function we(e, t, n, r, i) {
            for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++) (o = e[s]) && ((n && !n(o, r, i)) || (a.push(o), l && t.push(s)));
            return a;
        }
        function Te(e, t, n, r, i, o) {
            return (
                r && !r[b] && (r = Te(r)),
                i && !i[b] && (i = Te(i, o)),
                se(function (o, a, s, u) {
                    var l,
                        c,
                        f,
                        p = [],
                        d = [],
                        h = a.length,
                        g = o || be(t || "*", s.nodeType ? [s] : s, []),
                        y = !e || (!o && t) ? g : we(g, p, e, s, u),
                        v = n ? (i || (o ? e : h || r) ? [] : a) : y;
                    if ((n && n(y, v, s, u), r)) {
                        (l = we(v, d)), r(l, [], s, u), (c = l.length);
                        while (c--) (f = l[c]) && (v[d[c]] = !(y[d[c]] = f));
                    }
                    if (o) {
                        if (i || e) {
                            if (i) {
                                (l = []), (c = v.length);
                                while (c--) (f = v[c]) && l.push((y[c] = f));
                                i(null, (v = []), l, u);
                            }
                            c = v.length;
                            while (c--) (f = v[c]) && (l = i ? O(o, f) : p[c]) > -1 && (o[l] = !(a[l] = f));
                        }
                    } else (v = we(v === a ? v.splice(h, v.length) : v)), i ? i(null, a, v, u) : L.apply(a, v);
                })
            );
        }
        function Ce(e) {
            for (
                var t,
                    n,
                    i,
                    o = e.length,
                    a = r.relative[e[0].type],
                    s = a || r.relative[" "],
                    u = a ? 1 : 0,
                    c = me(
                        function (e) {
                            return e === t;
                        },
                        s,
                        !0
                    ),
                    f = me(
                        function (e) {
                            return O(t, e) > -1;
                        },
                        s,
                        !0
                    ),
                    p = [
                        function (e, n, r) {
                            var i = (!a && (r || n !== l)) || ((t = n).nodeType ? c(e, n, r) : f(e, n, r));
                            return (t = null), i;
                        },
                    ];
                u < o;
                u++
            )
                if ((n = r.relative[e[u].type])) p = [me(xe(p), n)];
                else {
                    if ((n = r.filter[e[u].type].apply(null, e[u].matches))[b]) {
                        for (i = ++u; i < o; i++) if (r.relative[e[i].type]) break;
                        return Te(u > 1 && xe(p), u > 1 && ve(e.slice(0, u - 1).concat({ value: " " === e[u - 2].type ? "*" : "" })).replace(B, "$1"), n, u < i && Ce(e.slice(u, i)), i < o && Ce((e = e.slice(i))), i < o && ve(e));
                    }
                    p.push(n);
                }
            return xe(p);
        }
        function Ee(e, t) {
            var n = t.length > 0,
                i = e.length > 0,
                o = function (o, a, s, u, c) {
                    var f,
                        h,
                        y,
                        v = 0,
                        m = "0",
                        x = o && [],
                        b = [],
                        w = l,
                        C = o || (i && r.find.TAG("*", c)),
                        E = (T += null == w ? 1 : Math.random() || 0.1),
                        k = C.length;
                    for (c && (l = a === d || a || c); m !== k && null != (f = C[m]); m++) {
                        if (i && f) {
                            (h = 0), a || f.ownerDocument === d || (p(f), (s = !g));
                            while ((y = e[h++]))
                                if (y(f, a || d, s)) {
                                    u.push(f);
                                    break;
                                }
                            c && (T = E);
                        }
                        n && ((f = !y && f) && v--, o && x.push(f));
                    }
                    if (((v += m), n && m !== v)) {
                        h = 0;
                        while ((y = t[h++])) y(x, b, a, s);
                        if (o) {
                            if (v > 0) while (m--) x[m] || b[m] || (b[m] = j.call(u));
                            b = we(b);
                        }
                        L.apply(u, b), c && !o && b.length > 0 && v + t.length > 1 && oe.uniqueSort(u);
                    }
                    return c && ((T = E), (l = w)), x;
                };
            return n ? se(o) : o;
        }
        return (
            (s = oe.compile = function (e, t) {
                var n,
                    r = [],
                    i = [],
                    o = S[e + " "];
                if (!o) {
                    t || (t = a(e)), (n = t.length);
                    while (n--) (o = Ce(t[n]))[b] ? r.push(o) : i.push(o);
                    (o = S(e, Ee(i, r))).selector = e;
                }
                return o;
            }),
            (u = oe.select = function (e, t, n, i) {
                var o,
                    u,
                    l,
                    c,
                    f,
                    p = "function" == typeof e && e,
                    d = !i && a((e = p.selector || e));
                if (((n = n || []), 1 === d.length)) {
                    if ((u = d[0] = d[0].slice(0)).length > 2 && "ID" === (l = u[0]).type && 9 === t.nodeType && g && r.relative[u[1].type]) {
                        if (!(t = (r.find.ID(l.matches[0].replace(Z, ee), t) || [])[0])) return n;
                        p && (t = t.parentNode), (e = e.slice(u.shift().value.length));
                    }
                    o = V.needsContext.test(e) ? 0 : u.length;
                    while (o--) {
                        if (((l = u[o]), r.relative[(c = l.type)])) break;
                        if ((f = r.find[c]) && (i = f(l.matches[0].replace(Z, ee), (K.test(u[0].type) && ge(t.parentNode)) || t))) {
                            if ((u.splice(o, 1), !(e = i.length && ve(u)))) return L.apply(n, i), n;
                            break;
                        }
                    }
                }
                return (p || s(e, d))(i, t, !g, n, !t || (K.test(e) && ge(t.parentNode)) || t), n;
            }),
            (n.sortStable = b.split("").sort(D).join("") === b),
            (n.detectDuplicates = !!f),
            p(),
            (n.sortDetached = ue(function (e) {
                return 1 & e.compareDocumentPosition(d.createElement("fieldset"));
            })),
            ue(function (e) {
                return (e.innerHTML = "<a href='#'></a>"), "#" === e.firstChild.getAttribute("href");
            }) ||
                le("type|href|height|width", function (e, t, n) {
                    if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2);
                }),
            (n.attributes &&
                ue(function (e) {
                    return (e.innerHTML = "<input/>"), e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value");
                })) ||
                le("value", function (e, t, n) {
                    if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue;
                }),
            ue(function (e) {
                return null == e.getAttribute("disabled");
            }) ||
                le(P, function (e, t, n) {
                    var r;
                    if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null;
                }),
            oe
        );
    })(e);
    (w.find = E), (w.expr = E.selectors), (w.expr[":"] = w.expr.pseudos), (w.uniqueSort = w.unique = E.uniqueSort), (w.text = E.getText), (w.isXMLDoc = E.isXML), (w.contains = E.contains), (w.escapeSelector = E.escape);
    var k = function (e, t, n) {
            var r = [],
                i = void 0 !== n;
            while ((e = e[t]) && 9 !== e.nodeType)
                if (1 === e.nodeType) {
                    if (i && w(e).is(n)) break;
                    r.push(e);
                }
            return r;
        },
        S = function (e, t) {
            for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
            return n;
        },
        D = w.expr.match.needsContext;
    function N(e, t) {
        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase();
    }
    var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;
    function j(e, t, n) {
        return g(t)
            ? w.grep(e, function (e, r) {
                  return !!t.call(e, r, e) !== n;
              })
            : t.nodeType
            ? w.grep(e, function (e) {
                  return (e === t) !== n;
              })
            : "string" != typeof t
            ? w.grep(e, function (e) {
                  return u.call(t, e) > -1 !== n;
              })
            : w.filter(t, e, n);
    }
    (w.filter = function (e, t, n) {
        var r = t[0];
        return (
            n && (e = ":not(" + e + ")"),
            1 === t.length && 1 === r.nodeType
                ? w.find.matchesSelector(r, e)
                    ? [r]
                    : []
                : w.find.matches(
                      e,
                      w.grep(t, function (e) {
                          return 1 === e.nodeType;
                      })
                  )
        );
    }),
        w.fn.extend({
            find: function (e) {
                var t,
                    n,
                    r = this.length,
                    i = this;
                if ("string" != typeof e)
                    return this.pushStack(
                        w(e).filter(function () {
                            for (t = 0; t < r; t++) if (w.contains(i[t], this)) return !0;
                        })
                    );
                for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, i[t], n);
                return r > 1 ? w.uniqueSort(n) : n;
            },
            filter: function (e) {
                return this.pushStack(j(this, e || [], !1));
            },
            not: function (e) {
                return this.pushStack(j(this, e || [], !0));
            },
            is: function (e) {
                return !!j(this, "string" == typeof e && D.test(e) ? w(e) : e || [], !1).length;
            },
        });
    var q,
        L = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    ((w.fn.init = function (e, t, n) {
        var i, o;
        if (!e) return this;
        if (((n = n || q), "string" == typeof e)) {
            if (!(i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : L.exec(e)) || (!i[1] && t)) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
            if (i[1]) {
                if (((t = t instanceof w ? t[0] : t), w.merge(this, w.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : r, !0)), A.test(i[1]) && w.isPlainObject(t))) for (i in t) g(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
                return this;
            }
            return (o = r.getElementById(i[2])) && ((this[0] = o), (this.length = 1)), this;
        }
        return e.nodeType ? ((this[0] = e), (this.length = 1), this) : g(e) ? (void 0 !== n.ready ? n.ready(e) : e(w)) : w.makeArray(e, this);
    }).prototype = w.fn),
        (q = w(r));
    var H = /^(?:parents|prev(?:Until|All))/,
        O = { children: !0, contents: !0, next: !0, prev: !0 };
    w.fn.extend({
        has: function (e) {
            var t = w(e, this),
                n = t.length;
            return this.filter(function () {
                for (var e = 0; e < n; e++) if (w.contains(this, t[e])) return !0;
            });
        },
        closest: function (e, t) {
            var n,
                r = 0,
                i = this.length,
                o = [],
                a = "string" != typeof e && w(e);
            if (!D.test(e))
                for (; r < i; r++)
                    for (n = this[r]; n && n !== t; n = n.parentNode)
                        if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && w.find.matchesSelector(n, e))) {
                            o.push(n);
                            break;
                        }
            return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o);
        },
        index: function (e) {
            return e ? ("string" == typeof e ? u.call(w(e), this[0]) : u.call(this, e.jquery ? e[0] : e)) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1;
        },
        add: function (e, t) {
            return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))));
        },
        addBack: function (e) {
            return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
        },
    });
    function P(e, t) {
        while ((e = e[t]) && 1 !== e.nodeType);
        return e;
    }
    w.each(
        {
            parent: function (e) {
                var t = e.parentNode;
                return t && 11 !== t.nodeType ? t : null;
            },
            parents: function (e) {
                return k(e, "parentNode");
            },
            parentsUntil: function (e, t, n) {
                return k(e, "parentNode", n);
            },
            next: function (e) {
                return P(e, "nextSibling");
            },
            prev: function (e) {
                return P(e, "previousSibling");
            },
            nextAll: function (e) {
                return k(e, "nextSibling");
            },
            prevAll: function (e) {
                return k(e, "previousSibling");
            },
            nextUntil: function (e, t, n) {
                return k(e, "nextSibling", n);
            },
            prevUntil: function (e, t, n) {
                return k(e, "previousSibling", n);
            },
            siblings: function (e) {
                return S((e.parentNode || {}).firstChild, e);
            },
            children: function (e) {
                return S(e.firstChild);
            },
            contents: function (e) {
                return N(e, "iframe") ? e.contentDocument : (N(e, "template") && (e = e.content || e), w.merge([], e.childNodes));
            },
        },
        function (e, t) {
            w.fn[e] = function (n, r) {
                var i = w.map(this, t, n);
                return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), this.length > 1 && (O[e] || w.uniqueSort(i), H.test(e) && i.reverse()), this.pushStack(i);
            };
        }
    );
    var M = /[^\x20\t\r\n\f]+/g;
    function R(e) {
        var t = {};
        return (
            w.each(e.match(M) || [], function (e, n) {
                t[n] = !0;
            }),
            t
        );
    }
    w.Callbacks = function (e) {
        e = "string" == typeof e ? R(e) : w.extend({}, e);
        var t,
            n,
            r,
            i,
            o = [],
            a = [],
            s = -1,
            u = function () {
                for (i = i || e.once, r = t = !0; a.length; s = -1) {
                    n = a.shift();
                    while (++s < o.length) !1 === o[s].apply(n[0], n[1]) && e.stopOnFalse && ((s = o.length), (n = !1));
                }
                e.memory || (n = !1), (t = !1), i && (o = n ? [] : "");
            },
            l = {
                add: function () {
                    return (
                        o &&
                            (n && !t && ((s = o.length - 1), a.push(n)),
                            (function t(n) {
                                w.each(n, function (n, r) {
                                    g(r) ? (e.unique && l.has(r)) || o.push(r) : r && r.length && "string" !== x(r) && t(r);
                                });
                            })(arguments),
                            n && !t && u()),
                        this
                    );
                },
                remove: function () {
                    return (
                        w.each(arguments, function (e, t) {
                            var n;
                            while ((n = w.inArray(t, o, n)) > -1) o.splice(n, 1), n <= s && s--;
                        }),
                        this
                    );
                },
                has: function (e) {
                    return e ? w.inArray(e, o) > -1 : o.length > 0;
                },
                empty: function () {
                    return o && (o = []), this;
                },
                disable: function () {
                    return (i = a = []), (o = n = ""), this;
                },
                disabled: function () {
                    return !o;
                },
                lock: function () {
                    return (i = a = []), n || t || (o = n = ""), this;
                },
                locked: function () {
                    return !!i;
                },
                fireWith: function (e, n) {
                    return i || ((n = [e, (n = n || []).slice ? n.slice() : n]), a.push(n), t || u()), this;
                },
                fire: function () {
                    return l.fireWith(this, arguments), this;
                },
                fired: function () {
                    return !!r;
                },
            };
        return l;
    };
    function I(e) {
        return e;
    }
    function W(e) {
        throw e;
    }
    function $(e, t, n, r) {
        var i;
        try {
            e && g((i = e.promise)) ? i.call(e).done(t).fail(n) : e && g((i = e.then)) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r));
        } catch (e) {
            n.apply(void 0, [e]);
        }
    }
    w.extend({
        Deferred: function (t) {
            var n = [
                    ["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2],
                    ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"],
                    ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"],
                ],
                r = "pending",
                i = {
                    state: function () {
                        return r;
                    },
                    always: function () {
                        return o.done(arguments).fail(arguments), this;
                    },
                    catch: function (e) {
                        return i.then(null, e);
                    },
                    pipe: function () {
                        var e = arguments;
                        return w
                            .Deferred(function (t) {
                                w.each(n, function (n, r) {
                                    var i = g(e[r[4]]) && e[r[4]];
                                    o[r[1]](function () {
                                        var e = i && i.apply(this, arguments);
                                        e && g(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments);
                                    });
                                }),
                                    (e = null);
                            })
                            .promise();
                    },
                    then: function (t, r, i) {
                        var o = 0;
                        function a(t, n, r, i) {
                            return function () {
                                var s = this,
                                    u = arguments,
                                    l = function () {
                                        var e, l;
                                        if (!(t < o)) {
                                            if ((e = r.apply(s, u)) === n.promise()) throw new TypeError("Thenable self-resolution");
                                            (l = e && ("object" == typeof e || "function" == typeof e) && e.then),
                                                g(l)
                                                    ? i
                                                        ? l.call(e, a(o, n, I, i), a(o, n, W, i))
                                                        : (o++, l.call(e, a(o, n, I, i), a(o, n, W, i), a(o, n, I, n.notifyWith)))
                                                    : (r !== I && ((s = void 0), (u = [e])), (i || n.resolveWith)(s, u));
                                        }
                                    },
                                    c = i
                                        ? l
                                        : function () {
                                              try {
                                                  l();
                                              } catch (e) {
                                                  w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), t + 1 >= o && (r !== W && ((s = void 0), (u = [e])), n.rejectWith(s, u));
                                              }
                                          };
                                t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c));
                            };
                        }
                        return w
                            .Deferred(function (e) {
                                n[0][3].add(a(0, e, g(i) ? i : I, e.notifyWith)), n[1][3].add(a(0, e, g(t) ? t : I)), n[2][3].add(a(0, e, g(r) ? r : W));
                            })
                            .promise();
                    },
                    promise: function (e) {
                        return null != e ? w.extend(e, i) : i;
                    },
                },
                o = {};
            return (
                w.each(n, function (e, t) {
                    var a = t[2],
                        s = t[5];
                    (i[t[1]] = a.add),
                        s &&
                            a.add(
                                function () {
                                    r = s;
                                },
                                n[3 - e][2].disable,
                                n[3 - e][3].disable,
                                n[0][2].lock,
                                n[0][3].lock
                            ),
                        a.add(t[3].fire),
                        (o[t[0]] = function () {
                            return o[t[0] + "With"](this === o ? void 0 : this, arguments), this;
                        }),
                        (o[t[0] + "With"] = a.fireWith);
                }),
                i.promise(o),
                t && t.call(o, o),
                o
            );
        },
        when: function (e) {
            var t = arguments.length,
                n = t,
                r = Array(n),
                i = o.call(arguments),
                a = w.Deferred(),
                s = function (e) {
                    return function (n) {
                        (r[e] = this), (i[e] = arguments.length > 1 ? o.call(arguments) : n), --t || a.resolveWith(r, i);
                    };
                };
            if (t <= 1 && ($(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || g(i[n] && i[n].then))) return a.then();
            while (n--) $(i[n], s(n), a.reject);
            return a.promise();
        },
    });
    var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    (w.Deferred.exceptionHook = function (t, n) {
        e.console && e.console.warn && t && B.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n);
    }),
        (w.readyException = function (t) {
            e.setTimeout(function () {
                throw t;
            });
        });
    var F = w.Deferred();
    (w.fn.ready = function (e) {
        return (
            F.then(e)["catch"](function (e) {
                w.readyException(e);
            }),
            this
        );
    }),
        w.extend({
            isReady: !1,
            readyWait: 1,
            ready: function (e) {
                (!0 === e ? --w.readyWait : w.isReady) || ((w.isReady = !0), (!0 !== e && --w.readyWait > 0) || F.resolveWith(r, [w]));
            },
        }),
        (w.ready.then = F.then);
    function _() {
        r.removeEventListener("DOMContentLoaded", _), e.removeEventListener("load", _), w.ready();
    }
    "complete" === r.readyState || ("loading" !== r.readyState && !r.documentElement.doScroll) ? e.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", _), e.addEventListener("load", _));
    var z = function (e, t, n, r, i, o, a) {
            var s = 0,
                u = e.length,
                l = null == n;
            if ("object" === x(n)) {
                i = !0;
                for (s in n) z(e, t, s, n[s], !0, o, a);
            } else if (
                void 0 !== r &&
                ((i = !0),
                g(r) || (a = !0),
                l &&
                    (a
                        ? (t.call(e, r), (t = null))
                        : ((l = t),
                          (t = function (e, t, n) {
                              return l.call(w(e), n);
                          }))),
                t)
            )
                for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
            return i ? e : l ? t.call(e) : u ? t(e[0], n) : o;
        },
        X = /^-ms-/,
        U = /-([a-z])/g;
    function V(e, t) {
        return t.toUpperCase();
    }
    function G(e) {
        return e.replace(X, "ms-").replace(U, V);
    }
    var Y = function (e) {
        return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType;
    };
    function Q() {
        this.expando = w.expando + Q.uid++;
    }
    (Q.uid = 1),
        (Q.prototype = {
            cache: function (e) {
                var t = e[this.expando];
                return t || ((t = {}), Y(e) && (e.nodeType ? (e[this.expando] = t) : Object.defineProperty(e, this.expando, { value: t, configurable: !0 }))), t;
            },
            set: function (e, t, n) {
                var r,
                    i = this.cache(e);
                if ("string" == typeof t) i[G(t)] = n;
                else for (r in t) i[G(r)] = t[r];
                return i;
            },
            get: function (e, t) {
                return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][G(t)];
            },
            access: function (e, t, n) {
                return void 0 === t || (t && "string" == typeof t && void 0 === n) ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t);
            },
            remove: function (e, t) {
                var n,
                    r = e[this.expando];
                if (void 0 !== r) {
                    if (void 0 !== t) {
                        n = (t = Array.isArray(t) ? t.map(G) : (t = G(t)) in r ? [t] : t.match(M) || []).length;
                        while (n--) delete r[t[n]];
                    }
                    (void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? (e[this.expando] = void 0) : delete e[this.expando]);
                }
            },
            hasData: function (e) {
                var t = e[this.expando];
                return void 0 !== t && !w.isEmptyObject(t);
            },
        });
    var J = new Q(),
        K = new Q(),
        Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        ee = /[A-Z]/g;
    function te(e) {
        return "true" === e || ("false" !== e && ("null" === e ? null : e === +e + "" ? +e : Z.test(e) ? JSON.parse(e) : e));
    }
    function ne(e, t, n) {
        var r;
        if (void 0 === n && 1 === e.nodeType)
            if (((r = "data-" + t.replace(ee, "-$&").toLowerCase()), "string" == typeof (n = e.getAttribute(r)))) {
                try {
                    n = te(n);
                } catch (e) {}
                K.set(e, t, n);
            } else n = void 0;
        return n;
    }
    w.extend({
        hasData: function (e) {
            return K.hasData(e) || J.hasData(e);
        },
        data: function (e, t, n) {
            return K.access(e, t, n);
        },
        removeData: function (e, t) {
            K.remove(e, t);
        },
        _data: function (e, t, n) {
            return J.access(e, t, n);
        },
        _removeData: function (e, t) {
            J.remove(e, t);
        },
    }),
        w.fn.extend({
            data: function (e, t) {
                var n,
                    r,
                    i,
                    o = this[0],
                    a = o && o.attributes;
                if (void 0 === e) {
                    if (this.length && ((i = K.get(o)), 1 === o.nodeType && !J.get(o, "hasDataAttrs"))) {
                        n = a.length;
                        while (n--) a[n] && 0 === (r = a[n].name).indexOf("data-") && ((r = G(r.slice(5))), ne(o, r, i[r]));
                        J.set(o, "hasDataAttrs", !0);
                    }
                    return i;
                }
                return "object" == typeof e
                    ? this.each(function () {
                          K.set(this, e);
                      })
                    : z(
                          this,
                          function (t) {
                              var n;
                              if (o && void 0 === t) {
                                  if (void 0 !== (n = K.get(o, e))) return n;
                                  if (void 0 !== (n = ne(o, e))) return n;
                              } else
                                  this.each(function () {
                                      K.set(this, e, t);
                                  });
                          },
                          null,
                          t,
                          arguments.length > 1,
                          null,
                          !0
                      );
            },
            removeData: function (e) {
                return this.each(function () {
                    K.remove(this, e);
                });
            },
        }),
        w.extend({
            queue: function (e, t, n) {
                var r;
                if (e) return (t = (t || "fx") + "queue"), (r = J.get(e, t)), n && (!r || Array.isArray(n) ? (r = J.access(e, t, w.makeArray(n))) : r.push(n)), r || [];
            },
            dequeue: function (e, t) {
                t = t || "fx";
                var n = w.queue(e, t),
                    r = n.length,
                    i = n.shift(),
                    o = w._queueHooks(e, t),
                    a = function () {
                        w.dequeue(e, t);
                    };
                "inprogress" === i && ((i = n.shift()), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire();
            },
            _queueHooks: function (e, t) {
                var n = t + "queueHooks";
                return (
                    J.get(e, n) ||
                    J.access(e, n, {
                        empty: w.Callbacks("once memory").add(function () {
                            J.remove(e, [t + "queue", n]);
                        }),
                    })
                );
            },
        }),
        w.fn.extend({
            queue: function (e, t) {
                var n = 2;
                return (
                    "string" != typeof e && ((t = e), (e = "fx"), n--),
                    arguments.length < n
                        ? w.queue(this[0], e)
                        : void 0 === t
                        ? this
                        : this.each(function () {
                              var n = w.queue(this, e, t);
                              w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e);
                          })
                );
            },
            dequeue: function (e) {
                return this.each(function () {
                    w.dequeue(this, e);
                });
            },
            clearQueue: function (e) {
                return this.queue(e || "fx", []);
            },
            promise: function (e, t) {
                var n,
                    r = 1,
                    i = w.Deferred(),
                    o = this,
                    a = this.length,
                    s = function () {
                        --r || i.resolveWith(o, [o]);
                    };
                "string" != typeof e && ((t = e), (e = void 0)), (e = e || "fx");
                while (a--) (n = J.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
                return s(), i.promise(t);
            },
        });
    var re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        ie = new RegExp("^(?:([+-])=|)(" + re + ")([a-z%]*)$", "i"),
        oe = ["Top", "Right", "Bottom", "Left"],
        ae = function (e, t) {
            return "none" === (e = t || e).style.display || ("" === e.style.display && w.contains(e.ownerDocument, e) && "none" === w.css(e, "display"));
        },
        se = function (e, t, n, r) {
            var i,
                o,
                a = {};
            for (o in t) (a[o] = e.style[o]), (e.style[o] = t[o]);
            i = n.apply(e, r || []);
            for (o in t) e.style[o] = a[o];
            return i;
        };
    function ue(e, t, n, r) {
        var i,
            o,
            a = 20,
            s = r
                ? function () {
                      return r.cur();
                  }
                : function () {
                      return w.css(e, t, "");
                  },
            u = s(),
            l = (n && n[3]) || (w.cssNumber[t] ? "" : "px"),
            c = (w.cssNumber[t] || ("px" !== l && +u)) && ie.exec(w.css(e, t));
        if (c && c[3] !== l) {
            (u /= 2), (l = l || c[3]), (c = +u || 1);
            while (a--) w.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || 0.5)) <= 0 && (a = 0), (c /= o);
            (c *= 2), w.style(e, t, c + l), (n = n || []);
        }
        return n && ((c = +c || +u || 0), (i = n[1] ? c + (n[1] + 1) * n[2] : +n[2]), r && ((r.unit = l), (r.start = c), (r.end = i))), i;
    }
    var le = {};
    function ce(e) {
        var t,
            n = e.ownerDocument,
            r = e.nodeName,
            i = le[r];
        return i || ((t = n.body.appendChild(n.createElement(r))), (i = w.css(t, "display")), t.parentNode.removeChild(t), "none" === i && (i = "block"), (le[r] = i), i);
    }
    function fe(e, t) {
        for (var n, r, i = [], o = 0, a = e.length; o < a; o++)
            (r = e[o]).style &&
                ((n = r.style.display),
                t ? ("none" === n && ((i[o] = J.get(r, "display") || null), i[o] || (r.style.display = "")), "" === r.style.display && ae(r) && (i[o] = ce(r))) : "none" !== n && ((i[o] = "none"), J.set(r, "display", n)));
        for (o = 0; o < a; o++) null != i[o] && (e[o].style.display = i[o]);
        return e;
    }
    w.fn.extend({
        show: function () {
            return fe(this, !0);
        },
        hide: function () {
            return fe(this);
        },
        toggle: function (e) {
            return "boolean" == typeof e
                ? e
                    ? this.show()
                    : this.hide()
                : this.each(function () {
                      ae(this) ? w(this).show() : w(this).hide();
                  });
        },
    });
    var pe = /^(?:checkbox|radio)$/i,
        de = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
        he = /^$|^module$|\/(?:java|ecma)script/i,
        ge = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""],
        };
    (ge.optgroup = ge.option), (ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead), (ge.th = ge.td);
    function ye(e, t) {
        var n;
        return (n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : []), void 0 === t || (t && N(e, t)) ? w.merge([e], n) : n;
    }
    function ve(e, t) {
        for (var n = 0, r = e.length; n < r; n++) J.set(e[n], "globalEval", !t || J.get(t[n], "globalEval"));
    }
    var me = /<|&#?\w+;/;
    function xe(e, t, n, r, i) {
        for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
            if ((o = e[d]) || 0 === o)
                if ("object" === x(o)) w.merge(p, o.nodeType ? [o] : o);
                else if (me.test(o)) {
                    (a = a || f.appendChild(t.createElement("div"))), (s = (de.exec(o) || ["", ""])[1].toLowerCase()), (u = ge[s] || ge._default), (a.innerHTML = u[1] + w.htmlPrefilter(o) + u[2]), (c = u[0]);
                    while (c--) a = a.lastChild;
                    w.merge(p, a.childNodes), ((a = f.firstChild).textContent = "");
                } else p.push(t.createTextNode(o));
        (f.textContent = ""), (d = 0);
        while ((o = p[d++]))
            if (r && w.inArray(o, r) > -1) i && i.push(o);
            else if (((l = w.contains(o.ownerDocument, o)), (a = ye(f.appendChild(o), "script")), l && ve(a), n)) {
                c = 0;
                while ((o = a[c++])) he.test(o.type || "") && n.push(o);
            }
        return f;
    }
    !(function () {
        var e = r.createDocumentFragment().appendChild(r.createElement("div")),
            t = r.createElement("input");
        t.setAttribute("type", "radio"),
            t.setAttribute("checked", "checked"),
            t.setAttribute("name", "t"),
            e.appendChild(t),
            (h.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked),
            (e.innerHTML = "<textarea>x</textarea>"),
            (h.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue);
    })();
    var be = r.documentElement,
        we = /^key/,
        Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        Ce = /^([^.]*)(?:\.(.+)|)/;
    function Ee() {
        return !0;
    }
    function ke() {
        return !1;
    }
    function Se() {
        try {
            return r.activeElement;
        } catch (e) {}
    }
    function De(e, t, n, r, i, o) {
        var a, s;
        if ("object" == typeof t) {
            "string" != typeof n && ((r = r || n), (n = void 0));
            for (s in t) De(e, s, n, r, t[s], o);
            return e;
        }
        if ((null == r && null == i ? ((i = n), (r = n = void 0)) : null == i && ("string" == typeof n ? ((i = r), (r = void 0)) : ((i = r), (r = n), (n = void 0))), !1 === i)) i = ke;
        else if (!i) return e;
        return (
            1 === o &&
                ((a = i),
                ((i = function (e) {
                    return w().off(e), a.apply(this, arguments);
                }).guid = a.guid || (a.guid = w.guid++))),
            e.each(function () {
                w.event.add(this, t, i, r, n);
            })
        );
    }
    (w.event = {
        global: {},
        add: function (e, t, n, r, i) {
            var o,
                a,
                s,
                u,
                l,
                c,
                f,
                p,
                d,
                h,
                g,
                y = J.get(e);
            if (y) {
                n.handler && ((n = (o = n).handler), (i = o.selector)),
                    i && w.find.matchesSelector(be, i),
                    n.guid || (n.guid = w.guid++),
                    (u = y.events) || (u = y.events = {}),
                    (a = y.handle) ||
                        (a = y.handle = function (t) {
                            return "undefined" != typeof w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0;
                        }),
                    (l = (t = (t || "").match(M) || [""]).length);
                while (l--)
                    (d = g = (s = Ce.exec(t[l]) || [])[1]),
                        (h = (s[2] || "").split(".").sort()),
                        d &&
                            ((f = w.event.special[d] || {}),
                            (d = (i ? f.delegateType : f.bindType) || d),
                            (f = w.event.special[d] || {}),
                            (c = w.extend({ type: d, origType: g, data: r, handler: n, guid: n.guid, selector: i, needsContext: i && w.expr.match.needsContext.test(i), namespace: h.join(".") }, o)),
                            (p = u[d]) || (((p = u[d] = []).delegateCount = 0), (f.setup && !1 !== f.setup.call(e, r, h, a)) || (e.addEventListener && e.addEventListener(d, a))),
                            f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)),
                            i ? p.splice(p.delegateCount++, 0, c) : p.push(c),
                            (w.event.global[d] = !0));
            }
        },
        remove: function (e, t, n, r, i) {
            var o,
                a,
                s,
                u,
                l,
                c,
                f,
                p,
                d,
                h,
                g,
                y = J.hasData(e) && J.get(e);
            if (y && (u = y.events)) {
                l = (t = (t || "").match(M) || [""]).length;
                while (l--)
                    if (((s = Ce.exec(t[l]) || []), (d = g = s[1]), (h = (s[2] || "").split(".").sort()), d)) {
                        (f = w.event.special[d] || {}), (p = u[(d = (r ? f.delegateType : f.bindType) || d)] || []), (s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)")), (a = o = p.length);
                        while (o--)
                            (c = p[o]),
                                (!i && g !== c.origType) ||
                                    (n && n.guid !== c.guid) ||
                                    (s && !s.test(c.namespace)) ||
                                    (r && r !== c.selector && ("**" !== r || !c.selector)) ||
                                    (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
                        a && !p.length && ((f.teardown && !1 !== f.teardown.call(e, h, y.handle)) || w.removeEvent(e, d, y.handle), delete u[d]);
                    } else for (d in u) w.event.remove(e, d + t[l], n, r, !0);
                w.isEmptyObject(u) && J.remove(e, "handle events");
            }
        },
        dispatch: function (e) {
            var t = w.event.fix(e),
                n,
                r,
                i,
                o,
                a,
                s,
                u = new Array(arguments.length),
                l = (J.get(this, "events") || {})[t.type] || [],
                c = w.event.special[t.type] || {};
            for (u[0] = t, n = 1; n < arguments.length; n++) u[n] = arguments[n];
            if (((t.delegateTarget = this), !c.preDispatch || !1 !== c.preDispatch.call(this, t))) {
                (s = w.event.handlers.call(this, t, l)), (n = 0);
                while ((o = s[n++]) && !t.isPropagationStopped()) {
                    (t.currentTarget = o.elem), (r = 0);
                    while ((a = o.handlers[r++]) && !t.isImmediatePropagationStopped())
                        (t.rnamespace && !t.rnamespace.test(a.namespace)) ||
                            ((t.handleObj = a), (t.data = a.data), void 0 !== (i = ((w.event.special[a.origType] || {}).handle || a.handler).apply(o.elem, u)) && !1 === (t.result = i) && (t.preventDefault(), t.stopPropagation()));
                }
                return c.postDispatch && c.postDispatch.call(this, t), t.result;
            }
        },
        handlers: function (e, t) {
            var n,
                r,
                i,
                o,
                a,
                s = [],
                u = t.delegateCount,
                l = e.target;
            if (u && l.nodeType && !("click" === e.type && e.button >= 1))
                for (; l !== this; l = l.parentNode || this)
                    if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                        for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[(i = (r = t[n]).selector + " ")] && (a[i] = r.needsContext ? w(i, this).index(l) > -1 : w.find(i, this, null, [l]).length), a[i] && o.push(r);
                        o.length && s.push({ elem: l, handlers: o });
                    }
            return (l = this), u < t.length && s.push({ elem: l, handlers: t.slice(u) }), s;
        },
        addProp: function (e, t) {
            Object.defineProperty(w.Event.prototype, e, {
                enumerable: !0,
                configurable: !0,
                get: g(t)
                    ? function () {
                          if (this.originalEvent) return t(this.originalEvent);
                      }
                    : function () {
                          if (this.originalEvent) return this.originalEvent[e];
                      },
                set: function (t) {
                    Object.defineProperty(this, e, { enumerable: !0, configurable: !0, writable: !0, value: t });
                },
            });
        },
        fix: function (e) {
            return e[w.expando] ? e : new w.Event(e);
        },
        special: {
            load: { noBubble: !0 },
            focus: {
                trigger: function () {
                    if (this !== Se() && this.focus) return this.focus(), !1;
                },
                delegateType: "focusin",
            },
            blur: {
                trigger: function () {
                    if (this === Se() && this.blur) return this.blur(), !1;
                },
                delegateType: "focusout",
            },
            click: {
                trigger: function () {
                    if ("checkbox" === this.type && this.click && N(this, "input")) return this.click(), !1;
                },
                _default: function (e) {
                    return N(e.target, "a");
                },
            },
            beforeunload: {
                postDispatch: function (e) {
                    void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result);
                },
            },
        },
    }),
        (w.removeEvent = function (e, t, n) {
            e.removeEventListener && e.removeEventListener(t, n);
        }),
        (w.Event = function (e, t) {
            if (!(this instanceof w.Event)) return new w.Event(e, t);
            e && e.type
                ? ((this.originalEvent = e),
                  (this.type = e.type),
                  (this.isDefaultPrevented = e.defaultPrevented || (void 0 === e.defaultPrevented && !1 === e.returnValue) ? Ee : ke),
                  (this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target),
                  (this.currentTarget = e.currentTarget),
                  (this.relatedTarget = e.relatedTarget))
                : (this.type = e),
                t && w.extend(this, t),
                (this.timeStamp = (e && e.timeStamp) || Date.now()),
                (this[w.expando] = !0);
        }),
        (w.Event.prototype = {
            constructor: w.Event,
            isDefaultPrevented: ke,
            isPropagationStopped: ke,
            isImmediatePropagationStopped: ke,
            isSimulated: !1,
            preventDefault: function () {
                var e = this.originalEvent;
                (this.isDefaultPrevented = Ee), e && !this.isSimulated && e.preventDefault();
            },
            stopPropagation: function () {
                var e = this.originalEvent;
                (this.isPropagationStopped = Ee), e && !this.isSimulated && e.stopPropagation();
            },
            stopImmediatePropagation: function () {
                var e = this.originalEvent;
                (this.isImmediatePropagationStopped = Ee), e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation();
            },
        }),
        w.each(
            {
                altKey: !0,
                bubbles: !0,
                cancelable: !0,
                changedTouches: !0,
                ctrlKey: !0,
                detail: !0,
                eventPhase: !0,
                metaKey: !0,
                pageX: !0,
                pageY: !0,
                shiftKey: !0,
                view: !0,
                char: !0,
                charCode: !0,
                key: !0,
                keyCode: !0,
                button: !0,
                buttons: !0,
                clientX: !0,
                clientY: !0,
                offsetX: !0,
                offsetY: !0,
                pointerId: !0,
                pointerType: !0,
                screenX: !0,
                screenY: !0,
                targetTouches: !0,
                toElement: !0,
                touches: !0,
                which: function (e) {
                    var t = e.button;
                    return null == e.which && we.test(e.type) ? (null != e.charCode ? e.charCode : e.keyCode) : !e.which && void 0 !== t && Te.test(e.type) ? (1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0) : e.which;
                },
            },
            w.event.addProp
        ),
        w.each({ mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout" }, function (e, t) {
            w.event.special[e] = {
                delegateType: t,
                bindType: t,
                handle: function (e) {
                    var n,
                        r = this,
                        i = e.relatedTarget,
                        o = e.handleObj;
                    return (i && (i === r || w.contains(r, i))) || ((e.type = o.origType), (n = o.handler.apply(this, arguments)), (e.type = t)), n;
                },
            };
        }),
        w.fn.extend({
            on: function (e, t, n, r) {
                return De(this, e, t, n, r);
            },
            one: function (e, t, n, r) {
                return De(this, e, t, n, r, 1);
            },
            off: function (e, t, n) {
                var r, i;
                if (e && e.preventDefault && e.handleObj) return (r = e.handleObj), w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
                if ("object" == typeof e) {
                    for (i in e) this.off(i, t, e[i]);
                    return this;
                }
                return (
                    (!1 !== t && "function" != typeof t) || ((n = t), (t = void 0)),
                    !1 === n && (n = ke),
                    this.each(function () {
                        w.event.remove(this, e, n, t);
                    })
                );
            },
        });
    var Ne = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
        Ae = /<script|<style|<link/i,
        je = /checked\s*(?:[^=]|=\s*.checked.)/i,
        qe = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
    function Le(e, t) {
        return N(e, "table") && N(11 !== t.nodeType ? t : t.firstChild, "tr") ? w(e).children("tbody")[0] || e : e;
    }
    function He(e) {
        return (e.type = (null !== e.getAttribute("type")) + "/" + e.type), e;
    }
    function Oe(e) {
        return "true/" === (e.type || "").slice(0, 5) ? (e.type = e.type.slice(5)) : e.removeAttribute("type"), e;
    }
    function Pe(e, t) {
        var n, r, i, o, a, s, u, l;
        if (1 === t.nodeType) {
            if (J.hasData(e) && ((o = J.access(e)), (a = J.set(t, o)), (l = o.events))) {
                delete a.handle, (a.events = {});
                for (i in l) for (n = 0, r = l[i].length; n < r; n++) w.event.add(t, i, l[i][n]);
            }
            K.hasData(e) && ((s = K.access(e)), (u = w.extend({}, s)), K.set(t, u));
        }
    }
    function Me(e, t) {
        var n = t.nodeName.toLowerCase();
        "input" === n && pe.test(e.type) ? (t.checked = e.checked) : ("input" !== n && "textarea" !== n) || (t.defaultValue = e.defaultValue);
    }
    function Re(e, t, n, r) {
        t = a.apply([], t);
        var i,
            o,
            s,
            u,
            l,
            c,
            f = 0,
            p = e.length,
            d = p - 1,
            y = t[0],
            v = g(y);
        if (v || (p > 1 && "string" == typeof y && !h.checkClone && je.test(y)))
            return e.each(function (i) {
                var o = e.eq(i);
                v && (t[0] = y.call(this, i, o.html())), Re(o, t, n, r);
            });
        if (p && ((i = xe(t, e[0].ownerDocument, !1, e, r)), (o = i.firstChild), 1 === i.childNodes.length && (i = o), o || r)) {
            for (u = (s = w.map(ye(i, "script"), He)).length; f < p; f++) (l = i), f !== d && ((l = w.clone(l, !0, !0)), u && w.merge(s, ye(l, "script"))), n.call(e[f], l, f);
            if (u)
                for (c = s[s.length - 1].ownerDocument, w.map(s, Oe), f = 0; f < u; f++)
                    (l = s[f]), he.test(l.type || "") && !J.access(l, "globalEval") && w.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? w._evalUrl && w._evalUrl(l.src) : m(l.textContent.replace(qe, ""), c, l));
        }
        return e;
    }
    function Ie(e, t, n) {
        for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || w.cleanData(ye(r)), r.parentNode && (n && w.contains(r.ownerDocument, r) && ve(ye(r, "script")), r.parentNode.removeChild(r));
        return e;
    }
    w.extend({
        htmlPrefilter: function (e) {
            return e.replace(Ne, "<$1></$2>");
        },
        clone: function (e, t, n) {
            var r,
                i,
                o,
                a,
                s = e.cloneNode(!0),
                u = w.contains(e.ownerDocument, e);
            if (!(h.noCloneChecked || (1 !== e.nodeType && 11 !== e.nodeType) || w.isXMLDoc(e))) for (a = ye(s), r = 0, i = (o = ye(e)).length; r < i; r++) Me(o[r], a[r]);
            if (t)
                if (n) for (o = o || ye(e), a = a || ye(s), r = 0, i = o.length; r < i; r++) Pe(o[r], a[r]);
                else Pe(e, s);
            return (a = ye(s, "script")).length > 0 && ve(a, !u && ye(e, "script")), s;
        },
        cleanData: function (e) {
            for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++)
                if (Y(n)) {
                    if ((t = n[J.expando])) {
                        if (t.events) for (r in t.events) i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
                        n[J.expando] = void 0;
                    }
                    n[K.expando] && (n[K.expando] = void 0);
                }
        },
    }),
        w.fn.extend({
            detach: function (e) {
                return Ie(this, e, !0);
            },
            remove: function (e) {
                return Ie(this, e);
            },
            text: function (e) {
                return z(
                    this,
                    function (e) {
                        return void 0 === e
                            ? w.text(this)
                            : this.empty().each(function () {
                                  (1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType) || (this.textContent = e);
                              });
                    },
                    null,
                    e,
                    arguments.length
                );
            },
            append: function () {
                return Re(this, arguments, function (e) {
                    (1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType) || Le(this, e).appendChild(e);
                });
            },
            prepend: function () {
                return Re(this, arguments, function (e) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var t = Le(this, e);
                        t.insertBefore(e, t.firstChild);
                    }
                });
            },
            before: function () {
                return Re(this, arguments, function (e) {
                    this.parentNode && this.parentNode.insertBefore(e, this);
                });
            },
            after: function () {
                return Re(this, arguments, function (e) {
                    this.parentNode && this.parentNode.insertBefore(e, this.nextSibling);
                });
            },
            empty: function () {
                for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (w.cleanData(ye(e, !1)), (e.textContent = ""));
                return this;
            },
            clone: function (e, t) {
                return (
                    (e = null != e && e),
                    (t = null == t ? e : t),
                    this.map(function () {
                        return w.clone(this, e, t);
                    })
                );
            },
            html: function (e) {
                return z(
                    this,
                    function (e) {
                        var t = this[0] || {},
                            n = 0,
                            r = this.length;
                        if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                        if ("string" == typeof e && !Ae.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
                            e = w.htmlPrefilter(e);
                            try {
                                for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (w.cleanData(ye(t, !1)), (t.innerHTML = e));
                                t = 0;
                            } catch (e) {}
                        }
                        t && this.empty().append(e);
                    },
                    null,
                    e,
                    arguments.length
                );
            },
            replaceWith: function () {
                var e = [];
                return Re(
                    this,
                    arguments,
                    function (t) {
                        var n = this.parentNode;
                        w.inArray(this, e) < 0 && (w.cleanData(ye(this)), n && n.replaceChild(t, this));
                    },
                    e
                );
            },
        }),
        w.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function (e, t) {
            w.fn[e] = function (e) {
                for (var n, r = [], i = w(e), o = i.length - 1, a = 0; a <= o; a++) (n = a === o ? this : this.clone(!0)), w(i[a])[t](n), s.apply(r, n.get());
                return this.pushStack(r);
            };
        });
    var We = new RegExp("^(" + re + ")(?!px)[a-z%]+$", "i"),
        $e = function (t) {
            var n = t.ownerDocument.defaultView;
            return (n && n.opener) || (n = e), n.getComputedStyle(t);
        },
        Be = new RegExp(oe.join("|"), "i");
    !(function () {
        function t() {
            if (c) {
                (l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0"),
                    (c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%"),
                    be.appendChild(l).appendChild(c);
                var t = e.getComputedStyle(c);
                (i = "1%" !== t.top),
                    (u = 12 === n(t.marginLeft)),
                    (c.style.right = "60%"),
                    (s = 36 === n(t.right)),
                    (o = 36 === n(t.width)),
                    (c.style.position = "absolute"),
                    (a = 36 === c.offsetWidth || "absolute"),
                    be.removeChild(l),
                    (c = null);
            }
        }
        function n(e) {
            return Math.round(parseFloat(e));
        }
        var i,
            o,
            a,
            s,
            u,
            l = r.createElement("div"),
            c = r.createElement("div");
        c.style &&
            ((c.style.backgroundClip = "content-box"),
            (c.cloneNode(!0).style.backgroundClip = ""),
            (h.clearCloneStyle = "content-box" === c.style.backgroundClip),
            w.extend(h, {
                boxSizingReliable: function () {
                    return t(), o;
                },
                pixelBoxStyles: function () {
                    return t(), s;
                },
                pixelPosition: function () {
                    return t(), i;
                },
                reliableMarginLeft: function () {
                    return t(), u;
                },
                scrollboxSize: function () {
                    return t(), a;
                },
            }));
    })();
    function Fe(e, t, n) {
        var r,
            i,
            o,
            a,
            s = e.style;
        return (
            (n = n || $e(e)) &&
                ("" !== (a = n.getPropertyValue(t) || n[t]) || w.contains(e.ownerDocument, e) || (a = w.style(e, t)),
                !h.pixelBoxStyles() && We.test(a) && Be.test(t) && ((r = s.width), (i = s.minWidth), (o = s.maxWidth), (s.minWidth = s.maxWidth = s.width = a), (a = n.width), (s.width = r), (s.minWidth = i), (s.maxWidth = o))),
            void 0 !== a ? a + "" : a
        );
    }
    function _e(e, t) {
        return {
            get: function () {
                if (!e()) return (this.get = t).apply(this, arguments);
                delete this.get;
            },
        };
    }
    var ze = /^(none|table(?!-c[ea]).+)/,
        Xe = /^--/,
        Ue = { position: "absolute", visibility: "hidden", display: "block" },
        Ve = { letterSpacing: "0", fontWeight: "400" },
        Ge = ["Webkit", "Moz", "ms"],
        Ye = r.createElement("div").style;
    function Qe(e) {
        if (e in Ye) return e;
        var t = e[0].toUpperCase() + e.slice(1),
            n = Ge.length;
        while (n--) if ((e = Ge[n] + t) in Ye) return e;
    }
    function Je(e) {
        var t = w.cssProps[e];
        return t || (t = w.cssProps[e] = Qe(e) || e), t;
    }
    function Ke(e, t, n) {
        var r = ie.exec(t);
        return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t;
    }
    function Ze(e, t, n, r, i, o) {
        var a = "width" === t ? 1 : 0,
            s = 0,
            u = 0;
        if (n === (r ? "border" : "content")) return 0;
        for (; a < 4; a += 2)
            "margin" === n && (u += w.css(e, n + oe[a], !0, i)),
                r
                    ? ("content" === n && (u -= w.css(e, "padding" + oe[a], !0, i)), "margin" !== n && (u -= w.css(e, "border" + oe[a] + "Width", !0, i)))
                    : ((u += w.css(e, "padding" + oe[a], !0, i)), "padding" !== n ? (u += w.css(e, "border" + oe[a] + "Width", !0, i)) : (s += w.css(e, "border" + oe[a] + "Width", !0, i)));
        return !r && o >= 0 && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - 0.5))), u;
    }
    function et(e, t, n) {
        var r = $e(e),
            i = Fe(e, t, r),
            o = "border-box" === w.css(e, "boxSizing", !1, r),
            a = o;
        if (We.test(i)) {
            if (!n) return i;
            i = "auto";
        }
        return (
            (a = a && (h.boxSizingReliable() || i === e.style[t])),
            ("auto" === i || (!parseFloat(i) && "inline" === w.css(e, "display", !1, r))) && ((i = e["offset" + t[0].toUpperCase() + t.slice(1)]), (a = !0)),
            (i = parseFloat(i) || 0) + Ze(e, t, n || (o ? "border" : "content"), a, r, i) + "px"
        );
    }
    w.extend({
        cssHooks: {
            opacity: {
                get: function (e, t) {
                    if (t) {
                        var n = Fe(e, "opacity");
                        return "" === n ? "1" : n;
                    }
                },
            },
        },
        cssNumber: { animationIterationCount: !0, columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 },
        cssProps: {},
        style: function (e, t, n, r) {
            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                var i,
                    o,
                    a,
                    s = G(t),
                    u = Xe.test(t),
                    l = e.style;
                if ((u || (t = Je(s)), (a = w.cssHooks[t] || w.cssHooks[s]), void 0 === n)) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                "string" == (o = typeof n) && (i = ie.exec(n)) && i[1] && ((n = ue(e, t, i)), (o = "number")),
                    null != n &&
                        n === n &&
                        ("number" === o && (n += (i && i[3]) || (w.cssNumber[s] ? "" : "px")),
                        h.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"),
                        (a && "set" in a && void 0 === (n = a.set(e, n, r))) || (u ? l.setProperty(t, n) : (l[t] = n)));
            }
        },
        css: function (e, t, n, r) {
            var i,
                o,
                a,
                s = G(t);
            return (
                Xe.test(t) || (t = Je(s)),
                (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)),
                void 0 === i && (i = Fe(e, t, r)),
                "normal" === i && t in Ve && (i = Ve[t]),
                "" === n || n ? ((o = parseFloat(i)), !0 === n || isFinite(o) ? o || 0 : i) : i
            );
        },
    }),
        w.each(["height", "width"], function (e, t) {
            w.cssHooks[t] = {
                get: function (e, n, r) {
                    if (n)
                        return !ze.test(w.css(e, "display")) || (e.getClientRects().length && e.getBoundingClientRect().width)
                            ? et(e, t, r)
                            : se(e, Ue, function () {
                                  return et(e, t, r);
                              });
                },
                set: function (e, n, r) {
                    var i,
                        o = $e(e),
                        a = "border-box" === w.css(e, "boxSizing", !1, o),
                        s = r && Ze(e, t, r, a, o);
                    return (
                        a && h.scrollboxSize() === o.position && (s -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ze(e, t, "border", !1, o) - 0.5)),
                        s && (i = ie.exec(n)) && "px" !== (i[3] || "px") && ((e.style[t] = n), (n = w.css(e, t))),
                        Ke(e, n, s)
                    );
                },
            };
        }),
        (w.cssHooks.marginLeft = _e(h.reliableMarginLeft, function (e, t) {
            if (t)
                return (
                    (parseFloat(Fe(e, "marginLeft")) ||
                        e.getBoundingClientRect().left -
                            se(e, { marginLeft: 0 }, function () {
                                return e.getBoundingClientRect().left;
                            })) + "px"
                );
        })),
        w.each({ margin: "", padding: "", border: "Width" }, function (e, t) {
            (w.cssHooks[e + t] = {
                expand: function (n) {
                    for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + oe[r] + t] = o[r] || o[r - 2] || o[0];
                    return i;
                },
            }),
                "margin" !== e && (w.cssHooks[e + t].set = Ke);
        }),
        w.fn.extend({
            css: function (e, t) {
                return z(
                    this,
                    function (e, t, n) {
                        var r,
                            i,
                            o = {},
                            a = 0;
                        if (Array.isArray(t)) {
                            for (r = $e(e), i = t.length; a < i; a++) o[t[a]] = w.css(e, t[a], !1, r);
                            return o;
                        }
                        return void 0 !== n ? w.style(e, t, n) : w.css(e, t);
                    },
                    e,
                    t,
                    arguments.length > 1
                );
            },
        });
    function tt(e, t, n, r, i) {
        return new tt.prototype.init(e, t, n, r, i);
    }
    (w.Tween = tt),
        (tt.prototype = {
            constructor: tt,
            init: function (e, t, n, r, i, o) {
                (this.elem = e), (this.prop = n), (this.easing = i || w.easing._default), (this.options = t), (this.start = this.now = this.cur()), (this.end = r), (this.unit = o || (w.cssNumber[n] ? "" : "px"));
            },
            cur: function () {
                var e = tt.propHooks[this.prop];
                return e && e.get ? e.get(this) : tt.propHooks._default.get(this);
            },
            run: function (e) {
                var t,
                    n = tt.propHooks[this.prop];
                return (
                    this.options.duration ? (this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration)) : (this.pos = t = e),
                    (this.now = (this.end - this.start) * t + this.start),
                    this.options.step && this.options.step.call(this.elem, this.now, this),
                    n && n.set ? n.set(this) : tt.propHooks._default.set(this),
                    this
                );
            },
        }),
        (tt.prototype.init.prototype = tt.prototype),
        (tt.propHooks = {
            _default: {
                get: function (e) {
                    var t;
                    return 1 !== e.elem.nodeType || (null != e.elem[e.prop] && null == e.elem.style[e.prop]) ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0;
                },
                set: function (e) {
                    w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || (null == e.elem.style[w.cssProps[e.prop]] && !w.cssHooks[e.prop]) ? (e.elem[e.prop] = e.now) : w.style(e.elem, e.prop, e.now + e.unit);
                },
            },
        }),
        (tt.propHooks.scrollTop = tt.propHooks.scrollLeft = {
            set: function (e) {
                e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now);
            },
        }),
        (w.easing = {
            linear: function (e) {
                return e;
            },
            swing: function (e) {
                return 0.5 - Math.cos(e * Math.PI) / 2;
            },
            _default: "swing",
        }),
        (w.fx = tt.prototype.init),
        (w.fx.step = {});
    var nt,
        rt,
        it = /^(?:toggle|show|hide)$/,
        ot = /queueHooks$/;
    function at() {
        rt && (!1 === r.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(at) : e.setTimeout(at, w.fx.interval), w.fx.tick());
    }
    function st() {
        return (
            e.setTimeout(function () {
                nt = void 0;
            }),
            (nt = Date.now())
        );
    }
    function ut(e, t) {
        var n,
            r = 0,
            i = { height: e };
        for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = oe[r])] = i["padding" + n] = e;
        return t && (i.opacity = i.width = e), i;
    }
    function lt(e, t, n) {
        for (var r, i = (pt.tweeners[t] || []).concat(pt.tweeners["*"]), o = 0, a = i.length; o < a; o++) if ((r = i[o].call(n, t, e))) return r;
    }
    function ct(e, t, n) {
        var r,
            i,
            o,
            a,
            s,
            u,
            l,
            c,
            f = "width" in t || "height" in t,
            p = this,
            d = {},
            h = e.style,
            g = e.nodeType && ae(e),
            y = J.get(e, "fxshow");
        n.queue ||
            (null == (a = w._queueHooks(e, "fx")).unqueued &&
                ((a.unqueued = 0),
                (s = a.empty.fire),
                (a.empty.fire = function () {
                    a.unqueued || s();
                })),
            a.unqueued++,
            p.always(function () {
                p.always(function () {
                    a.unqueued--, w.queue(e, "fx").length || a.empty.fire();
                });
            }));
        for (r in t)
            if (((i = t[r]), it.test(i))) {
                if ((delete t[r], (o = o || "toggle" === i), i === (g ? "hide" : "show"))) {
                    if ("show" !== i || !y || void 0 === y[r]) continue;
                    g = !0;
                }
                d[r] = (y && y[r]) || w.style(e, r);
            }
        if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(d)) {
            f &&
                1 === e.nodeType &&
                ((n.overflow = [h.overflow, h.overflowX, h.overflowY]),
                null == (l = y && y.display) && (l = J.get(e, "display")),
                "none" === (c = w.css(e, "display")) && (l ? (c = l) : (fe([e], !0), (l = e.style.display || l), (c = w.css(e, "display")), fe([e]))),
                ("inline" === c || ("inline-block" === c && null != l)) &&
                    "none" === w.css(e, "float") &&
                    (u ||
                        (p.done(function () {
                            h.display = l;
                        }),
                        null == l && ((c = h.display), (l = "none" === c ? "" : c))),
                    (h.display = "inline-block"))),
                n.overflow &&
                    ((h.overflow = "hidden"),
                    p.always(function () {
                        (h.overflow = n.overflow[0]), (h.overflowX = n.overflow[1]), (h.overflowY = n.overflow[2]);
                    })),
                (u = !1);
            for (r in d)
                u ||
                    (y ? "hidden" in y && (g = y.hidden) : (y = J.access(e, "fxshow", { display: l })),
                    o && (y.hidden = !g),
                    g && fe([e], !0),
                    p.done(function () {
                        g || fe([e]), J.remove(e, "fxshow");
                        for (r in d) w.style(e, r, d[r]);
                    })),
                    (u = lt(g ? y[r] : 0, r, p)),
                    r in y || ((y[r] = u.start), g && ((u.end = u.start), (u.start = 0)));
        }
    }
    function ft(e, t) {
        var n, r, i, o, a;
        for (n in e)
            if (((r = G(n)), (i = t[r]), (o = e[n]), Array.isArray(o) && ((i = o[1]), (o = e[n] = o[0])), n !== r && ((e[r] = o), delete e[n]), (a = w.cssHooks[r]) && "expand" in a)) {
                (o = a.expand(o)), delete e[r];
                for (n in o) n in e || ((e[n] = o[n]), (t[n] = i));
            } else t[r] = i;
    }
    function pt(e, t, n) {
        var r,
            i,
            o = 0,
            a = pt.prefilters.length,
            s = w.Deferred().always(function () {
                delete u.elem;
            }),
            u = function () {
                if (i) return !1;
                for (var t = nt || st(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), o = 0, a = l.tweens.length; o < a; o++) l.tweens[o].run(r);
                return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1);
            },
            l = s.promise({
                elem: e,
                props: w.extend({}, t),
                opts: w.extend(!0, { specialEasing: {}, easing: w.easing._default }, n),
                originalProperties: t,
                originalOptions: n,
                startTime: nt || st(),
                duration: n.duration,
                tweens: [],
                createTween: function (t, n) {
                    var r = w.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
                    return l.tweens.push(r), r;
                },
                stop: function (t) {
                    var n = 0,
                        r = t ? l.tweens.length : 0;
                    if (i) return this;
                    for (i = !0; n < r; n++) l.tweens[n].run(1);
                    return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this;
                },
            }),
            c = l.props;
        for (ft(c, l.opts.specialEasing); o < a; o++) if ((r = pt.prefilters[o].call(l, e, c, l.opts))) return g(r.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)), r;
        return (
            w.map(c, lt, l),
            g(l.opts.start) && l.opts.start.call(e, l),
            l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always),
            w.fx.timer(w.extend(u, { elem: e, anim: l, queue: l.opts.queue })),
            l
        );
    }
    (w.Animation = w.extend(pt, {
        tweeners: {
            "*": [
                function (e, t) {
                    var n = this.createTween(e, t);
                    return ue(n.elem, e, ie.exec(t), n), n;
                },
            ],
        },
        tweener: function (e, t) {
            g(e) ? ((t = e), (e = ["*"])) : (e = e.match(M));
            for (var n, r = 0, i = e.length; r < i; r++) (n = e[r]), (pt.tweeners[n] = pt.tweeners[n] || []), pt.tweeners[n].unshift(t);
        },
        prefilters: [ct],
        prefilter: function (e, t) {
            t ? pt.prefilters.unshift(e) : pt.prefilters.push(e);
        },
    })),
        (w.speed = function (e, t, n) {
            var r = e && "object" == typeof e ? w.extend({}, e) : { complete: n || (!n && t) || (g(e) && e), duration: e, easing: (n && t) || (t && !g(t) && t) };
            return (
                w.fx.off ? (r.duration = 0) : "number" != typeof r.duration && (r.duration in w.fx.speeds ? (r.duration = w.fx.speeds[r.duration]) : (r.duration = w.fx.speeds._default)),
                (null != r.queue && !0 !== r.queue) || (r.queue = "fx"),
                (r.old = r.complete),
                (r.complete = function () {
                    g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue);
                }),
                r
            );
        }),
        w.fn.extend({
            fadeTo: function (e, t, n, r) {
                return this.filter(ae).css("opacity", 0).show().end().animate({ opacity: t }, e, n, r);
            },
            animate: function (e, t, n, r) {
                var i = w.isEmptyObject(e),
                    o = w.speed(t, n, r),
                    a = function () {
                        var t = pt(this, w.extend({}, e), o);
                        (i || J.get(this, "finish")) && t.stop(!0);
                    };
                return (a.finish = a), i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a);
            },
            stop: function (e, t, n) {
                var r = function (e) {
                    var t = e.stop;
                    delete e.stop, t(n);
                };
                return (
                    "string" != typeof e && ((n = t), (t = e), (e = void 0)),
                    t && !1 !== e && this.queue(e || "fx", []),
                    this.each(function () {
                        var t = !0,
                            i = null != e && e + "queueHooks",
                            o = w.timers,
                            a = J.get(this);
                        if (i) a[i] && a[i].stop && r(a[i]);
                        else for (i in a) a[i] && a[i].stop && ot.test(i) && r(a[i]);
                        for (i = o.length; i--; ) o[i].elem !== this || (null != e && o[i].queue !== e) || (o[i].anim.stop(n), (t = !1), o.splice(i, 1));
                        (!t && n) || w.dequeue(this, e);
                    })
                );
            },
            finish: function (e) {
                return (
                    !1 !== e && (e = e || "fx"),
                    this.each(function () {
                        var t,
                            n = J.get(this),
                            r = n[e + "queue"],
                            i = n[e + "queueHooks"],
                            o = w.timers,
                            a = r ? r.length : 0;
                        for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--; ) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
                        for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
                        delete n.finish;
                    })
                );
            },
        }),
        w.each(["toggle", "show", "hide"], function (e, t) {
            var n = w.fn[t];
            w.fn[t] = function (e, r, i) {
                return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i);
            };
        }),
        w.each({ slideDown: ut("show"), slideUp: ut("hide"), slideToggle: ut("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function (e, t) {
            w.fn[e] = function (e, n, r) {
                return this.animate(t, e, n, r);
            };
        }),
        (w.timers = []),
        (w.fx.tick = function () {
            var e,
                t = 0,
                n = w.timers;
            for (nt = Date.now(); t < n.length; t++) (e = n[t])() || n[t] !== e || n.splice(t--, 1);
            n.length || w.fx.stop(), (nt = void 0);
        }),
        (w.fx.timer = function (e) {
            w.timers.push(e), w.fx.start();
        }),
        (w.fx.interval = 13),
        (w.fx.start = function () {
            rt || ((rt = !0), at());
        }),
        (w.fx.stop = function () {
            rt = null;
        }),
        (w.fx.speeds = { slow: 600, fast: 200, _default: 400 }),
        (w.fn.delay = function (t, n) {
            return (
                (t = w.fx ? w.fx.speeds[t] || t : t),
                (n = n || "fx"),
                this.queue(n, function (n, r) {
                    var i = e.setTimeout(n, t);
                    r.stop = function () {
                        e.clearTimeout(i);
                    };
                })
            );
        }),
        (function () {
            var e = r.createElement("input"),
                t = r.createElement("select").appendChild(r.createElement("option"));
            (e.type = "checkbox"), (h.checkOn = "" !== e.value), (h.optSelected = t.selected), ((e = r.createElement("input")).value = "t"), (e.type = "radio"), (h.radioValue = "t" === e.value);
        })();
    var dt,
        ht = w.expr.attrHandle;
    w.fn.extend({
        attr: function (e, t) {
            return z(this, w.attr, e, t, arguments.length > 1);
        },
        removeAttr: function (e) {
            return this.each(function () {
                w.removeAttr(this, e);
            });
        },
    }),
        w.extend({
            attr: function (e, t, n) {
                var r,
                    i,
                    o = e.nodeType;
                if (3 !== o && 8 !== o && 2 !== o)
                    return "undefined" == typeof e.getAttribute
                        ? w.prop(e, t, n)
                        : ((1 === o && w.isXMLDoc(e)) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? dt : void 0)),
                          void 0 !== n
                              ? null === n
                                  ? void w.removeAttr(e, t)
                                  : i && "set" in i && void 0 !== (r = i.set(e, n, t))
                                  ? r
                                  : (e.setAttribute(t, n + ""), n)
                              : i && "get" in i && null !== (r = i.get(e, t))
                              ? r
                              : null == (r = w.find.attr(e, t))
                              ? void 0
                              : r);
            },
            attrHooks: {
                type: {
                    set: function (e, t) {
                        if (!h.radioValue && "radio" === t && N(e, "input")) {
                            var n = e.value;
                            return e.setAttribute("type", t), n && (e.value = n), t;
                        }
                    },
                },
            },
            removeAttr: function (e, t) {
                var n,
                    r = 0,
                    i = t && t.match(M);
                if (i && 1 === e.nodeType) while ((n = i[r++])) e.removeAttribute(n);
            },
        }),
        (dt = {
            set: function (e, t, n) {
                return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n;
            },
        }),
        w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) {
            var n = ht[t] || w.find.attr;
            ht[t] = function (e, t, r) {
                var i,
                    o,
                    a = t.toLowerCase();
                return r || ((o = ht[a]), (ht[a] = i), (i = null != n(e, t, r) ? a : null), (ht[a] = o)), i;
            };
        });
    var gt = /^(?:input|select|textarea|button)$/i,
        yt = /^(?:a|area)$/i;
    w.fn.extend({
        prop: function (e, t) {
            return z(this, w.prop, e, t, arguments.length > 1);
        },
        removeProp: function (e) {
            return this.each(function () {
                delete this[w.propFix[e] || e];
            });
        },
    }),
        w.extend({
            prop: function (e, t, n) {
                var r,
                    i,
                    o = e.nodeType;
                if (3 !== o && 8 !== o && 2 !== o)
                    return (
                        (1 === o && w.isXMLDoc(e)) || ((t = w.propFix[t] || t), (i = w.propHooks[t])),
                        void 0 !== n ? (i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e[t] = n)) : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
                    );
            },
            propHooks: {
                tabIndex: {
                    get: function (e) {
                        var t = w.find.attr(e, "tabindex");
                        return t ? parseInt(t, 10) : gt.test(e.nodeName) || (yt.test(e.nodeName) && e.href) ? 0 : -1;
                    },
                },
            },
            propFix: { for: "htmlFor", class: "className" },
        }),
        h.optSelected ||
            (w.propHooks.selected = {
                get: function (e) {
                    var t = e.parentNode;
                    return t && t.parentNode && t.parentNode.selectedIndex, null;
                },
                set: function (e) {
                    var t = e.parentNode;
                    t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex);
                },
            }),
        w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
            w.propFix[this.toLowerCase()] = this;
        });
    function vt(e) {
        return (e.match(M) || []).join(" ");
    }
    function mt(e) {
        return (e.getAttribute && e.getAttribute("class")) || "";
    }
    function xt(e) {
        return Array.isArray(e) ? e : "string" == typeof e ? e.match(M) || [] : [];
    }
    w.fn.extend({
        addClass: function (e) {
            var t,
                n,
                r,
                i,
                o,
                a,
                s,
                u = 0;
            if (g(e))
                return this.each(function (t) {
                    w(this).addClass(e.call(this, t, mt(this)));
                });
            if ((t = xt(e)).length)
                while ((n = this[u++]))
                    if (((i = mt(n)), (r = 1 === n.nodeType && " " + vt(i) + " "))) {
                        a = 0;
                        while ((o = t[a++])) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                        i !== (s = vt(r)) && n.setAttribute("class", s);
                    }
            return this;
        },
        removeClass: function (e) {
            var t,
                n,
                r,
                i,
                o,
                a,
                s,
                u = 0;
            if (g(e))
                return this.each(function (t) {
                    w(this).removeClass(e.call(this, t, mt(this)));
                });
            if (!arguments.length) return this.attr("class", "");
            if ((t = xt(e)).length)
                while ((n = this[u++]))
                    if (((i = mt(n)), (r = 1 === n.nodeType && " " + vt(i) + " "))) {
                        a = 0;
                        while ((o = t[a++])) while (r.indexOf(" " + o + " ") > -1) r = r.replace(" " + o + " ", " ");
                        i !== (s = vt(r)) && n.setAttribute("class", s);
                    }
            return this;
        },
        toggleClass: function (e, t) {
            var n = typeof e,
                r = "string" === n || Array.isArray(e);
            return "boolean" == typeof t && r
                ? t
                    ? this.addClass(e)
                    : this.removeClass(e)
                : g(e)
                ? this.each(function (n) {
                      w(this).toggleClass(e.call(this, n, mt(this), t), t);
                  })
                : this.each(function () {
                      var t, i, o, a;
                      if (r) {
                          (i = 0), (o = w(this)), (a = xt(e));
                          while ((t = a[i++])) o.hasClass(t) ? o.removeClass(t) : o.addClass(t);
                      } else (void 0 !== e && "boolean" !== n) || ((t = mt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || ""));
                  });
        },
        hasClass: function (e) {
            var t,
                n,
                r = 0;
            t = " " + e + " ";
            while ((n = this[r++])) if (1 === n.nodeType && (" " + vt(mt(n)) + " ").indexOf(t) > -1) return !0;
            return !1;
        },
    });
    var bt = /\r/g;
    w.fn.extend({
        val: function (e) {
            var t,
                n,
                r,
                i = this[0];
            {
                if (arguments.length)
                    return (
                        (r = g(e)),
                        this.each(function (n) {
                            var i;
                            1 === this.nodeType &&
                                (null == (i = r ? e.call(this, n, w(this).val()) : e)
                                    ? (i = "")
                                    : "number" == typeof i
                                    ? (i += "")
                                    : Array.isArray(i) &&
                                      (i = w.map(i, function (e) {
                                          return null == e ? "" : e + "";
                                      })),
                                ((t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value")) || (this.value = i));
                        })
                    );
                if (i) return (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof (n = i.value) ? n.replace(bt, "") : null == n ? "" : n;
            }
        },
    }),
        w.extend({
            valHooks: {
                option: {
                    get: function (e) {
                        var t = w.find.attr(e, "value");
                        return null != t ? t : vt(w.text(e));
                    },
                },
                select: {
                    get: function (e) {
                        var t,
                            n,
                            r,
                            i = e.options,
                            o = e.selectedIndex,
                            a = "select-one" === e.type,
                            s = a ? null : [],
                            u = a ? o + 1 : i.length;
                        for (r = o < 0 ? u : a ? o : 0; r < u; r++)
                            if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))) {
                                if (((t = w(n).val()), a)) return t;
                                s.push(t);
                            }
                        return s;
                    },
                    set: function (e, t) {
                        var n,
                            r,
                            i = e.options,
                            o = w.makeArray(t),
                            a = i.length;
                        while (a--) ((r = i[a]).selected = w.inArray(w.valHooks.option.get(r), o) > -1) && (n = !0);
                        return n || (e.selectedIndex = -1), o;
                    },
                },
            },
        }),
        w.each(["radio", "checkbox"], function () {
            (w.valHooks[this] = {
                set: function (e, t) {
                    if (Array.isArray(t)) return (e.checked = w.inArray(w(e).val(), t) > -1);
                },
            }),
                h.checkOn ||
                    (w.valHooks[this].get = function (e) {
                        return null === e.getAttribute("value") ? "on" : e.value;
                    });
        }),
        (h.focusin = "onfocusin" in e);
    var wt = /^(?:focusinfocus|focusoutblur)$/,
        Tt = function (e) {
            e.stopPropagation();
        };
    w.extend(w.event, {
        trigger: function (t, n, i, o) {
            var a,
                s,
                u,
                l,
                c,
                p,
                d,
                h,
                v = [i || r],
                m = f.call(t, "type") ? t.type : t,
                x = f.call(t, "namespace") ? t.namespace.split(".") : [];
            if (
                ((s = h = u = i = i || r),
                3 !== i.nodeType &&
                    8 !== i.nodeType &&
                    !wt.test(m + w.event.triggered) &&
                    (m.indexOf(".") > -1 && ((m = (x = m.split(".")).shift()), x.sort()),
                    (c = m.indexOf(":") < 0 && "on" + m),
                    (t = t[w.expando] ? t : new w.Event(m, "object" == typeof t && t)),
                    (t.isTrigger = o ? 2 : 3),
                    (t.namespace = x.join(".")),
                    (t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + x.join("\\.(?:.*\\.|)") + "(\\.|$)") : null),
                    (t.result = void 0),
                    t.target || (t.target = i),
                    (n = null == n ? [t] : w.makeArray(n, [t])),
                    (d = w.event.special[m] || {}),
                    o || !d.trigger || !1 !== d.trigger.apply(i, n)))
            ) {
                if (!o && !d.noBubble && !y(i)) {
                    for (l = d.delegateType || m, wt.test(l + m) || (s = s.parentNode); s; s = s.parentNode) v.push(s), (u = s);
                    u === (i.ownerDocument || r) && v.push(u.defaultView || u.parentWindow || e);
                }
                a = 0;
                while ((s = v[a++]) && !t.isPropagationStopped())
                    (h = s),
                        (t.type = a > 1 ? l : d.bindType || m),
                        (p = (J.get(s, "events") || {})[t.type] && J.get(s, "handle")) && p.apply(s, n),
                        (p = c && s[c]) && p.apply && Y(s) && ((t.result = p.apply(s, n)), !1 === t.result && t.preventDefault());
                return (
                    (t.type = m),
                    o ||
                        t.isDefaultPrevented() ||
                        (d._default && !1 !== d._default.apply(v.pop(), n)) ||
                        !Y(i) ||
                        (c &&
                            g(i[m]) &&
                            !y(i) &&
                            ((u = i[c]) && (i[c] = null),
                            (w.event.triggered = m),
                            t.isPropagationStopped() && h.addEventListener(m, Tt),
                            i[m](),
                            t.isPropagationStopped() && h.removeEventListener(m, Tt),
                            (w.event.triggered = void 0),
                            u && (i[c] = u))),
                    t.result
                );
            }
        },
        simulate: function (e, t, n) {
            var r = w.extend(new w.Event(), n, { type: e, isSimulated: !0 });
            w.event.trigger(r, null, t);
        },
    }),
        w.fn.extend({
            trigger: function (e, t) {
                return this.each(function () {
                    w.event.trigger(e, t, this);
                });
            },
            triggerHandler: function (e, t) {
                var n = this[0];
                if (n) return w.event.trigger(e, t, n, !0);
            },
        }),
        h.focusin ||
            w.each({ focus: "focusin", blur: "focusout" }, function (e, t) {
                var n = function (e) {
                    w.event.simulate(t, e.target, w.event.fix(e));
                };
                w.event.special[t] = {
                    setup: function () {
                        var r = this.ownerDocument || this,
                            i = J.access(r, t);
                        i || r.addEventListener(e, n, !0), J.access(r, t, (i || 0) + 1);
                    },
                    teardown: function () {
                        var r = this.ownerDocument || this,
                            i = J.access(r, t) - 1;
                        i ? J.access(r, t, i) : (r.removeEventListener(e, n, !0), J.remove(r, t));
                    },
                };
            });
    var Ct = e.location,
        Et = Date.now(),
        kt = /\?/;
    w.parseXML = function (t) {
        var n;
        if (!t || "string" != typeof t) return null;
        try {
            n = new e.DOMParser().parseFromString(t, "text/xml");
        } catch (e) {
            n = void 0;
        }
        return (n && !n.getElementsByTagName("parsererror").length) || w.error("Invalid XML: " + t), n;
    };
    var St = /\[\]$/,
        Dt = /\r?\n/g,
        Nt = /^(?:submit|button|image|reset|file)$/i,
        At = /^(?:input|select|textarea|keygen)/i;
    function jt(e, t, n, r) {
        var i;
        if (Array.isArray(t))
            w.each(t, function (t, i) {
                n || St.test(e) ? r(e, i) : jt(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r);
            });
        else if (n || "object" !== x(t)) r(e, t);
        else for (i in t) jt(e + "[" + i + "]", t[i], n, r);
    }
    (w.param = function (e, t) {
        var n,
            r = [],
            i = function (e, t) {
                var n = g(t) ? t() : t;
                r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n);
            };
        if (Array.isArray(e) || (e.jquery && !w.isPlainObject(e)))
            w.each(e, function () {
                i(this.name, this.value);
            });
        else for (n in e) jt(n, e[n], t, i);
        return r.join("&");
    }),
        w.fn.extend({
            serialize: function () {
                return w.param(this.serializeArray());
            },
            serializeArray: function () {
                return this.map(function () {
                    var e = w.prop(this, "elements");
                    return e ? w.makeArray(e) : this;
                })
                    .filter(function () {
                        var e = this.type;
                        return this.name && !w(this).is(":disabled") && At.test(this.nodeName) && !Nt.test(e) && (this.checked || !pe.test(e));
                    })
                    .map(function (e, t) {
                        var n = w(this).val();
                        return null == n
                            ? null
                            : Array.isArray(n)
                            ? w.map(n, function (e) {
                                  return { name: t.name, value: e.replace(Dt, "\r\n") };
                              })
                            : { name: t.name, value: n.replace(Dt, "\r\n") };
                    })
                    .get();
            },
        });
    var qt = /%20/g,
        Lt = /#.*$/,
        Ht = /([?&])_=[^&]*/,
        Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        Mt = /^(?:GET|HEAD)$/,
        Rt = /^\/\//,
        It = {},
        Wt = {},
        $t = "*/".concat("*"),
        Bt = r.createElement("a");
    Bt.href = Ct.href;
    function Ft(e) {
        return function (t, n) {
            "string" != typeof t && ((n = t), (t = "*"));
            var r,
                i = 0,
                o = t.toLowerCase().match(M) || [];
            if (g(n)) while ((r = o[i++])) "+" === r[0] ? ((r = r.slice(1) || "*"), (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n);
        };
    }
    function _t(e, t, n, r) {
        var i = {},
            o = e === Wt;
        function a(s) {
            var u;
            return (
                (i[s] = !0),
                w.each(e[s] || [], function (e, s) {
                    var l = s(t, n, r);
                    return "string" != typeof l || o || i[l] ? (o ? !(u = l) : void 0) : (t.dataTypes.unshift(l), a(l), !1);
                }),
                u
            );
        }
        return a(t.dataTypes[0]) || (!i["*"] && a("*"));
    }
    function zt(e, t) {
        var n,
            r,
            i = w.ajaxSettings.flatOptions || {};
        for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
        return r && w.extend(!0, e, r), e;
    }
    function Xt(e, t, n) {
        var r,
            i,
            o,
            a,
            s = e.contents,
            u = e.dataTypes;
        while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
        if (r)
            for (i in s)
                if (s[i] && s[i].test(r)) {
                    u.unshift(i);
                    break;
                }
        if (u[0] in n) o = u[0];
        else {
            for (i in n) {
                if (!u[0] || e.converters[i + " " + u[0]]) {
                    o = i;
                    break;
                }
                a || (a = i);
            }
            o = o || a;
        }
        if (o) return o !== u[0] && u.unshift(o), n[o];
    }
    function Ut(e, t, n, r) {
        var i,
            o,
            a,
            s,
            u,
            l = {},
            c = e.dataTypes.slice();
        if (c[1]) for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
        o = c.shift();
        while (o)
            if ((e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), (u = o), (o = c.shift())))
                if ("*" === o) o = u;
                else if ("*" !== u && u !== o) {
                    if (!(a = l[u + " " + o] || l["* " + o]))
                        for (i in l)
                            if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                                !0 === a ? (a = l[i]) : !0 !== l[i] && ((o = s[0]), c.unshift(s[1]));
                                break;
                            }
                    if (!0 !== a)
                        if (a && e["throws"]) t = a(t);
                        else
                            try {
                                t = a(t);
                            } catch (e) {
                                return { state: "parsererror", error: a ? e : "No conversion from " + u + " to " + o };
                            }
                }
        return { state: "success", data: t };
    }
    w.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: Ct.href,
            type: "GET",
            isLocal: Pt.test(Ct.protocol),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: { "*": $t, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" },
            contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ },
            responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" },
            converters: { "* text": String, "text html": !0, "text json": JSON.parse, "text xml": w.parseXML },
            flatOptions: { url: !0, context: !0 },
        },
        ajaxSetup: function (e, t) {
            return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e);
        },
        ajaxPrefilter: Ft(It),
        ajaxTransport: Ft(Wt),
        ajax: function (t, n) {
            "object" == typeof t && ((n = t), (t = void 0)), (n = n || {});
            var i,
                o,
                a,
                s,
                u,
                l,
                c,
                f,
                p,
                d,
                h = w.ajaxSetup({}, n),
                g = h.context || h,
                y = h.context && (g.nodeType || g.jquery) ? w(g) : w.event,
                v = w.Deferred(),
                m = w.Callbacks("once memory"),
                x = h.statusCode || {},
                b = {},
                T = {},
                C = "canceled",
                E = {
                    readyState: 0,
                    getResponseHeader: function (e) {
                        var t;
                        if (c) {
                            if (!s) {
                                s = {};
                                while ((t = Ot.exec(a))) s[t[1].toLowerCase()] = t[2];
                            }
                            t = s[e.toLowerCase()];
                        }
                        return null == t ? null : t;
                    },
                    getAllResponseHeaders: function () {
                        return c ? a : null;
                    },
                    setRequestHeader: function (e, t) {
                        return null == c && ((e = T[e.toLowerCase()] = T[e.toLowerCase()] || e), (b[e] = t)), this;
                    },
                    overrideMimeType: function (e) {
                        return null == c && (h.mimeType = e), this;
                    },
                    statusCode: function (e) {
                        var t;
                        if (e)
                            if (c) E.always(e[E.status]);
                            else for (t in e) x[t] = [x[t], e[t]];
                        return this;
                    },
                    abort: function (e) {
                        var t = e || C;
                        return i && i.abort(t), k(0, t), this;
                    },
                };
            if (
                (v.promise(E),
                (h.url = ((t || h.url || Ct.href) + "").replace(Rt, Ct.protocol + "//")),
                (h.type = n.method || n.type || h.method || h.type),
                (h.dataTypes = (h.dataType || "*").toLowerCase().match(M) || [""]),
                null == h.crossDomain)
            ) {
                l = r.createElement("a");
                try {
                    (l.href = h.url), (l.href = l.href), (h.crossDomain = Bt.protocol + "//" + Bt.host != l.protocol + "//" + l.host);
                } catch (e) {
                    h.crossDomain = !0;
                }
            }
            if ((h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), _t(It, h, n, E), c)) return E;
            (f = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"),
                (h.type = h.type.toUpperCase()),
                (h.hasContent = !Mt.test(h.type)),
                (o = h.url.replace(Lt, "")),
                h.hasContent
                    ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qt, "+"))
                    : ((d = h.url.slice(o.length)),
                      h.data && (h.processData || "string" == typeof h.data) && ((o += (kt.test(o) ? "&" : "?") + h.data), delete h.data),
                      !1 === h.cache && ((o = o.replace(Ht, "$1")), (d = (kt.test(o) ? "&" : "?") + "_=" + Et++ + d)),
                      (h.url = o + d)),
                h.ifModified && (w.lastModified[o] && E.setRequestHeader("If-Modified-Since", w.lastModified[o]), w.etag[o] && E.setRequestHeader("If-None-Match", w.etag[o])),
                ((h.data && h.hasContent && !1 !== h.contentType) || n.contentType) && E.setRequestHeader("Content-Type", h.contentType),
                E.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "") : h.accepts["*"]);
            for (p in h.headers) E.setRequestHeader(p, h.headers[p]);
            if (h.beforeSend && (!1 === h.beforeSend.call(g, E, h) || c)) return E.abort();
            if (((C = "abort"), m.add(h.complete), E.done(h.success), E.fail(h.error), (i = _t(Wt, h, n, E)))) {
                if (((E.readyState = 1), f && y.trigger("ajaxSend", [E, h]), c)) return E;
                h.async &&
                    h.timeout > 0 &&
                    (u = e.setTimeout(function () {
                        E.abort("timeout");
                    }, h.timeout));
                try {
                    (c = !1), i.send(b, k);
                } catch (e) {
                    if (c) throw e;
                    k(-1, e);
                }
            } else k(-1, "No Transport");
            function k(t, n, r, s) {
                var l,
                    p,
                    d,
                    b,
                    T,
                    C = n;
                c ||
                    ((c = !0),
                    u && e.clearTimeout(u),
                    (i = void 0),
                    (a = s || ""),
                    (E.readyState = t > 0 ? 4 : 0),
                    (l = (t >= 200 && t < 300) || 304 === t),
                    r && (b = Xt(h, E, r)),
                    (b = Ut(h, b, E, l)),
                    l
                        ? (h.ifModified && ((T = E.getResponseHeader("Last-Modified")) && (w.lastModified[o] = T), (T = E.getResponseHeader("etag")) && (w.etag[o] = T)),
                          204 === t || "HEAD" === h.type ? (C = "nocontent") : 304 === t ? (C = "notmodified") : ((C = b.state), (p = b.data), (l = !(d = b.error))))
                        : ((d = C), (!t && C) || ((C = "error"), t < 0 && (t = 0))),
                    (E.status = t),
                    (E.statusText = (n || C) + ""),
                    l ? v.resolveWith(g, [p, C, E]) : v.rejectWith(g, [E, C, d]),
                    E.statusCode(x),
                    (x = void 0),
                    f && y.trigger(l ? "ajaxSuccess" : "ajaxError", [E, h, l ? p : d]),
                    m.fireWith(g, [E, C]),
                    f && (y.trigger("ajaxComplete", [E, h]), --w.active || w.event.trigger("ajaxStop")));
            }
            return E;
        },
        getJSON: function (e, t, n) {
            return w.get(e, t, n, "json");
        },
        getScript: function (e, t) {
            return w.get(e, void 0, t, "script");
        },
    }),
        w.each(["get", "post"], function (e, t) {
            w[t] = function (e, n, r, i) {
                return g(n) && ((i = i || r), (r = n), (n = void 0)), w.ajax(w.extend({ url: e, type: t, dataType: i, data: n, success: r }, w.isPlainObject(e) && e));
            };
        }),
        (w._evalUrl = function (e) {
            return w.ajax({ url: e, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, throws: !0 });
        }),
        w.fn.extend({
            wrapAll: function (e) {
                var t;
                return (
                    this[0] &&
                        (g(e) && (e = e.call(this[0])),
                        (t = w(e, this[0].ownerDocument).eq(0).clone(!0)),
                        this[0].parentNode && t.insertBefore(this[0]),
                        t
                            .map(function () {
                                var e = this;
                                while (e.firstElementChild) e = e.firstElementChild;
                                return e;
                            })
                            .append(this)),
                    this
                );
            },
            wrapInner: function (e) {
                return g(e)
                    ? this.each(function (t) {
                          w(this).wrapInner(e.call(this, t));
                      })
                    : this.each(function () {
                          var t = w(this),
                              n = t.contents();
                          n.length ? n.wrapAll(e) : t.append(e);
                      });
            },
            wrap: function (e) {
                var t = g(e);
                return this.each(function (n) {
                    w(this).wrapAll(t ? e.call(this, n) : e);
                });
            },
            unwrap: function (e) {
                return (
                    this.parent(e)
                        .not("body")
                        .each(function () {
                            w(this).replaceWith(this.childNodes);
                        }),
                    this
                );
            },
        }),
        (w.expr.pseudos.hidden = function (e) {
            return !w.expr.pseudos.visible(e);
        }),
        (w.expr.pseudos.visible = function (e) {
            return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length);
        }),
        (w.ajaxSettings.xhr = function () {
            try {
                return new e.XMLHttpRequest();
            } catch (e) {}
        });
    var Vt = { 0: 200, 1223: 204 },
        Gt = w.ajaxSettings.xhr();
    (h.cors = !!Gt && "withCredentials" in Gt),
        (h.ajax = Gt = !!Gt),
        w.ajaxTransport(function (t) {
            var n, r;
            if (h.cors || (Gt && !t.crossDomain))
                return {
                    send: function (i, o) {
                        var a,
                            s = t.xhr();
                        if ((s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)) for (a in t.xhrFields) s[a] = t.xhrFields[a];
                        t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");
                        for (a in i) s.setRequestHeader(a, i[a]);
                        (n = function (e) {
                            return function () {
                                n &&
                                    ((n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null),
                                    "abort" === e
                                        ? s.abort()
                                        : "error" === e
                                        ? "number" != typeof s.status
                                            ? o(0, "error")
                                            : o(s.status, s.statusText)
                                        : o(Vt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? { binary: s.response } : { text: s.responseText }, s.getAllResponseHeaders()));
                            };
                        }),
                            (s.onload = n()),
                            (r = s.onerror = s.ontimeout = n("error")),
                            void 0 !== s.onabort
                                ? (s.onabort = r)
                                : (s.onreadystatechange = function () {
                                      4 === s.readyState &&
                                          e.setTimeout(function () {
                                              n && r();
                                          });
                                  }),
                            (n = n("abort"));
                        try {
                            s.send((t.hasContent && t.data) || null);
                        } catch (e) {
                            if (n) throw e;
                        }
                    },
                    abort: function () {
                        n && n();
                    },
                };
        }),
        w.ajaxPrefilter(function (e) {
            e.crossDomain && (e.contents.script = !1);
        }),
        w.ajaxSetup({
            accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" },
            contents: { script: /\b(?:java|ecma)script\b/ },
            converters: {
                "text script": function (e) {
                    return w.globalEval(e), e;
                },
            },
        }),
        w.ajaxPrefilter("script", function (e) {
            void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET");
        }),
        w.ajaxTransport("script", function (e) {
            if (e.crossDomain) {
                var t, n;
                return {
                    send: function (i, o) {
                        (t = w("<script>")
                            .prop({ charset: e.scriptCharset, src: e.url })
                            .on(
                                "load error",
                                (n = function (e) {
                                    t.remove(), (n = null), e && o("error" === e.type ? 404 : 200, e.type);
                                })
                            )),
                            r.head.appendChild(t[0]);
                    },
                    abort: function () {
                        n && n();
                    },
                };
            }
        });
    var Yt = [],
        Qt = /(=)\?(?=&|$)|\?\?/;
    w.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function () {
            var e = Yt.pop() || w.expando + "_" + Et++;
            return (this[e] = !0), e;
        },
    }),
        w.ajaxPrefilter("json jsonp", function (t, n, r) {
            var i,
                o,
                a,
                s = !1 !== t.jsonp && (Qt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Qt.test(t.data) && "data");
            if (s || "jsonp" === t.dataTypes[0])
                return (
                    (i = t.jsonpCallback = g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback),
                    s ? (t[s] = t[s].replace(Qt, "$1" + i)) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i),
                    (t.converters["script json"] = function () {
                        return a || w.error(i + " was not called"), a[0];
                    }),
                    (t.dataTypes[0] = "json"),
                    (o = e[i]),
                    (e[i] = function () {
                        a = arguments;
                    }),
                    r.always(function () {
                        void 0 === o ? w(e).removeProp(i) : (e[i] = o), t[i] && ((t.jsonpCallback = n.jsonpCallback), Yt.push(i)), a && g(o) && o(a[0]), (a = o = void 0);
                    }),
                    "script"
                );
        }),
        (h.createHTMLDocument = (function () {
            var e = r.implementation.createHTMLDocument("").body;
            return (e.innerHTML = "<form></form><form></form>"), 2 === e.childNodes.length;
        })()),
        (w.parseHTML = function (e, t, n) {
            if ("string" != typeof e) return [];
            "boolean" == typeof t && ((n = t), (t = !1));
            var i, o, a;
            return (
                t || (h.createHTMLDocument ? (((i = (t = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href), t.head.appendChild(i)) : (t = r)),
                (o = A.exec(e)),
                (a = !n && []),
                o ? [t.createElement(o[1])] : ((o = xe([e], t, a)), a && a.length && w(a).remove(), w.merge([], o.childNodes))
            );
        }),
        (w.fn.load = function (e, t, n) {
            var r,
                i,
                o,
                a = this,
                s = e.indexOf(" ");
            return (
                s > -1 && ((r = vt(e.slice(s))), (e = e.slice(0, s))),
                g(t) ? ((n = t), (t = void 0)) : t && "object" == typeof t && (i = "POST"),
                a.length > 0 &&
                    w
                        .ajax({ url: e, type: i || "GET", dataType: "html", data: t })
                        .done(function (e) {
                            (o = arguments), a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e);
                        })
                        .always(
                            n &&
                                function (e, t) {
                                    a.each(function () {
                                        n.apply(this, o || [e.responseText, t, e]);
                                    });
                                }
                        ),
                this
            );
        }),
        w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
            w.fn[t] = function (e) {
                return this.on(t, e);
            };
        }),
        (w.expr.pseudos.animated = function (e) {
            return w.grep(w.timers, function (t) {
                return e === t.elem;
            }).length;
        }),
        (w.offset = {
            setOffset: function (e, t, n) {
                var r,
                    i,
                    o,
                    a,
                    s,
                    u,
                    l,
                    c = w.css(e, "position"),
                    f = w(e),
                    p = {};
                "static" === c && (e.style.position = "relative"),
                    (s = f.offset()),
                    (o = w.css(e, "top")),
                    (u = w.css(e, "left")),
                    (l = ("absolute" === c || "fixed" === c) && (o + u).indexOf("auto") > -1) ? ((a = (r = f.position()).top), (i = r.left)) : ((a = parseFloat(o) || 0), (i = parseFloat(u) || 0)),
                    g(t) && (t = t.call(e, n, w.extend({}, s))),
                    null != t.top && (p.top = t.top - s.top + a),
                    null != t.left && (p.left = t.left - s.left + i),
                    "using" in t ? t.using.call(e, p) : f.css(p);
            },
        }),
        w.fn.extend({
            offset: function (e) {
                if (arguments.length)
                    return void 0 === e
                        ? this
                        : this.each(function (t) {
                              w.offset.setOffset(this, e, t);
                          });
                var t,
                    n,
                    r = this[0];
                if (r) return r.getClientRects().length ? ((t = r.getBoundingClientRect()), (n = r.ownerDocument.defaultView), { top: t.top + n.pageYOffset, left: t.left + n.pageXOffset }) : { top: 0, left: 0 };
            },
            position: function () {
                if (this[0]) {
                    var e,
                        t,
                        n,
                        r = this[0],
                        i = { top: 0, left: 0 };
                    if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect();
                    else {
                        (t = this.offset()), (n = r.ownerDocument), (e = r.offsetParent || n.documentElement);
                        while (e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position")) e = e.parentNode;
                        e && e !== r && 1 === e.nodeType && (((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0)), (i.left += w.css(e, "borderLeftWidth", !0)));
                    }
                    return { top: t.top - i.top - w.css(r, "marginTop", !0), left: t.left - i.left - w.css(r, "marginLeft", !0) };
                }
            },
            offsetParent: function () {
                return this.map(function () {
                    var e = this.offsetParent;
                    while (e && "static" === w.css(e, "position")) e = e.offsetParent;
                    return e || be;
                });
            },
        }),
        w.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function (e, t) {
            var n = "pageYOffset" === t;
            w.fn[e] = function (r) {
                return z(
                    this,
                    function (e, r, i) {
                        var o;
                        if ((y(e) ? (o = e) : 9 === e.nodeType && (o = e.defaultView), void 0 === i)) return o ? o[t] : e[r];
                        o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : (e[r] = i);
                    },
                    e,
                    r,
                    arguments.length
                );
            };
        }),
        w.each(["top", "left"], function (e, t) {
            w.cssHooks[t] = _e(h.pixelPosition, function (e, n) {
                if (n) return (n = Fe(e, t)), We.test(n) ? w(e).position()[t] + "px" : n;
            });
        }),
        w.each({ Height: "height", Width: "width" }, function (e, t) {
            w.each({ padding: "inner" + e, content: t, "": "outer" + e }, function (n, r) {
                w.fn[r] = function (i, o) {
                    var a = arguments.length && (n || "boolean" != typeof i),
                        s = n || (!0 === i || !0 === o ? "margin" : "border");
                    return z(
                        this,
                        function (t, n, i) {
                            var o;
                            return y(t)
                                ? 0 === r.indexOf("outer")
                                    ? t["inner" + e]
                                    : t.document.documentElement["client" + e]
                                : 9 === t.nodeType
                                ? ((o = t.documentElement), Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e]))
                                : void 0 === i
                                ? w.css(t, n, s)
                                : w.style(t, n, i, s);
                        },
                        t,
                        a ? i : void 0,
                        a
                    );
                };
            });
        }),
        w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
            w.fn[t] = function (e, n) {
                return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t);
            };
        }),
        w.fn.extend({
            hover: function (e, t) {
                return this.mouseenter(e).mouseleave(t || e);
            },
        }),
        w.fn.extend({
            bind: function (e, t, n) {
                return this.on(e, null, t, n);
            },
            unbind: function (e, t) {
                return this.off(e, null, t);
            },
            delegate: function (e, t, n, r) {
                return this.on(t, e, n, r);
            },
            undelegate: function (e, t, n) {
                return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n);
            },
        }),
        (w.proxy = function (e, t) {
            var n, r, i;
            if (("string" == typeof t && ((n = e[t]), (t = e), (e = n)), g(e)))
                return (
                    (r = o.call(arguments, 2)),
                    (i = function () {
                        return e.apply(t || this, r.concat(o.call(arguments)));
                    }),
                    (i.guid = e.guid = e.guid || w.guid++),
                    i
                );
        }),
        (w.holdReady = function (e) {
            e ? w.readyWait++ : w.ready(!0);
        }),
        (w.isArray = Array.isArray),
        (w.parseJSON = JSON.parse),
        (w.nodeName = N),
        (w.isFunction = g),
        (w.isWindow = y),
        (w.camelCase = G),
        (w.type = x),
        (w.now = Date.now),
        (w.isNumeric = function (e) {
            var t = w.type(e);
            return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e));
        }),
        "function" == typeof define &&
            define.amd &&
            define("jquery", [], function () {
                return w;
            });
    var Jt = e.jQuery,
        Kt = e.$;
    return (
        (w.noConflict = function (t) {
            return e.$ === w && (e.$ = Kt), t && e.jQuery === w && (e.jQuery = Jt), w;
        }),
        t || (e.jQuery = e.$ = w),
        w
    );
});
!(function (t, e, n, o) {
    "use strict";
    function i(t) {
        var e = n(t.currentTarget),
            o = t.data ? t.data.options : {},
            i = e.attr("data-fancybox") || "",
            a = 0,
            s = [];
        t.isDefaultPrevented() ||
            (t.preventDefault(),
            i ? ((s = o.selector ? n(o.selector) : t.data ? t.data.items : []), (s = s.length ? s.filter('[data-fancybox="' + i + '"]') : n('[data-fancybox="' + i + '"]')), (a = s.index(e)), a < 0 && (a = 0)) : (s = [e]),
            n.fancybox.open(s, o, a));
    }
    if (n) {
        if (n.fn.fancybox) return void ("console" in t && console.log("fancyBox already initialized"));
        var a = {
                loop: !1,
                margin: [44, 0],
                gutter: 50,
                keyboard: !0,
                arrows: !0,
                infobar: !0,
                toolbar: !0,
                buttons: ["slideShow", "fullScreen", "thumbs", "share", "close"],
                idleTime: 3,
                smallBtn: "auto",
                protect: !1,
                modal: !1,
                image: { preload: "auto" },
                ajax: { settings: { data: { fancybox: !0 } } },
                iframe: {
                    tpl:
                        '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',
                    preload: !0,
                    css: {},
                    attr: { scrolling: "auto" },
                },
                defaultType: "image",
                animationEffect: "zoom",
                animationDuration: 500,
                zoomOpacity: "auto",
                transitionEffect: "fade",
                transitionDuration: 366,
                slideClass: "",
                baseClass: "",
                baseTpl:
                    '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div></div></div>',
                spinnerTpl: '<div class="fancybox-loading"></div>',
                errorTpl: '<div class="fancybox-error"><p>{{ERROR}}<p></div>',
                btnTpl: {
                    download:
                        '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}"><svg viewBox="0 0 40 40"><path d="M20,23 L20,8 L20,23 L13,16 L20,23 L27,16 L20,23 M26,28 L13,28 L27,28 L14,28" /></svg></a>',
                    zoom:
                        '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg viewBox="0 0 40 40"><path d="M 18,17 m-8,0 a 8,8 0 1,0 16,0 a 8,8 0 1,0 -16,0 M25,23 L31,29 L25,23" /></svg></button>',
                    close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg viewBox="0 0 40 40"><path d="M10,10 L30,30 M30,10 L10,30" /></svg></button>',
                    smallBtn: '<button data-fancybox-close class="fancybox-close-small" title="{{CLOSE}}"></button>',
                    arrowLeft: '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><svg viewBox="0 0 40 40"><path d="M10,20 L30,20 L10,20 L18,28 L10,20 L18,12 L10,20"></path></svg></button>',
                    arrowRight: '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><svg viewBox="0 0 40 40"><path d="M30,20 L10,20 L30,20 L22,28 L30,20 L22,12 L30,20"></path></svg></button>',
                },
                parentEl: "body",
                autoFocus: !1,
                backFocus: !0,
                trapFocus: !0,
                fullScreen: { autoStart: !1 },
                touch: { vertical: !0, momentum: !0 },
                hash: null,
                media: {},
                slideShow: { autoStart: !1, speed: 4e3 },
                thumbs: { autoStart: !1, hideOnClose: !0, parentEl: ".fancybox-container", axis: "y" },
                wheel: "auto",
                onInit: n.noop,
                beforeLoad: n.noop,
                afterLoad: n.noop,
                beforeShow: n.noop,
                afterShow: n.noop,
                beforeClose: n.noop,
                afterClose: n.noop,
                onActivate: n.noop,
                onDeactivate: n.noop,
                clickContent: function (t, e) {
                    return "image" === t.type && "zoom";
                },
                clickSlide: "close",
                clickOutside: "close",
                dblclickContent: !1,
                dblclickSlide: !1,
                dblclickOutside: !1,
                mobile: {
                    idleTime: !1,
                    margin: 0,
                    clickContent: function (t, e) {
                        return "image" === t.type && "toggleControls";
                    },
                    clickSlide: function (t, e) {
                        return "image" === t.type ? "toggleControls" : "close";
                    },
                    dblclickContent: function (t, e) {
                        return "image" === t.type && "zoom";
                    },
                    dblclickSlide: function (t, e) {
                        return "image" === t.type && "zoom";
                    },
                },
                lang: "en",
                i18n: {
                    en: {
                        CLOSE: "Close",
                        NEXT: "Next",
                        PREV: "Previous",
                        ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                        PLAY_START: "Start slideshow",
                        PLAY_STOP: "Pause slideshow",
                        FULL_SCREEN: "Full screen",
                        THUMBS: "Thumbnails",
                        DOWNLOAD: "Download",
                        SHARE: "Share",
                        ZOOM: "Zoom",
                    },
                    de: {
                        CLOSE: "Schliessen",
                        NEXT: "Weiter",
                        PREV: "Zurück",
                        ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es später nochmal.",
                        PLAY_START: "Diaschau starten",
                        PLAY_STOP: "Diaschau beenden",
                        FULL_SCREEN: "Vollbild",
                        THUMBS: "Vorschaubilder",
                        DOWNLOAD: "Herunterladen",
                        SHARE: "Teilen",
                        ZOOM: "Maßstab",
                    },
                },
            },
            s = n(t),
            r = n(e),
            c = 0,
            l = function (t) {
                return t && t.hasOwnProperty && t instanceof n;
            },
            u = (function () {
                return (
                    t.requestAnimationFrame ||
                    t.webkitRequestAnimationFrame ||
                    t.mozRequestAnimationFrame ||
                    t.oRequestAnimationFrame ||
                    function (e) {
                        return t.setTimeout(e, 1e3 / 60);
                    }
                );
            })(),
            d = (function () {
                var t,
                    n = e.createElement("fakeelement"),
                    i = { transition: "transitionend", OTransition: "oTransitionEnd", MozTransition: "transitionend", WebkitTransition: "webkitTransitionEnd" };
                for (t in i) if (n.style[t] !== o) return i[t];
                return "transitionend";
            })(),
            f = function (t) {
                return t && t.length && t[0].offsetHeight;
            },
            p = function (t, o, i) {
                var a = this;
                (a.opts = n.extend(!0, { index: i }, n.fancybox.defaults, o || {})),
                    n.fancybox.isMobile && (a.opts = n.extend(!0, {}, a.opts, a.opts.mobile)),
                    o && n.isArray(o.buttons) && (a.opts.buttons = o.buttons),
                    (a.id = a.opts.id || ++c),
                    (a.group = []),
                    (a.currIndex = parseInt(a.opts.index, 10) || 0),
                    (a.prevIndex = null),
                    (a.prevPos = null),
                    (a.currPos = 0),
                    (a.firstRun = null),
                    a.createGroup(t),
                    a.group.length && ((a.$lastFocus = n(e.activeElement).blur()), (a.slides = {}), a.init());
            };
        n.extend(p.prototype, {
            init: function () {
                var i,
                    a,
                    s,
                    c = this,
                    l = c.group[c.currIndex],
                    u = l.opts,
                    d = n.fancybox.scrollbarWidth;
                (c.scrollTop = r.scrollTop()),
                    (c.scrollLeft = r.scrollLeft()),
                    n.fancybox.getInstance() ||
                        (n("body").addClass("fancybox-active"),
                        /iPad|iPhone|iPod/.test(navigator.userAgent) && !t.MSStream
                            ? "image" !== l.type &&
                              n("body")
                                  .css("top", n("body").scrollTop() * -1)
                                  .addClass("fancybox-iosfix")
                            : !n.fancybox.isMobile &&
                              e.body.scrollHeight > t.innerHeight &&
                              (d === o && ((i = n('<div style="width:50px;height:50px;overflow:scroll;" />').appendTo("body")), (d = n.fancybox.scrollbarWidth = i[0].offsetWidth - i[0].clientWidth), i.remove()),
                              n("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar { margin-right: ' + d + "px; }</style>"),
                              n("body").addClass("compensate-for-scrollbar"))),
                    (s = ""),
                    n.each(u.buttons, function (t, e) {
                        s += u.btnTpl[e] || "";
                    }),
                    (a = n(c.translate(c, u.baseTpl.replace("{{buttons}}", s).replace("{{arrows}}", u.btnTpl.arrowLeft + u.btnTpl.arrowRight)))
                        .attr("id", "fancybox-container-" + c.id)
                        .addClass("fancybox-is-hidden")
                        .addClass(u.baseClass)
                        .data("FancyBox", c)
                        .appendTo(u.parentEl)),
                    (c.$refs = { container: a }),
                    ["bg", "inner", "infobar", "toolbar", "stage", "caption", "navigation"].forEach(function (t) {
                        c.$refs[t] = a.find(".fancybox-" + t);
                    }),
                    c.trigger("onInit"),
                    c.activate(),
                    c.jumpTo(c.currIndex);
            },
            translate: function (t, e) {
                var n = t.opts.i18n[t.opts.lang];
                return e.replace(/\{\{(\w+)\}\}/g, function (t, e) {
                    var i = n[e];
                    return i === o ? t : i;
                });
            },
            createGroup: function (t) {
                var e = this,
                    i = n.makeArray(t);
                n.each(i, function (t, i) {
                    var a,
                        s,
                        r,
                        c,
                        l,
                        u = {},
                        d = {};
                    n.isPlainObject(i)
                        ? ((u = i), (d = i.opts || i))
                        : "object" === n.type(i) && n(i).length
                        ? ((a = n(i)), (d = a.data()), (d = n.extend({}, d, d.options || {})), (d.$orig = a), (u.src = d.src || a.attr("href")), u.type || u.src || ((u.type = "inline"), (u.src = i)))
                        : (u = { type: "html", src: i + "" }),
                        (u.opts = n.extend(!0, {}, e.opts, d)),
                        n.isArray(d.buttons) && (u.opts.buttons = d.buttons),
                        (s = u.type || u.opts.type),
                        (c = u.src || ""),
                        !s &&
                            c &&
                            (c.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i)
                                ? (s = "image")
                                : c.match(/\.(pdf)((\?|#).*)?$/i)
                                ? (s = "pdf")
                                : (r = c.match(/\.(mp4|mov|ogv)((\?|#).*)?$/i))
                                ? ((s = "video"), u.opts.videoFormat || (u.opts.videoFormat = "video/" + ("ogv" === r[1] ? "ogg" : r[1])))
                                : "#" === c.charAt(0) && (s = "inline")),
                        s ? (u.type = s) : e.trigger("objectNeedsType", u),
                        (u.index = e.group.length),
                        u.opts.$orig && !u.opts.$orig.length && delete u.opts.$orig,
                        !u.opts.$thumb && u.opts.$orig && (u.opts.$thumb = u.opts.$orig.find("img:first")),
                        u.opts.$thumb && !u.opts.$thumb.length && delete u.opts.$thumb,
                        "function" === n.type(u.opts.caption) && (u.opts.caption = u.opts.caption.apply(i, [e, u])),
                        "function" === n.type(e.opts.caption) && (u.opts.caption = e.opts.caption.apply(i, [e, u])),
                        u.opts.caption instanceof n || (u.opts.caption = u.opts.caption === o ? "" : u.opts.caption + ""),
                        "ajax" === s && ((l = c.split(/\s+/, 2)), l.length > 1 && ((u.src = l.shift()), (u.opts.filter = l.shift()))),
                        "auto" == u.opts.smallBtn && (n.inArray(s, ["html", "inline", "ajax"]) > -1 ? ((u.opts.toolbar = !1), (u.opts.smallBtn = !0)) : (u.opts.smallBtn = !1)),
                        "pdf" === s && ((u.type = "iframe"), (u.opts.iframe.preload = !1)),
                        u.opts.modal &&
                            (u.opts = n.extend(!0, u.opts, {
                                infobar: 0,
                                toolbar: 0,
                                smallBtn: 0,
                                keyboard: 0,
                                slideShow: 0,
                                fullScreen: 0,
                                thumbs: 0,
                                touch: 0,
                                clickContent: !1,
                                clickSlide: !1,
                                clickOutside: !1,
                                dblclickContent: !1,
                                dblclickSlide: !1,
                                dblclickOutside: !1,
                            })),
                        e.group.push(u);
                });
            },
            addEvents: function () {
                var o = this;
                o.removeEvents(),
                    o.$refs.container
                        .on("click.fb-close", "[data-fancybox-close]", function (t) {
                            t.stopPropagation(), t.preventDefault(), o.close(t);
                        })
                        .on("click.fb-prev touchend.fb-prev", "[data-fancybox-prev]", function (t) {
                            t.stopPropagation(), t.preventDefault(), o.previous();
                        })
                        .on("click.fb-next touchend.fb-next", "[data-fancybox-next]", function (t) {
                            t.stopPropagation(), t.preventDefault(), o.next();
                        })
                        .on("click.fb", "[data-fancybox-zoom]", function (t) {
                            o[o.isScaledDown() ? "scaleToActual" : "scaleToFit"]();
                        }),
                    s.on("orientationchange.fb resize.fb", function (t) {
                        t && t.originalEvent && "resize" === t.originalEvent.type
                            ? u(function () {
                                  o.update();
                              })
                            : (o.$refs.stage.hide(),
                              setTimeout(function () {
                                  o.$refs.stage.show(), o.update();
                              }, 600));
                    }),
                    r.on("focusin.fb", function (t) {
                        var i = n.fancybox ? n.fancybox.getInstance() : null;
                        i.isClosing ||
                            !i.current ||
                            !i.current.opts.trapFocus ||
                            n(t.target).hasClass("fancybox-container") ||
                            n(t.target).is(e) ||
                            (i && "fixed" !== n(t.target).css("position") && !i.$refs.container.has(t.target).length && (t.stopPropagation(), i.focus(), s.scrollTop(o.scrollTop).scrollLeft(o.scrollLeft)));
                    }),
                    r.on("keydown.fb", function (t) {
                        var e = o.current,
                            i = t.keyCode || t.which;
                        if (e && e.opts.keyboard && !n(t.target).is("input") && !n(t.target).is("textarea"))
                            return 8 === i || 27 === i
                                ? (t.preventDefault(), void o.close(t))
                                : 37 === i || 38 === i
                                ? (t.preventDefault(), void o.previous())
                                : 39 === i || 40 === i
                                ? (t.preventDefault(), void o.next())
                                : void o.trigger("afterKeydown", t, i);
                    }),
                    o.group[o.currIndex].opts.idleTime &&
                        ((o.idleSecondsCounter = 0),
                        r.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function (t) {
                            (o.idleSecondsCounter = 0), o.isIdle && o.showControls(), (o.isIdle = !1);
                        }),
                        (o.idleInterval = t.setInterval(function () {
                            o.idleSecondsCounter++, o.idleSecondsCounter >= o.group[o.currIndex].opts.idleTime && !o.isDragging && ((o.isIdle = !0), (o.idleSecondsCounter = 0), o.hideControls());
                        }, 1e3)));
            },
            removeEvents: function () {
                var e = this;
                s.off("orientationchange.fb resize.fb"), r.off("focusin.fb keydown.fb .fb-idle"), this.$refs.container.off(".fb-close .fb-prev .fb-next"), e.idleInterval && (t.clearInterval(e.idleInterval), (e.idleInterval = null));
            },
            previous: function (t) {
                return this.jumpTo(this.currPos - 1, t);
            },
            next: function (t) {
                return this.jumpTo(this.currPos + 1, t);
            },
            jumpTo: function (t, e, i) {
                var a,
                    s,
                    r,
                    c,
                    l,
                    u,
                    d,
                    p = this,
                    h = p.group.length;
                if (!(p.isDragging || p.isClosing || (p.isAnimating && p.firstRun))) {
                    if (((t = parseInt(t, 10)), (s = p.current ? p.current.opts.loop : p.opts.loop), !s && (t < 0 || t >= h))) return !1;
                    if (((a = p.firstRun = null === p.firstRun), !(h < 2 && !a && p.isDragging))) {
                        if (
                            ((c = p.current),
                            (p.prevIndex = p.currIndex),
                            (p.prevPos = p.currPos),
                            (r = p.createSlide(t)),
                            h > 1 && ((s || r.index > 0) && p.createSlide(t - 1), (s || r.index < h - 1) && p.createSlide(t + 1)),
                            (p.current = r),
                            (p.currIndex = r.index),
                            (p.currPos = r.pos),
                            p.trigger("beforeShow", a),
                            p.updateControls(),
                            (u = n.fancybox.getTranslate(r.$slide)),
                            (r.isMoved = (0 !== u.left || 0 !== u.top) && !r.$slide.hasClass("fancybox-animated")),
                            (r.forcedDuration = o),
                            n.isNumeric(e) ? (r.forcedDuration = e) : (e = r.opts[a ? "animationDuration" : "transitionDuration"]),
                            (e = parseInt(e, 10)),
                            a)
                        )
                            return (
                                r.opts.animationEffect && e && p.$refs.container.css("transition-duration", e + "ms"),
                                p.$refs.container.removeClass("fancybox-is-hidden"),
                                f(p.$refs.container),
                                p.$refs.container.addClass("fancybox-is-open"),
                                r.$slide.addClass("fancybox-slide--current"),
                                p.loadSlide(r),
                                void p.preload("image")
                            );
                        n.each(p.slides, function (t, e) {
                            n.fancybox.stop(e.$slide);
                        }),
                            r.$slide.removeClass("fancybox-slide--next fancybox-slide--previous").addClass("fancybox-slide--current"),
                            r.isMoved
                                ? ((l = Math.round(r.$slide.width())),
                                  n.each(p.slides, function (t, o) {
                                      var i = o.pos - r.pos;
                                      n.fancybox.animate(o.$slide, { top: 0, left: i * l + i * o.opts.gutter }, e, function () {
                                          o.$slide.removeAttr("style").removeClass("fancybox-slide--next fancybox-slide--previous"), o.pos === p.currPos && ((r.isMoved = !1), p.complete());
                                      });
                                  }))
                                : p.$refs.stage.children().removeAttr("style"),
                            r.isLoaded ? p.revealContent(r) : p.loadSlide(r),
                            p.preload("image"),
                            c.pos !== r.pos &&
                                ((d = "fancybox-slide--" + (c.pos > r.pos ? "next" : "previous")),
                                c.$slide.removeClass("fancybox-slide--complete fancybox-slide--current fancybox-slide--next fancybox-slide--previous"),
                                (c.isComplete = !1),
                                e &&
                                    (r.isMoved || r.opts.transitionEffect) &&
                                    (r.isMoved
                                        ? c.$slide.addClass(d)
                                        : ((d = "fancybox-animated " + d + " fancybox-fx-" + r.opts.transitionEffect),
                                          n.fancybox.animate(c.$slide, d, e, function () {
                                              c.$slide.removeClass(d).removeAttr("style");
                                          }))));
                    }
                }
            },
            createSlide: function (t) {
                var e,
                    o,
                    i = this;
                return (
                    (o = t % i.group.length),
                    (o = o < 0 ? i.group.length + o : o),
                    !i.slides[t] && i.group[o] && ((e = n('<div class="fancybox-slide"></div>').appendTo(i.$refs.stage)), (i.slides[t] = n.extend(!0, {}, i.group[o], { pos: t, $slide: e, isLoaded: !1 })), i.updateSlide(i.slides[t])),
                    i.slides[t]
                );
            },
            scaleToActual: function (t, e, i) {
                var a,
                    s,
                    r,
                    c,
                    l,
                    u = this,
                    d = u.current,
                    f = d.$content,
                    p = parseInt(d.$slide.width(), 10),
                    h = parseInt(d.$slide.height(), 10),
                    g = d.width,
                    b = d.height;
                "image" != d.type ||
                    d.hasError ||
                    !f ||
                    u.isAnimating ||
                    (n.fancybox.stop(f),
                    (u.isAnimating = !0),
                    (t = t === o ? 0.5 * p : t),
                    (e = e === o ? 0.5 * h : e),
                    (a = n.fancybox.getTranslate(f)),
                    (c = g / a.width),
                    (l = b / a.height),
                    (s = 0.5 * p - 0.5 * g),
                    (r = 0.5 * h - 0.5 * b),
                    g > p && ((s = a.left * c - (t * c - t)), s > 0 && (s = 0), s < p - g && (s = p - g)),
                    b > h && ((r = a.top * l - (e * l - e)), r > 0 && (r = 0), r < h - b && (r = h - b)),
                    u.updateCursor(g, b),
                    n.fancybox.animate(f, { top: r, left: s, scaleX: c, scaleY: l }, i || 330, function () {
                        u.isAnimating = !1;
                    }),
                    u.SlideShow && u.SlideShow.isActive && u.SlideShow.stop());
            },
            scaleToFit: function (t) {
                var e,
                    o = this,
                    i = o.current,
                    a = i.$content;
                "image" != i.type ||
                    i.hasError ||
                    !a ||
                    o.isAnimating ||
                    (n.fancybox.stop(a),
                    (o.isAnimating = !0),
                    (e = o.getFitPos(i)),
                    o.updateCursor(e.width, e.height),
                    n.fancybox.animate(a, { top: e.top, left: e.left, scaleX: e.width / a.width(), scaleY: e.height / a.height() }, t || 330, function () {
                        o.isAnimating = !1;
                    }));
            },
            getFitPos: function (t) {
                var e,
                    o,
                    i,
                    a,
                    s,
                    r = this,
                    c = t.$content,
                    l = t.width,
                    u = t.height,
                    d = t.opts.margin;
                return (
                    !(!c || !c.length || (!l && !u)) &&
                    ("number" === n.type(d) && (d = [d, d]),
                    2 == d.length && (d = [d[0], d[1], d[0], d[1]]),
                    (e = parseInt(r.$refs.stage.width(), 10) - (d[1] + d[3])),
                    (o = parseInt(r.$refs.stage.height(), 10) - (d[0] + d[2])),
                    (i = Math.min(1, e / l, o / u)),
                    (a = Math.floor(i * l)),
                    (s = Math.floor(i * u)),
                    { top: Math.floor(0.5 * (o - s)) + d[0], left: Math.floor(0.5 * (e - a)) + d[3], width: a, height: s })
                );
            },
            update: function () {
                var t = this;
                n.each(t.slides, function (e, n) {
                    t.updateSlide(n);
                });
            },
            updateSlide: function (t, e) {
                var o = this,
                    i = t && t.$content;
                i && (t.width || t.height) && ((o.isAnimating = !1), n.fancybox.stop(i), n.fancybox.setTranslate(i, o.getFitPos(t)), t.pos === o.currPos && o.updateCursor()), t.$slide.trigger("refresh"), o.trigger("onUpdate", t);
            },
            centerSlide: function (t, e) {
                var i,
                    a,
                    s = this;
                s.current && ((i = Math.round(t.$slide.width())), (a = t.pos - s.current.pos), n.fancybox.animate(t.$slide, { top: 0, left: a * i + a * t.opts.gutter, opacity: 1 }, e === o ? 0 : e, null, !1));
            },
            updateCursor: function (t, e) {
                var n,
                    i = this,
                    a = i.$refs.container.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-drag fancybox-can-zoomOut");
                i.current &&
                    !i.isClosing &&
                    (i.isZoomable()
                        ? (a.addClass("fancybox-is-zoomable"),
                          (n = t !== o && e !== o ? t < i.current.width && e < i.current.height : i.isScaledDown()),
                          n ? a.addClass("fancybox-can-zoomIn") : i.current.opts.touch ? a.addClass("fancybox-can-drag") : a.addClass("fancybox-can-zoomOut"))
                        : i.current.opts.touch && a.addClass("fancybox-can-drag"));
            },
            isZoomable: function () {
                var t,
                    e = this,
                    o = e.current;
                if (o && !e.isClosing)
                    return !!(
                        "image" === o.type &&
                        o.isLoaded &&
                        !o.hasError &&
                        ("zoom" === o.opts.clickContent || (n.isFunction(o.opts.clickContent) && "zoom" === o.opts.clickContent(o))) &&
                        ((t = e.getFitPos(o)), o.width > t.width || o.height > t.height)
                    );
            },
            isScaledDown: function () {
                var t = this,
                    e = t.current,
                    o = e.$content,
                    i = !1;
                return o && ((i = n.fancybox.getTranslate(o)), (i = i.width < e.width || i.height < e.height)), i;
            },
            canPan: function () {
                var t = this,
                    e = t.current,
                    n = e.$content,
                    o = !1;
                return n && ((o = t.getFitPos(e)), (o = Math.abs(n.width() - o.width) > 1 || Math.abs(n.height() - o.height) > 1)), o;
            },
            loadSlide: function (t) {
                var e,
                    o,
                    i,
                    a = this;
                if (!t.isLoading && !t.isLoaded) {
                    switch (
                        ((t.isLoading = !0),
                        a.trigger("beforeLoad", t),
                        (e = t.type),
                        (o = t.$slide),
                        o
                            .off("refresh")
                            .trigger("onReset")
                            .addClass("fancybox-slide--" + (e || "unknown"))
                            .addClass(t.opts.slideClass),
                        e)
                    ) {
                        case "image":
                            a.setImage(t);
                            break;
                        case "iframe":
                            a.setIframe(t);
                            break;
                        case "html":
                            a.setContent(t, t.src || t.content);
                            break;
                        case "inline":
                            n(t.src).length ? a.setContent(t, n(t.src)) : a.setError(t);
                            break;
                        case "ajax":
                            a.showLoading(t),
                                (i = n.ajax(
                                    n.extend({}, t.opts.ajax.settings, {
                                        url: t.src,
                                        success: function (e, n) {
                                            "success" === n && a.setContent(t, e);
                                        },
                                        error: function (e, n) {
                                            e && "abort" !== n && a.setError(t);
                                        },
                                    })
                                )),
                                o.one("onReset", function () {
                                    i.abort();
                                });
                            break;
                        case "video":
                            a.setContent(t, '<video controls><source src="' + t.src + '" type="' + t.opts.videoFormat + "\">Your browser doesn't support HTML5 video</video>");
                            break;
                        default:
                            a.setError(t);
                    }
                    return !0;
                }
            },
            setImage: function (e) {
                var o,
                    i,
                    a,
                    s,
                    r = this,
                    c = e.opts.srcset || e.opts.image.srcset;
                if (c) {
                    (a = t.devicePixelRatio || 1),
                        (s = t.innerWidth * a),
                        (i = c.split(",").map(function (t) {
                            var e = {};
                            return (
                                t
                                    .trim()
                                    .split(/\s+/)
                                    .forEach(function (t, n) {
                                        var o = parseInt(t.substring(0, t.length - 1), 10);
                                        return 0 === n ? (e.url = t) : void (o && ((e.value = o), (e.postfix = t[t.length - 1])));
                                    }),
                                e
                            );
                        })),
                        i.sort(function (t, e) {
                            return t.value - e.value;
                        });
                    for (var l = 0; l < i.length; l++) {
                        var u = i[l];
                        if (("w" === u.postfix && u.value >= s) || ("x" === u.postfix && u.value >= a)) {
                            o = u;
                            break;
                        }
                    }
                    !o && i.length && (o = i[i.length - 1]), o && ((e.src = o.url), e.width && e.height && "w" == o.postfix && ((e.height = (e.width / e.height) * o.value), (e.width = o.value)));
                }
                (e.$content = n('<div class="fancybox-image-wrap"></div>').addClass("fancybox-is-hidden").appendTo(e.$slide)),
                    e.opts.preload !== !1 && e.opts.width && e.opts.height && (e.opts.thumb || e.opts.$thumb)
                        ? ((e.width = e.opts.width),
                          (e.height = e.opts.height),
                          (e.$ghost = n("<img />")
                              .one("error", function () {
                                  n(this).remove(), (e.$ghost = null), r.setBigImage(e);
                              })
                              .one("load", function () {
                                  r.afterLoad(e), r.setBigImage(e);
                              })
                              .addClass("fancybox-image")
                              .appendTo(e.$content)
                              .attr("src", e.opts.thumb || e.opts.$thumb.attr("src"))))
                        : r.setBigImage(e);
            },
            setBigImage: function (t) {
                var e = this,
                    o = n("<img />");
                (t.$image = o
                    .one("error", function () {
                        e.setError(t);
                    })
                    .one("load", function () {
                        clearTimeout(t.timouts),
                            (t.timouts = null),
                            e.isClosing ||
                                ((t.width = t.opts.width || this.naturalWidth),
                                (t.height = t.opts.height || this.naturalHeight),
                                t.opts.image.srcset && o.attr("sizes", "100vw").attr("srcset", t.opts.image.srcset),
                                e.hideLoading(t),
                                t.$ghost
                                    ? (t.timouts = setTimeout(function () {
                                          (t.timouts = null), t.$ghost.hide();
                                      }, Math.min(300, Math.max(1e3, t.height / 1600))))
                                    : e.afterLoad(t));
                    })
                    .addClass("fancybox-image")
                    .attr("src", t.src)
                    .appendTo(t.$content)),
                    (o[0].complete || "complete" == o[0].readyState) && o[0].naturalWidth && o[0].naturalHeight
                        ? o.trigger("load")
                        : o[0].error
                        ? o.trigger("error")
                        : (t.timouts = setTimeout(function () {
                              o[0].complete || t.hasError || e.showLoading(t);
                          }, 100));
            },
            setIframe: function (t) {
                var e,
                    i = this,
                    a = t.opts.iframe,
                    s = t.$slide;
                (t.$content = n('<div class="fancybox-content' + (a.preload ? " fancybox-is-hidden" : "") + '"></div>')
                    .css(a.css)
                    .appendTo(s)),
                    (e = n(a.tpl.replace(/\{rnd\}/g, new Date().getTime()))
                        .attr(a.attr)
                        .appendTo(t.$content)),
                    a.preload
                        ? (i.showLoading(t),
                          e.on("load.fb error.fb", function (e) {
                              (this.isReady = 1), t.$slide.trigger("refresh"), i.afterLoad(t);
                          }),
                          s.on("refresh.fb", function () {
                              var n,
                                  i,
                                  s,
                                  r = t.$content,
                                  c = a.css.width,
                                  l = a.css.height;
                              if (1 === e[0].isReady) {
                                  try {
                                      (i = e.contents()), (s = i.find("body"));
                                  } catch (t) {}
                                  s &&
                                      s.length &&
                                      (c === o && ((n = e[0].contentWindow.document.documentElement.scrollWidth), (c = Math.ceil(s.outerWidth(!0) + (r.width() - n))), (c += r.outerWidth() - r.innerWidth())),
                                      l === o && ((l = Math.ceil(s.outerHeight(!0))), (l += r.outerHeight() - r.innerHeight())),
                                      c && r.width(c),
                                      l && r.height(l)),
                                      r.removeClass("fancybox-is-hidden");
                              }
                          }))
                        : this.afterLoad(t),
                    e.attr("src", t.src),
                    t.opts.smallBtn === !0 && t.$content.prepend(i.translate(t, t.opts.btnTpl.smallBtn)),
                    s.one("onReset", function () {
                        try {
                            n(this).find("iframe").hide().attr("src", "//about:blank");
                        } catch (t) {}
                        n(this).empty(), (t.isLoaded = !1);
                    });
            },
            setContent: function (t, e) {
                var o = this;
                o.isClosing ||
                    (o.hideLoading(t),
                    t.$slide.empty(),
                    l(e) && e.parent().length
                        ? (e.parent(".fancybox-slide--inline").trigger("onReset"), (t.$placeholder = n("<div></div>").hide().insertAfter(e)), e.css("display", "inline-block"))
                        : t.hasError || ("string" === n.type(e) && ((e = n("<div>").append(n.trim(e)).contents()), 3 === e[0].nodeType && (e = n("<div>").html(e))), t.opts.filter && (e = n("<div>").html(e).find(t.opts.filter))),
                    t.$slide.one("onReset", function () {
                        n(this).find("video,audio").trigger("pause"),
                            t.$placeholder && (t.$placeholder.after(e.hide()).remove(), (t.$placeholder = null)),
                            t.$smallBtn && (t.$smallBtn.remove(), (t.$smallBtn = null)),
                            t.hasError || (n(this).empty(), (t.isLoaded = !1));
                    }),
                    (t.$content = n(e).appendTo(t.$slide)),
                    this.afterLoad(t));
            },
            setError: function (t) {
                (t.hasError = !0), t.$slide.removeClass("fancybox-slide--" + t.type), this.setContent(t, this.translate(t, t.opts.errorTpl));
            },
            showLoading: function (t) {
                var e = this;
                (t = t || e.current), t && !t.$spinner && (t.$spinner = n(e.opts.spinnerTpl).appendTo(t.$slide));
            },
            hideLoading: function (t) {
                var e = this;
                (t = t || e.current), t && t.$spinner && (t.$spinner.remove(), delete t.$spinner);
            },
            afterLoad: function (t) {
                var e = this;
                e.isClosing ||
                    ((t.isLoading = !1),
                    (t.isLoaded = !0),
                    e.trigger("afterLoad", t),
                    e.hideLoading(t),
                    t.opts.smallBtn && !t.$smallBtn && (t.$smallBtn = n(e.translate(t, t.opts.btnTpl.smallBtn)).appendTo(t.$content.filter("div,form").first())),
                    t.opts.protect &&
                        t.$content &&
                        !t.hasError &&
                        (t.$content.on("contextmenu.fb", function (t) {
                            return 2 == t.button && t.preventDefault(), !0;
                        }),
                        "image" === t.type && n('<div class="fancybox-spaceball"></div>').appendTo(t.$content)),
                    e.revealContent(t));
            },
            revealContent: function (t) {
                var e,
                    i,
                    a,
                    s,
                    r,
                    c = this,
                    l = t.$slide,
                    u = !1;
                return (
                    (e = t.opts[c.firstRun ? "animationEffect" : "transitionEffect"]),
                    (a = t.opts[c.firstRun ? "animationDuration" : "transitionDuration"]),
                    (a = parseInt(t.forcedDuration === o ? a : t.forcedDuration, 10)),
                    (!t.isMoved && t.pos === c.currPos && a) || (e = !1),
                    "zoom" !== e || (t.pos === c.currPos && a && "image" === t.type && !t.hasError && (u = c.getThumbPos(t))) || (e = "fade"),
                    "zoom" === e
                        ? ((r = c.getFitPos(t)),
                          (r.scaleX = r.width / u.width),
                          (r.scaleY = r.height / u.height),
                          delete r.width,
                          delete r.height,
                          (s = t.opts.zoomOpacity),
                          "auto" == s && (s = Math.abs(t.width / t.height - u.width / u.height) > 0.1),
                          s && ((u.opacity = 0.1), (r.opacity = 1)),
                          n.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"), u),
                          f(t.$content),
                          void n.fancybox.animate(t.$content, r, a, function () {
                              c.complete();
                          }))
                        : (c.updateSlide(t),
                          e
                              ? (n.fancybox.stop(l),
                                (i = "fancybox-animated fancybox-slide--" + (t.pos >= c.prevPos ? "next" : "previous") + " fancybox-fx-" + e),
                                l.removeAttr("style").removeClass("fancybox-slide--current fancybox-slide--next fancybox-slide--previous").addClass(i),
                                t.$content.removeClass("fancybox-is-hidden"),
                                f(l),
                                void n.fancybox.animate(
                                    l,
                                    "fancybox-slide--current",
                                    a,
                                    function (e) {
                                        l.removeClass(i).removeAttr("style"), t.pos === c.currPos && c.complete();
                                    },
                                    !0
                                ))
                              : (f(l), t.$content.removeClass("fancybox-is-hidden"), void (t.pos === c.currPos && c.complete())))
                );
            },
            getThumbPos: function (o) {
                var i,
                    a = this,
                    s = !1,
                    r = function (e) {
                        for (var o, i = e[0], a = i.getBoundingClientRect(), s = []; null !== i.parentElement; )
                            ("hidden" !== n(i.parentElement).css("overflow") && "auto" !== n(i.parentElement).css("overflow")) || s.push(i.parentElement.getBoundingClientRect()), (i = i.parentElement);
                        return (
                            (o = s.every(function (t) {
                                var e = Math.min(a.right, t.right) - Math.max(a.left, t.left),
                                    n = Math.min(a.bottom, t.bottom) - Math.max(a.top, t.top);
                                return e > 0 && n > 0;
                            })),
                            o && a.bottom > 0 && a.right > 0 && a.left < n(t).width() && a.top < n(t).height()
                        );
                    },
                    c = o.opts.$thumb,
                    l = c ? c.offset() : 0;
                return (
                    l &&
                        c[0].ownerDocument === e &&
                        r(c) &&
                        ((i = a.$refs.stage.offset()),
                        (s = { top: l.top - i.top + parseFloat(c.css("border-top-width") || 0), left: l.left - i.left + parseFloat(c.css("border-left-width") || 0), width: c.width(), height: c.height(), scaleX: 1, scaleY: 1 })),
                    s
                );
            },
            complete: function () {
                var t = this,
                    o = t.current,
                    i = {};
                o.isMoved ||
                    !o.isLoaded ||
                    o.isComplete ||
                    ((o.isComplete = !0),
                    o.$slide.siblings().trigger("onReset"),
                    t.preload("inline"),
                    f(o.$slide),
                    o.$slide.addClass("fancybox-slide--complete"),
                    n.each(t.slides, function (e, o) {
                        o.pos >= t.currPos - 1 && o.pos <= t.currPos + 1 ? (i[o.pos] = o) : o && (n.fancybox.stop(o.$slide), o.$slide.off().remove());
                    }),
                    (t.slides = i),
                    t.updateCursor(),
                    t.trigger("afterShow"),
                    o.$slide.find("video,audio").first().trigger("play"),
                    (n(e.activeElement).is("[disabled]") || (o.opts.autoFocus && "image" != o.type && "iframe" !== o.type)) && t.focus());
            },
            preload: function (t) {
                var e = this,
                    n = e.slides[e.currPos + 1],
                    o = e.slides[e.currPos - 1];
                n && n.type === t && e.loadSlide(n), o && o.type === t && e.loadSlide(o);
            },
            focus: function () {
                var t,
                    e = this.current;
                this.isClosing ||
                    (e && e.isComplete && ((t = e.$slide.find("input[autofocus]:enabled:visible:first")), t.length || (t = e.$slide.find("button,:input,[tabindex],a").filter(":enabled:visible:first"))),
                    (t = t && t.length ? t : this.$refs.container),
                    t.focus());
            },
            activate: function () {
                var t = this;
                n(".fancybox-container").each(function () {
                    var e = n(this).data("FancyBox");
                    e && e.id !== t.id && !e.isClosing && (e.trigger("onDeactivate"), e.removeEvents(), (e.isVisible = !1));
                }),
                    (t.isVisible = !0),
                    (t.current || t.isIdle) && (t.update(), t.updateControls()),
                    t.trigger("onActivate"),
                    t.addEvents();
            },
            close: function (t, e) {
                var o,
                    i,
                    a,
                    s,
                    r,
                    c,
                    l = this,
                    p = l.current,
                    h = function () {
                        l.cleanUp(t);
                    };
                return (
                    !l.isClosing &&
                    ((l.isClosing = !0),
                    l.trigger("beforeClose", t) === !1
                        ? ((l.isClosing = !1),
                          u(function () {
                              l.update();
                          }),
                          !1)
                        : (l.removeEvents(),
                          p.timouts && clearTimeout(p.timouts),
                          (a = p.$content),
                          (o = p.opts.animationEffect),
                          (i = n.isNumeric(e) ? e : o ? p.opts.animationDuration : 0),
                          p.$slide.off(d).removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"),
                          p.$slide.siblings().trigger("onReset").remove(),
                          i && l.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing"),
                          l.hideLoading(p),
                          l.hideControls(),
                          l.updateCursor(),
                          "zoom" !== o || (t !== !0 && a && i && "image" === p.type && !p.hasError && (c = l.getThumbPos(p))) || (o = "fade"),
                          "zoom" === o
                              ? (n.fancybox.stop(a),
                                (r = n.fancybox.getTranslate(a)),
                                (r.width = r.width * r.scaleX),
                                (r.height = r.height * r.scaleY),
                                (s = p.opts.zoomOpacity),
                                "auto" == s && (s = Math.abs(p.width / p.height - c.width / c.height) > 0.1),
                                s && (c.opacity = 0),
                                (r.scaleX = r.width / c.width),
                                (r.scaleY = r.height / c.height),
                                (r.width = c.width),
                                (r.height = c.height),
                                n.fancybox.setTranslate(p.$content, r),
                                f(p.$content),
                                n.fancybox.animate(p.$content, c, i, h),
                                !0)
                              : (o && i ? (t === !0 ? setTimeout(h, i) : n.fancybox.animate(p.$slide.removeClass("fancybox-slide--current"), "fancybox-animated fancybox-slide--previous fancybox-fx-" + o, i, h)) : h(), !0)))
                );
            },
            cleanUp: function (t) {
                var o,
                    i,
                    a = this,
                    r = n("body");
                a.current.$slide.trigger("onReset"),
                    a.$refs.container.empty().remove(),
                    a.trigger("afterClose", t),
                    a.$lastFocus && a.current.opts.backFocus && a.$lastFocus.focus(),
                    (a.current = null),
                    (o = n.fancybox.getInstance()),
                    o
                        ? o.activate()
                        : (s.scrollTop(a.scrollTop).scrollLeft(a.scrollLeft),
                          r.removeClass("fancybox-active compensate-for-scrollbar"),
                          r.hasClass("fancybox-iosfix") &&
                              ((i = parseInt(e.body.style.top, 10)),
                              r
                                  .removeClass("fancybox-iosfix")
                                  .css("top", "")
                                  .scrollTop(i * -1)),
                          n("#fancybox-style-noscroll").remove());
            },
            trigger: function (t, e) {
                var o,
                    i = Array.prototype.slice.call(arguments, 1),
                    a = this,
                    s = e && e.opts ? e : a.current;
                return (
                    s ? i.unshift(s) : (s = a), i.unshift(a), n.isFunction(s.opts[t]) && (o = s.opts[t].apply(s, i)), o === !1 ? o : void ("afterClose" !== t && a.$refs ? a.$refs.container.trigger(t + ".fb", i) : r.trigger(t + ".fb", i))
                );
            },
            updateControls: function (t) {
                var e = this,
                    n = e.current,
                    o = n.index,
                    i = n.opts.caption,
                    a = e.$refs.container,
                    s = e.$refs.caption;
                n.$slide.trigger("refresh"),
                    (e.$caption = i && i.length ? s.html(i) : null),
                    e.isHiddenControls || e.isIdle || e.showControls(),
                    a.find("[data-fancybox-count]").html(e.group.length),
                    a.find("[data-fancybox-index]").html(o + 1),
                    a.find("[data-fancybox-prev]").prop("disabled", !n.opts.loop && o <= 0),
                    a.find("[data-fancybox-next]").prop("disabled", !n.opts.loop && o >= e.group.length - 1),
                    "image" === n.type
                        ? a
                              .find("[data-fancybox-download]")
                              .attr("href", n.opts.image.src || n.src)
                              .show()
                        : a.find("[data-fancybox-download],[data-fancybox-zoom]").hide();
            },
            hideControls: function () {
                (this.isHiddenControls = !0), this.$refs.container.removeClass("fancybox-show-infobar fancybox-show-toolbar fancybox-show-caption fancybox-show-nav");
            },
            showControls: function () {
                var t = this,
                    e = t.current ? t.current.opts : t.opts,
                    n = t.$refs.container;
                (t.isHiddenControls = !1),
                    (t.idleSecondsCounter = 0),
                    n
                        .toggleClass("fancybox-show-toolbar", !(!e.toolbar || !e.buttons))
                        .toggleClass("fancybox-show-infobar", !!(e.infobar && t.group.length > 1))
                        .toggleClass("fancybox-show-nav", !!(e.arrows && t.group.length > 1))
                        .toggleClass("fancybox-is-modal", !!e.modal),
                    t.$caption ? n.addClass("fancybox-show-caption ") : n.removeClass("fancybox-show-caption");
            },
            toggleControls: function () {
                this.isHiddenControls ? this.showControls() : this.hideControls();
            },
        }),
            (n.fancybox = {
                version: "3.2.10",
                defaults: a,
                getInstance: function (t) {
                    var e = n('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox"),
                        o = Array.prototype.slice.call(arguments, 1);
                    return e instanceof p && ("string" === n.type(t) ? e[t].apply(e, o) : "function" === n.type(t) && t.apply(e, o), e);
                },
                open: function (t, e, n) {
                    return new p(t, e, n);
                },
                close: function (t) {
                    var e = this.getInstance();
                    e && (e.close(), t === !0 && this.close());
                },
                destroy: function () {
                    this.close(!0), r.off("click.fb-start");
                },
                isMobile: e.createTouch !== o && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                use3d: (function () {
                    var n = e.createElement("div");
                    return t.getComputedStyle && t.getComputedStyle(n).getPropertyValue("transform") && !(e.documentMode && e.documentMode < 11);
                })(),
                getTranslate: function (t) {
                    var e;
                    if (!t || !t.length) return !1;
                    if (((e = t.eq(0).css("transform")), e && e.indexOf("matrix") !== -1 ? ((e = e.split("(")[1]), (e = e.split(")")[0]), (e = e.split(","))) : (e = []), e.length))
                        (e = e.length > 10 ? [e[13], e[12], e[0], e[5]] : [e[5], e[4], e[0], e[3]]), (e = e.map(parseFloat));
                    else {
                        e = [0, 0, 1, 1];
                        var n = /\.*translate\((.*)px,(.*)px\)/i,
                            o = n.exec(t.eq(0).attr("style"));
                        o && ((e[0] = parseFloat(o[2])), (e[1] = parseFloat(o[1])));
                    }
                    return { top: e[0], left: e[1], scaleX: e[2], scaleY: e[3], opacity: parseFloat(t.css("opacity")), width: t.width(), height: t.height() };
                },
                setTranslate: function (t, e) {
                    var n = "",
                        i = {};
                    if (t && e)
                        return (
                            (e.left === o && e.top === o) ||
                                ((n = (e.left === o ? t.position().left : e.left) + "px, " + (e.top === o ? t.position().top : e.top) + "px"), (n = this.use3d ? "translate3d(" + n + ", 0px)" : "translate(" + n + ")")),
                            e.scaleX !== o && e.scaleY !== o && (n = (n.length ? n + " " : "") + "scale(" + e.scaleX + ", " + e.scaleY + ")"),
                            n.length && (i.transform = n),
                            e.opacity !== o && (i.opacity = e.opacity),
                            e.width !== o && (i.width = e.width),
                            e.height !== o && (i.height = e.height),
                            t.css(i)
                        );
                },
                animate: function (t, e, i, a, s) {
                    n.isFunction(i) && ((a = i), (i = null)),
                        n.isPlainObject(e) || t.removeAttr("style"),
                        t.on(d, function (i) {
                            (!i || !i.originalEvent || (t.is(i.originalEvent.target) && "z-index" != i.originalEvent.propertyName)) &&
                                (n.fancybox.stop(t),
                                n.isPlainObject(e)
                                    ? (e.scaleX !== o &&
                                          e.scaleY !== o &&
                                          (t.css("transition-duration", ""), (e.width = Math.round(t.width() * e.scaleX)), (e.height = Math.round(t.height() * e.scaleY)), (e.scaleX = 1), (e.scaleY = 1), n.fancybox.setTranslate(t, e)),
                                      s === !1 && t.removeAttr("style"))
                                    : s !== !0 && t.removeClass(e),
                                n.isFunction(a) && a(i));
                        }),
                        n.isNumeric(i) && t.css("transition-duration", i + "ms"),
                        n.isPlainObject(e) ? n.fancybox.setTranslate(t, e) : t.addClass(e),
                        e.scaleX && t.hasClass("fancybox-image-wrap") && t.parent().addClass("fancybox-is-scaling"),
                        t.data(
                            "timer",
                            setTimeout(function () {
                                t.trigger("transitionend");
                            }, i + 16)
                        );
                },
                stop: function (t) {
                    clearTimeout(t.data("timer")), t.off("transitionend").css("transition-duration", ""), t.hasClass("fancybox-image-wrap") && t.parent().removeClass("fancybox-is-scaling");
                },
            }),
            (n.fn.fancybox = function (t) {
                var e;
                return (t = t || {}), (e = t.selector || !1), e ? n("body").off("click.fb-start", e).on("click.fb-start", e, { options: t }, i) : this.off("click.fb-start").on("click.fb-start", { items: this, options: t }, i), this;
            }),
            r.on("click.fb-start", "[data-fancybox]", i);
    }
})(window, document, window.jQuery || jQuery),
    (function (t) {
        "use strict";
        var e = function (e, n, o) {
                if (e)
                    return (
                        (o = o || ""),
                        "object" === t.type(o) && (o = t.param(o, !0)),
                        t.each(n, function (t, n) {
                            e = e.replace("$" + t, n || "");
                        }),
                        o.length && (e += (e.indexOf("?") > 0 ? "&" : "?") + o),
                        e
                    );
            },
            n = {
                youtube: {
                    matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
                    params: { autoplay: 1, autohide: 1, fs: 1, rel: 0, hd: 1, wmode: "transparent", enablejsapi: 1, html5: 1 },
                    paramPlace: 8,
                    type: "iframe",
                    url: "//www.youtube.com/embed/$4",
                    thumb: "//img.youtube.com/vi/$4/hqdefault.jpg",
                },
                vimeo: {
                    matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
                    params: { autoplay: 1, hd: 1, show_title: 1, show_byline: 1, show_portrait: 0, fullscreen: 1, api: 1 },
                    paramPlace: 3,
                    type: "iframe",
                    url: "//player.vimeo.com/video/$2",
                },
                metacafe: { matcher: /metacafe.com\/watch\/(\d+)\/(.*)?/, type: "iframe", url: "//www.metacafe.com/embed/$1/?ap=1" },
                dailymotion: { matcher: /dailymotion.com\/video\/(.*)\/?(.*)/, params: { additionalInfos: 0, autoStart: 1 }, type: "iframe", url: "//www.dailymotion.com/embed/video/$1" },
                vine: { matcher: /vine.co\/v\/([a-zA-Z0-9\?\=\-]+)/, type: "iframe", url: "//vine.co/v/$1/embed/simple" },
                instagram: { matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i, type: "image", url: "//$1/p/$2/media/?size=l" },
                gmap_place: {
                    matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
                    type: "iframe",
                    url: function (t) {
                        return "//maps.google." + t[2] + "/?ll=" + (t[9] ? t[9] + "&z=" + Math.floor(t[10]) + (t[12] ? t[12].replace(/^\//, "&") : "") : t[12]) + "&output=" + (t[12] && t[12].indexOf("layer=c") > 0 ? "svembed" : "embed");
                    },
                },
                gmap_search: {
                    matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
                    type: "iframe",
                    url: function (t) {
                        return "//maps.google." + t[2] + "/maps?q=" + t[5].replace("query=", "q=").replace("api=1", "") + "&output=embed";
                    },
                },
            };
        t(document).on("objectNeedsType.fb", function (o, i, a) {
            var s,
                r,
                c,
                l,
                u,
                d,
                f,
                p = a.src || "",
                h = !1;
            (s = t.extend(!0, {}, n, a.opts.media)),
                t.each(s, function (n, o) {
                    if ((c = p.match(o.matcher))) {
                        if (((h = o.type), (d = {}), o.paramPlace && c[o.paramPlace])) {
                            (u = c[o.paramPlace]), "?" == u[0] && (u = u.substring(1)), (u = u.split("&"));
                            for (var i = 0; i < u.length; ++i) {
                                var s = u[i].split("=", 2);
                                2 == s.length && (d[s[0]] = decodeURIComponent(s[1].replace(/\+/g, " ")));
                            }
                        }
                        return (
                            (l = t.extend(!0, {}, o.params, a.opts[n], d)),
                            (p = "function" === t.type(o.url) ? o.url.call(this, c, l, a) : e(o.url, c, l)),
                            (r = "function" === t.type(o.thumb) ? o.thumb.call(this, c, l, a) : e(o.thumb, c)),
                            "vimeo" === n && (p = p.replace("&%23", "#")),
                            !1
                        );
                    }
                }),
                h
                    ? ((a.src = p),
                      (a.type = h),
                      a.opts.thumb || (a.opts.$thumb && a.opts.$thumb.length) || (a.opts.thumb = r),
                      "iframe" === h &&
                          (t.extend(!0, a.opts, { iframe: { preload: !1, attr: { scrolling: "no" } } }), (a.contentProvider = f), (a.opts.slideClass += " fancybox-slide--" + ("gmap_place" == f || "gmap_search" == f ? "map" : "video"))))
                    : p && (a.type = a.opts.defaultType);
        });
    })(window.jQuery || jQuery),
    (function (t, e, n) {
        "use strict";
        var o = (function () {
                return (
                    t.requestAnimationFrame ||
                    t.webkitRequestAnimationFrame ||
                    t.mozRequestAnimationFrame ||
                    t.oRequestAnimationFrame ||
                    function (e) {
                        return t.setTimeout(e, 1e3 / 60);
                    }
                );
            })(),
            i = (function () {
                return (
                    t.cancelAnimationFrame ||
                    t.webkitCancelAnimationFrame ||
                    t.mozCancelAnimationFrame ||
                    t.oCancelAnimationFrame ||
                    function (e) {
                        t.clearTimeout(e);
                    }
                );
            })(),
            a = function (e) {
                var n = [];
                (e = e.originalEvent || e || t.e), (e = e.touches && e.touches.length ? e.touches : e.changedTouches && e.changedTouches.length ? e.changedTouches : [e]);
                for (var o in e) e[o].pageX ? n.push({ x: e[o].pageX, y: e[o].pageY }) : e[o].clientX && n.push({ x: e[o].clientX, y: e[o].clientY });
                return n;
            },
            s = function (t, e, n) {
                return e && t ? ("x" === n ? t.x - e.x : "y" === n ? t.y - e.y : Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2))) : 0;
            },
            r = function (t) {
                if (t.is('a,area,button,[role="button"],input,label,select,summary,textarea') || n.isFunction(t.get(0).onclick) || t.data("selectable")) return !0;
                for (var e = 0, o = t[0].attributes, i = o.length; e < i; e++) if ("data-fancybox-" === o[e].nodeName.substr(0, 14)) return !0;
                return !1;
            },
            c = function (e) {
                var n = t.getComputedStyle(e)["overflow-y"],
                    o = t.getComputedStyle(e)["overflow-x"],
                    i = ("scroll" === n || "auto" === n) && e.scrollHeight > e.clientHeight,
                    a = ("scroll" === o || "auto" === o) && e.scrollWidth > e.clientWidth;
                return i || a;
            },
            l = function (t) {
                for (var e = !1; ; ) {
                    if ((e = c(t.get(0)))) break;
                    if (((t = t.parent()), !t.length || t.hasClass("fancybox-stage") || t.is("body"))) break;
                }
                return e;
            },
            u = function (t) {
                var e = this;
                (e.instance = t), (e.$bg = t.$refs.bg), (e.$stage = t.$refs.stage), (e.$container = t.$refs.container), e.destroy(), e.$container.on("touchstart.fb.touch mousedown.fb.touch", n.proxy(e, "ontouchstart"));
            };
        (u.prototype.destroy = function () {
            this.$container.off(".fb.touch");
        }),
            (u.prototype.ontouchstart = function (o) {
                var i = this,
                    c = n(o.target),
                    u = i.instance,
                    d = u.current,
                    f = d.$content,
                    p = "touchstart" == o.type;
                if (
                    (p && i.$container.off("mousedown.fb.touch"), (!o.originalEvent || 2 != o.originalEvent.button) && c.length && !r(c) && !r(c.parent()) && (c.is("img") || !(o.originalEvent.clientX > c[0].clientWidth + c.offset().left)))
                ) {
                    if (!d || i.instance.isAnimating || i.instance.isClosing) return o.stopPropagation(), void o.preventDefault();
                    if (((i.realPoints = i.startPoints = a(o)), i.startPoints)) {
                        if (
                            (o.stopPropagation(),
                            (i.startEvent = o),
                            (i.canTap = !0),
                            (i.$target = c),
                            (i.$content = f),
                            (i.opts = d.opts.touch),
                            (i.isPanning = !1),
                            (i.isSwiping = !1),
                            (i.isZooming = !1),
                            (i.isScrolling = !1),
                            (i.sliderStartPos = i.sliderLastPos || { top: 0, left: 0 }),
                            (i.contentStartPos = n.fancybox.getTranslate(i.$content)),
                            (i.contentLastPos = null),
                            (i.startTime = new Date().getTime()),
                            (i.distanceX = i.distanceY = i.distance = 0),
                            (i.canvasWidth = Math.round(d.$slide[0].clientWidth)),
                            (i.canvasHeight = Math.round(d.$slide[0].clientHeight)),
                            n(e)
                                .off(".fb.touch")
                                .on(p ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", n.proxy(i, "ontouchend"))
                                .on(p ? "touchmove.fb.touch" : "mousemove.fb.touch", n.proxy(i, "ontouchmove")),
                            n.fancybox.isMobile && e.addEventListener("scroll", i.onscroll, !0),
                            (!i.opts && !u.canPan()) || (!c.is(i.$stage) && !i.$stage.find(c).length))
                        )
                            return void (c.is("img") && o.preventDefault());
                        (n.fancybox.isMobile && (l(c) || l(c.parent()))) || o.preventDefault(),
                            1 === i.startPoints.length &&
                                ("image" === d.type && (i.contentStartPos.width > i.canvasWidth + 1 || i.contentStartPos.height > i.canvasHeight + 1)
                                    ? (n.fancybox.stop(i.$content), i.$content.css("transition-duration", ""), (i.isPanning = !0))
                                    : (i.isSwiping = !0),
                                i.$container.addClass("fancybox-controls--isGrabbing")),
                            2 !== i.startPoints.length ||
                                u.isAnimating ||
                                d.hasError ||
                                "image" !== d.type ||
                                (!d.isLoaded && !d.$ghost) ||
                                ((i.canTap = !1),
                                (i.isSwiping = !1),
                                (i.isPanning = !1),
                                (i.isZooming = !0),
                                n.fancybox.stop(i.$content),
                                i.$content.css("transition-duration", ""),
                                (i.centerPointStartX = 0.5 * (i.startPoints[0].x + i.startPoints[1].x) - n(t).scrollLeft()),
                                (i.centerPointStartY = 0.5 * (i.startPoints[0].y + i.startPoints[1].y) - n(t).scrollTop()),
                                (i.percentageOfImageAtPinchPointX = (i.centerPointStartX - i.contentStartPos.left) / i.contentStartPos.width),
                                (i.percentageOfImageAtPinchPointY = (i.centerPointStartY - i.contentStartPos.top) / i.contentStartPos.height),
                                (i.startDistanceBetweenFingers = s(i.startPoints[0], i.startPoints[1])));
                    }
                }
            }),
            (u.prototype.onscroll = function (t) {
                self.isScrolling = !0;
            }),
            (u.prototype.ontouchmove = function (t) {
                var e = this,
                    o = n(t.target);
                return e.isScrolling || (!o.is(e.$stage) && !e.$stage.find(o).length)
                    ? void (e.canTap = !1)
                    : ((e.newPoints = a(t)),
                      void (
                          (e.opts || e.instance.canPan()) &&
                          e.newPoints &&
                          e.newPoints.length &&
                          ((e.isSwiping && e.isSwiping === !0) || t.preventDefault(),
                          (e.distanceX = s(e.newPoints[0], e.startPoints[0], "x")),
                          (e.distanceY = s(e.newPoints[0], e.startPoints[0], "y")),
                          (e.distance = s(e.newPoints[0], e.startPoints[0])),
                          e.distance > 0 && (e.isSwiping ? e.onSwipe(t) : e.isPanning ? e.onPan() : e.isZooming && e.onZoom()))
                      ));
            }),
            (u.prototype.onSwipe = function (e) {
                var a,
                    s = this,
                    r = s.isSwiping,
                    c = s.sliderStartPos.left || 0;
                if (r !== !0)
                    "x" == r &&
                        (s.distanceX > 0 && (s.instance.group.length < 2 || (0 === s.instance.current.index && !s.instance.current.opts.loop))
                            ? (c += Math.pow(s.distanceX, 0.8))
                            : s.distanceX < 0 && (s.instance.group.length < 2 || (s.instance.current.index === s.instance.group.length - 1 && !s.instance.current.opts.loop))
                            ? (c -= Math.pow(-s.distanceX, 0.8))
                            : (c += s.distanceX)),
                        (s.sliderLastPos = { top: "x" == r ? 0 : s.sliderStartPos.top + s.distanceY, left: c }),
                        s.requestId && (i(s.requestId), (s.requestId = null)),
                        (s.requestId = o(function () {
                            s.sliderLastPos &&
                                (n.each(s.instance.slides, function (t, e) {
                                    var o = e.pos - s.instance.currPos;
                                    n.fancybox.setTranslate(e.$slide, { top: s.sliderLastPos.top, left: s.sliderLastPos.left + o * s.canvasWidth + o * e.opts.gutter });
                                }),
                                s.$container.addClass("fancybox-is-sliding"));
                        }));
                else if (Math.abs(s.distance) > 10) {
                    if (
                        ((s.canTap = !1),
                        s.instance.group.length < 2 && s.opts.vertical
                            ? (s.isSwiping = "y")
                            : s.instance.isDragging || s.opts.vertical === !1 || ("auto" === s.opts.vertical && n(t).width() > 800)
                            ? (s.isSwiping = "x")
                            : ((a = Math.abs((180 * Math.atan2(s.distanceY, s.distanceX)) / Math.PI)), (s.isSwiping = a > 45 && a < 135 ? "y" : "x")),
                        (s.canTap = !1),
                        "y" === s.isSwiping && n.fancybox.isMobile && (l(s.$target) || l(s.$target.parent())))
                    )
                        return void (s.isScrolling = !0);
                    (s.instance.isDragging = s.isSwiping),
                        (s.startPoints = s.newPoints),
                        n.each(s.instance.slides, function (t, e) {
                            n.fancybox.stop(e.$slide), e.$slide.css("transition-duration", ""), (e.inTransition = !1), e.pos === s.instance.current.pos && (s.sliderStartPos.left = n.fancybox.getTranslate(e.$slide).left);
                        }),
                        s.instance.SlideShow && s.instance.SlideShow.isActive && s.instance.SlideShow.stop();
                }
            }),
            (u.prototype.onPan = function () {
                var t = this;
                return s(t.newPoints[0], t.realPoints[0]) < (n.fancybox.isMobile ? 10 : 5)
                    ? void (t.startPoints = t.newPoints)
                    : ((t.canTap = !1),
                      (t.contentLastPos = t.limitMovement()),
                      t.requestId && (i(t.requestId), (t.requestId = null)),
                      void (t.requestId = o(function () {
                          n.fancybox.setTranslate(t.$content, t.contentLastPos);
                      })));
            }),
            (u.prototype.limitMovement = function () {
                var t,
                    e,
                    n,
                    o,
                    i,
                    a,
                    s = this,
                    r = s.canvasWidth,
                    c = s.canvasHeight,
                    l = s.distanceX,
                    u = s.distanceY,
                    d = s.contentStartPos,
                    f = d.left,
                    p = d.top,
                    h = d.width,
                    g = d.height;
                return (
                    (i = h > r ? f + l : f),
                    (a = p + u),
                    (t = Math.max(0, 0.5 * r - 0.5 * h)),
                    (e = Math.max(0, 0.5 * c - 0.5 * g)),
                    (n = Math.min(r - h, 0.5 * r - 0.5 * h)),
                    (o = Math.min(c - g, 0.5 * c - 0.5 * g)),
                    h > r && (l > 0 && i > t && (i = t - 1 + Math.pow(-t + f + l, 0.8) || 0), l < 0 && i < n && (i = n + 1 - Math.pow(n - f - l, 0.8) || 0)),
                    g > c && (u > 0 && a > e && (a = e - 1 + Math.pow(-e + p + u, 0.8) || 0), u < 0 && a < o && (a = o + 1 - Math.pow(o - p - u, 0.8) || 0)),
                    { top: a, left: i, scaleX: d.scaleX, scaleY: d.scaleY }
                );
            }),
            (u.prototype.limitPosition = function (t, e, n, o) {
                var i = this,
                    a = i.canvasWidth,
                    s = i.canvasHeight;
                return n > a ? ((t = t > 0 ? 0 : t), (t = t < a - n ? a - n : t)) : (t = Math.max(0, a / 2 - n / 2)), o > s ? ((e = e > 0 ? 0 : e), (e = e < s - o ? s - o : e)) : (e = Math.max(0, s / 2 - o / 2)), { top: e, left: t };
            }),
            (u.prototype.onZoom = function () {
                var e = this,
                    a = e.contentStartPos.width,
                    r = e.contentStartPos.height,
                    c = e.contentStartPos.left,
                    l = e.contentStartPos.top,
                    u = s(e.newPoints[0], e.newPoints[1]),
                    d = u / e.startDistanceBetweenFingers,
                    f = Math.floor(a * d),
                    p = Math.floor(r * d),
                    h = (a - f) * e.percentageOfImageAtPinchPointX,
                    g = (r - p) * e.percentageOfImageAtPinchPointY,
                    b = (e.newPoints[0].x + e.newPoints[1].x) / 2 - n(t).scrollLeft(),
                    m = (e.newPoints[0].y + e.newPoints[1].y) / 2 - n(t).scrollTop(),
                    y = b - e.centerPointStartX,
                    v = m - e.centerPointStartY,
                    x = c + (h + y),
                    w = l + (g + v),
                    $ = { top: w, left: x, scaleX: e.contentStartPos.scaleX * d, scaleY: e.contentStartPos.scaleY * d };
                (e.canTap = !1),
                    (e.newWidth = f),
                    (e.newHeight = p),
                    (e.contentLastPos = $),
                    e.requestId && (i(e.requestId), (e.requestId = null)),
                    (e.requestId = o(function () {
                        n.fancybox.setTranslate(e.$content, e.contentLastPos);
                    }));
            }),
            (u.prototype.ontouchend = function (t) {
                var o = this,
                    s = Math.max(new Date().getTime() - o.startTime, 1),
                    r = o.isSwiping,
                    c = o.isPanning,
                    l = o.isZooming,
                    u = o.isScrolling;
                return (
                    (o.endPoints = a(t)),
                    o.$container.removeClass("fancybox-controls--isGrabbing"),
                    n(e).off(".fb.touch"),
                    e.removeEventListener("scroll", o.onscroll, !0),
                    o.requestId && (i(o.requestId), (o.requestId = null)),
                    (o.isSwiping = !1),
                    (o.isPanning = !1),
                    (o.isZooming = !1),
                    (o.isScrolling = !1),
                    (o.instance.isDragging = !1),
                    o.canTap
                        ? o.onTap(t)
                        : ((o.speed = 366),
                          (o.velocityX = (o.distanceX / s) * 0.5),
                          (o.velocityY = (o.distanceY / s) * 0.5),
                          (o.speedX = Math.max(0.5 * o.speed, Math.min(1.5 * o.speed, (1 / Math.abs(o.velocityX)) * o.speed))),
                          void (c ? o.endPanning() : l ? o.endZooming() : o.endSwiping(r, u)))
                );
            }),
            (u.prototype.endSwiping = function (t, e) {
                var o = this,
                    i = !1,
                    a = o.instance.group.length;
                (o.sliderLastPos = null),
                    "y" == t && !e && Math.abs(o.distanceY) > 50
                        ? (n.fancybox.animate(o.instance.current.$slide, { top: o.sliderStartPos.top + o.distanceY + 150 * o.velocityY, opacity: 0 }, 150), (i = o.instance.close(!0, 300)))
                        : "x" == t && o.distanceX > 50 && a > 1
                        ? (i = o.instance.previous(o.speedX))
                        : "x" == t && o.distanceX < -50 && a > 1 && (i = o.instance.next(o.speedX)),
                    i !== !1 || ("x" != t && "y" != t) || (e || a < 2 ? o.instance.centerSlide(o.instance.current, 150) : o.instance.jumpTo(o.instance.current.index)),
                    o.$container.removeClass("fancybox-is-sliding");
            }),
            (u.prototype.endPanning = function () {
                var t,
                    e,
                    o,
                    i = this;
                i.contentLastPos &&
                    (i.opts.momentum === !1 ? ((t = i.contentLastPos.left), (e = i.contentLastPos.top)) : ((t = i.contentLastPos.left + i.velocityX * i.speed), (e = i.contentLastPos.top + i.velocityY * i.speed)),
                    (o = i.limitPosition(t, e, i.contentStartPos.width, i.contentStartPos.height)),
                    (o.width = i.contentStartPos.width),
                    (o.height = i.contentStartPos.height),
                    n.fancybox.animate(i.$content, o, 330));
            }),
            (u.prototype.endZooming = function () {
                var t,
                    e,
                    o,
                    i,
                    a = this,
                    s = a.instance.current,
                    r = a.newWidth,
                    c = a.newHeight;
                a.contentLastPos &&
                    ((t = a.contentLastPos.left),
                    (e = a.contentLastPos.top),
                    (i = { top: e, left: t, width: r, height: c, scaleX: 1, scaleY: 1 }),
                    n.fancybox.setTranslate(a.$content, i),
                    r < a.canvasWidth && c < a.canvasHeight
                        ? a.instance.scaleToFit(150)
                        : r > s.width || c > s.height
                        ? a.instance.scaleToActual(a.centerPointStartX, a.centerPointStartY, 150)
                        : ((o = a.limitPosition(t, e, r, c)), n.fancybox.setTranslate(a.content, n.fancybox.getTranslate(a.$content)), n.fancybox.animate(a.$content, o, 150)));
            }),
            (u.prototype.onTap = function (t) {
                var e,
                    o = this,
                    i = n(t.target),
                    s = o.instance,
                    r = s.current,
                    c = (t && a(t)) || o.startPoints,
                    l = c[0] ? c[0].x - o.$stage.offset().left : 0,
                    u = c[0] ? c[0].y - o.$stage.offset().top : 0,
                    d = function (e) {
                        var i = r.opts[e];
                        if ((n.isFunction(i) && (i = i.apply(s, [r, t])), i))
                            switch (i) {
                                case "close":
                                    s.close(o.startEvent);
                                    break;
                                case "toggleControls":
                                    s.toggleControls(!0);
                                    break;
                                case "next":
                                    s.next();
                                    break;
                                case "nextOrClose":
                                    s.group.length > 1 ? s.next() : s.close(o.startEvent);
                                    break;
                                case "zoom":
                                    "image" == r.type && (r.isLoaded || r.$ghost) && (s.canPan() ? s.scaleToFit() : s.isScaledDown() ? s.scaleToActual(l, u) : s.group.length < 2 && s.close(o.startEvent));
                            }
                    };
                if ((!t.originalEvent || 2 != t.originalEvent.button) && (i.is("img") || !(l > i[0].clientWidth + i.offset().left))) {
                    if (i.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container")) e = "Outside";
                    else if (i.is(".fancybox-slide")) e = "Slide";
                    else {
                        if (!s.current.$content || !s.current.$content.find(i).addBack().filter(i).length) return;
                        e = "Content";
                    }
                    if (o.tapped) {
                        if ((clearTimeout(o.tapped), (o.tapped = null), Math.abs(l - o.tapX) > 50 || Math.abs(u - o.tapY) > 50)) return this;
                        d("dblclick" + e);
                    } else
                        (o.tapX = l),
                            (o.tapY = u),
                            r.opts["dblclick" + e] && r.opts["dblclick" + e] !== r.opts["click" + e]
                                ? (o.tapped = setTimeout(function () {
                                      (o.tapped = null), d("click" + e);
                                  }, 500))
                                : d("click" + e);
                    return this;
                }
            }),
            n(e).on("onActivate.fb", function (t, e) {
                e && !e.Guestures && (e.Guestures = new u(e));
            });
    })(window, document, window.jQuery || jQuery),
    (function (t, e) {
        "use strict";
        e.extend(!0, e.fancybox.defaults, {
            btnTpl: {
                slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg viewBox="0 0 40 40"><path d="M13,12 L27,20 L13,27 Z" /><path d="M15,10 v19 M23,10 v19" /></svg></button>',
            },
            slideShow: { autoStart: !1, speed: 3e3 },
        });
        var n = function (t) {
            (this.instance = t), this.init();
        };
        e.extend(n.prototype, {
            timer: null,
            isActive: !1,
            $button: null,
            init: function () {
                var t = this;
                (t.$button = t.instance.$refs.toolbar.find("[data-fancybox-play]").on("click", function () {
                    t.toggle();
                })),
                    (t.instance.group.length < 2 || !t.instance.group[t.instance.currIndex].opts.slideShow) && t.$button.hide();
            },
            set: function (t) {
                var e = this;
                e.instance && e.instance.current && (t === !0 || e.instance.current.opts.loop || e.instance.currIndex < e.instance.group.length - 1)
                    ? (e.timer = setTimeout(function () {
                          e.isActive && e.instance.jumpTo((e.instance.currIndex + 1) % e.instance.group.length);
                      }, e.instance.current.opts.slideShow.speed))
                    : (e.stop(), (e.instance.idleSecondsCounter = 0), e.instance.showControls());
            },
            clear: function () {
                var t = this;
                clearTimeout(t.timer), (t.timer = null);
            },
            start: function () {
                var t = this,
                    e = t.instance.current;
                e && ((t.isActive = !0), t.$button.attr("title", e.opts.i18n[e.opts.lang].PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"), t.set(!0));
            },
            stop: function () {
                var t = this,
                    e = t.instance.current;
                t.clear(), t.$button.attr("title", e.opts.i18n[e.opts.lang].PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play"), (t.isActive = !1);
            },
            toggle: function () {
                var t = this;
                t.isActive ? t.stop() : t.start();
            },
        }),
            e(t).on({
                "onInit.fb": function (t, e) {
                    e && !e.SlideShow && (e.SlideShow = new n(e));
                },
                "beforeShow.fb": function (t, e, n, o) {
                    var i = e && e.SlideShow;
                    o ? i && n.opts.slideShow.autoStart && i.start() : i && i.isActive && i.clear();
                },
                "afterShow.fb": function (t, e, n) {
                    var o = e && e.SlideShow;
                    o && o.isActive && o.set();
                },
                "afterKeydown.fb": function (n, o, i, a, s) {
                    var r = o && o.SlideShow;
                    !r || !i.opts.slideShow || (80 !== s && 32 !== s) || e(t.activeElement).is("button,a,input") || (a.preventDefault(), r.toggle());
                },
                "beforeClose.fb onDeactivate.fb": function (t, e) {
                    var n = e && e.SlideShow;
                    n && n.stop();
                },
            }),
            e(t).on("visibilitychange", function () {
                var n = e.fancybox.getInstance(),
                    o = n && n.SlideShow;
                o && o.isActive && (t.hidden ? o.clear() : o.set());
            });
    })(document, window.jQuery || jQuery),
    (function (t, e) {
        "use strict";
        var n = (function () {
            var e,
                n,
                o,
                i = [
                    ["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"],
                    ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"],
                    ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"],
                    ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"],
                    ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"],
                ],
                a = {};
            for (n = 0; n < i.length; n++)
                if (((e = i[n]), e && e[1] in t)) {
                    for (o = 0; o < e.length; o++) a[i[0][o]] = e[o];
                    return a;
                }
            return !1;
        })();
        if (!n) return void (e && e.fancybox && (e.fancybox.defaults.btnTpl.fullScreen = !1));
        var o = {
            request: function (e) {
                (e = e || t.documentElement), e[n.requestFullscreen](e.ALLOW_KEYBOARD_INPUT);
            },
            exit: function () {
                t[n.exitFullscreen]();
            },
            toggle: function (e) {
                (e = e || t.documentElement), this.isFullscreen() ? this.exit() : this.request(e);
            },
            isFullscreen: function () {
                return Boolean(t[n.fullscreenElement]);
            },
            enabled: function () {
                return Boolean(t[n.fullscreenEnabled]);
            },
        };
        e.extend(!0, e.fancybox.defaults, {
            btnTpl: { fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fullscreen" title="{{FULL_SCREEN}}"><svg viewBox="0 0 40 40"><path d="M9,12 h22 v16 h-22 v-16 v16 h22 v-16 Z" /></svg></button>' },
            fullScreen: { autoStart: !1 },
        }),
            e(t).on({
                "onInit.fb": function (t, e) {
                    var n;
                    e && e.group[e.currIndex].opts.fullScreen
                        ? ((n = e.$refs.container),
                          n.on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function (t) {
                              t.stopPropagation(), t.preventDefault(), o.toggle(n[0]);
                          }),
                          e.opts.fullScreen && e.opts.fullScreen.autoStart === !0 && o.request(n[0]),
                          (e.FullScreen = o))
                        : e && e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide();
                },
                "afterKeydown.fb": function (t, e, n, o, i) {
                    e && e.FullScreen && 70 === i && (o.preventDefault(), e.FullScreen.toggle(e.$refs.container[0]));
                },
                "beforeClose.fb": function (t) {
                    t && t.FullScreen && o.exit();
                },
            }),
            e(t).on(n.fullscreenchange, function () {
                var t = o.isFullscreen(),
                    n = e.fancybox.getInstance();
                n &&
                    (n.current && "image" === n.current.type && n.isAnimating && (n.current.$content.css("transition", "none"), (n.isAnimating = !1), n.update(!0, !0, 0)),
                    n.trigger("onFullscreenChange", t),
                    n.$refs.container.toggleClass("fancybox-is-fullscreen", t));
            });
    })(document, window.jQuery || jQuery),
    (function (t, e) {
        "use strict";
        e.fancybox.defaults = e.extend(
            !0,
            {
                btnTpl: {
                    thumbs:
                        '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg viewBox="0 0 120 120"><path d="M30,30 h14 v14 h-14 Z M50,30 h14 v14 h-14 Z M70,30 h14 v14 h-14 Z M30,50 h14 v14 h-14 Z M50,50 h14 v14 h-14 Z M70,50 h14 v14 h-14 Z M30,70 h14 v14 h-14 Z M50,70 h14 v14 h-14 Z M70,70 h14 v14 h-14 Z" /></svg></button>',
                },
                thumbs: { autoStart: !1, hideOnClose: !0, parentEl: ".fancybox-container", axis: "y" },
            },
            e.fancybox.defaults
        );
        var n = function (t) {
            this.init(t);
        };
        e.extend(n.prototype, {
            $button: null,
            $grid: null,
            $list: null,
            isVisible: !1,
            isActive: !1,
            init: function (t) {
                var e = this;
                (e.instance = t), (t.Thumbs = e);
                var n = t.group[0],
                    o = t.group[1];
                (e.opts = t.group[t.currIndex].opts.thumbs),
                    (e.$button = t.$refs.toolbar.find("[data-fancybox-thumbs]")),
                    e.opts && n && o && ("image" == n.type || n.opts.thumb || n.opts.$thumb) && ("image" == o.type || o.opts.thumb || o.opts.$thumb)
                        ? (e.$button.show().on("click", function () {
                              e.toggle();
                          }),
                          (e.isActive = !0))
                        : e.$button.hide();
            },
            create: function () {
                var t,
                    n,
                    o = this,
                    i = o.instance,
                    a = o.opts.parentEl;
                (o.$grid = e('<div class="fancybox-thumbs fancybox-thumbs-' + o.opts.axis + '"></div>').appendTo(i.$refs.container.find(a).addBack().filter(a))),
                    (t = "<ul>"),
                    e.each(i.group, function (e, o) {
                        (n = o.opts.thumb || (o.opts.$thumb ? o.opts.$thumb.attr("src") : null)),
                            n || "image" !== o.type || (n = o.src),
                            n && n.length && (t += '<li data-index="' + e + '"  tabindex="0" class="fancybox-thumbs-loading"><img data-src="' + n + '" /></li>');
                    }),
                    (t += "</ul>"),
                    (o.$list = e(t)
                        .appendTo(o.$grid)
                        .on("click", "li", function () {
                            i.jumpTo(e(this).data("index"));
                        })),
                    o.$list
                        .find("img")
                        .hide()
                        .one("load", function () {
                            var t,
                                n,
                                o,
                                i,
                                a = e(this).parent().removeClass("fancybox-thumbs-loading"),
                                s = a.outerWidth(),
                                r = a.outerHeight();
                            (t = this.naturalWidth || this.width),
                                (n = this.naturalHeight || this.height),
                                (o = t / s),
                                (i = n / r),
                                o >= 1 && i >= 1 && (o > i ? ((t /= i), (n = r)) : ((t = s), (n /= o))),
                                e(this)
                                    .css({ width: Math.floor(t), height: Math.floor(n), "margin-top": n > r ? Math.floor(0.3 * r - 0.3 * n) : Math.floor(0.5 * r - 0.5 * n), "margin-left": Math.floor(0.5 * s - 0.5 * t) })
                                    .show();
                        })
                        .each(function () {
                            this.src = e(this).data("src");
                        }),
                    "x" === o.opts.axis && o.$list.width(parseInt(o.$grid.css("padding-right")) + i.group.length * o.$list.children().eq(0).outerWidth(!0) + "px");
            },
            focus: function (t) {
                var e,
                    n,
                    o = this,
                    i = o.$list;
                o.instance.current &&
                    ((e = i
                        .children()
                        .removeClass("fancybox-thumbs-active")
                        .filter('[data-index="' + o.instance.current.index + '"]')
                        .addClass("fancybox-thumbs-active")),
                    (n = e.position()),
                    "y" === o.opts.axis && (n.top < 0 || n.top > i.height() - e.outerHeight())
                        ? i.stop().animate({ scrollTop: i.scrollTop() + n.top }, t)
                        : "x" === o.opts.axis && (n.left < i.parent().scrollLeft() || n.left > i.parent().scrollLeft() + (i.parent().width() - e.outerWidth())) && i.parent().stop().animate({ scrollLeft: n.left }, t));
            },
            update: function () {
                this.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible),
                    this.isVisible ? (this.$grid || this.create(), this.instance.trigger("onThumbsShow"), this.focus(0)) : this.$grid && this.instance.trigger("onThumbsHide"),
                    this.instance.update();
            },
            hide: function () {
                (this.isVisible = !1), this.update();
            },
            show: function () {
                (this.isVisible = !0), this.update();
            },
            toggle: function () {
                (this.isVisible = !this.isVisible), this.update();
            },
        }),
            e(t).on({
                "onInit.fb": function (t, e) {
                    var o;
                    e && !e.Thumbs && ((o = new n(e)), o.isActive && o.opts.autoStart === !0 && o.show());
                },
                "beforeShow.fb": function (t, e, n, o) {
                    var i = e && e.Thumbs;
                    i && i.isVisible && i.focus(o ? 0 : 250);
                },
                "afterKeydown.fb": function (t, e, n, o, i) {
                    var a = e && e.Thumbs;
                    a && a.isActive && 71 === i && (o.preventDefault(), a.toggle());
                },
                "beforeClose.fb": function (t, e) {
                    var n = e && e.Thumbs;
                    n && n.isVisible && n.opts.hideOnClose !== !1 && n.$grid.hide();
                },
            });
    })(document, window.jQuery),
    (function (t, e) {
        "use strict";
        function n(t) {
            var e = { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;", "/": "&#x2F;", "`": "&#x60;", "=": "&#x3D;" };
            return String(t).replace(/[&<>"'`=\/]/g, function (t) {
                return e[t];
            });
        }
        e.extend(!0, e.fancybox.defaults, {
            btnTpl: {
                share:
                    '<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg viewBox="0 0 40 40"><path d="M6,30 C8,18 19,16 23,16 L23,16 L23,10 L33,20 L23,29 L23,24 C19,24 8,27 6,30 Z"></svg></button>',
            },
            share: {
                tpl:
                    '<div class="fancybox-share"><h1>{{SHARE}}</h1><p class="fancybox-share__links"><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" /></p></div>',
            },
        }),
            e(t).on("click", "[data-fancybox-share]", function () {
                var t,
                    o,
                    i = e.fancybox.getInstance();
                i &&
                    ((t = i.current.opts.hash === !1 ? i.current.src : window.location),
                    (o = i.current.opts.share.tpl
                        .replace(/\{\{media\}\}/g, "image" === i.current.type ? encodeURIComponent(i.current.src) : "")
                        .replace(/\{\{url\}\}/g, encodeURIComponent(t))
                        .replace(/\{\{url_raw\}\}/g, n(t))
                        .replace(/\{\{descr\}\}/g, i.$caption ? encodeURIComponent(i.$caption.text()) : "")),
                    e.fancybox.open({
                        src: i.translate(i, o),
                        type: "html",
                        opts: {
                            animationEffect: "fade",
                            animationDuration: 250,
                            afterLoad: function (t, e) {
                                e.$content.find(".fancybox-share__links a").click(function () {
                                    return window.open(this.href, "Share", "width=550, height=450"), !1;
                                });
                            },
                        },
                    }));
            });
    })(document, window.jQuery || jQuery),
    (function (t, e, n) {
        "use strict";
        function o() {
            var t = e.location.hash.substr(1),
                n = t.split("-"),
                o = n.length > 1 && /^\+?\d+$/.test(n[n.length - 1]) ? parseInt(n.pop(-1), 10) || 1 : 1,
                i = n.join("-");
            return o < 1 && (o = 1), { hash: t, index: o, gallery: i };
        }
        function i(t) {
            var e;
            "" !== t.gallery && ((e = n("[data-fancybox='" + n.escapeSelector(t.gallery) + "']").eq(t.index - 1)), e.length || (e = n("#" + n.escapeSelector(t.gallery))), e.length && ((s = !1), e.trigger("click")));
        }
        function a(t) {
            var e;
            return !!t && ((e = t.current ? t.current.opts : t.opts), e.hash || (e.$orig ? e.$orig.data("fancybox") : ""));
        }
        n.escapeSelector ||
            (n.escapeSelector = function (t) {
                var e = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g,
                    n = function (t, e) {
                        return e ? ("\0" === t ? "�" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " ") : "\\" + t;
                    };
                return (t + "").replace(e, n);
            });
        var s = !0,
            r = null,
            c = null;
        n(function () {
            n.fancybox.defaults.hash !== !1 &&
                (n(t).on({
                    "onInit.fb": function (t, e) {
                        var n, i;
                        e.group[e.currIndex].opts.hash !== !1 && ((n = o()), (i = a(e)), i && n.gallery && i == n.gallery && (e.currIndex = n.index - 1));
                    },
                    "beforeShow.fb": function (n, o, i) {
                        var l;
                        i &&
                            i.opts.hash !== !1 &&
                            ((l = a(o)),
                            l &&
                                "" !== l &&
                                (e.location.hash.indexOf(l) < 0 && (o.opts.origHash = e.location.hash),
                                (r = l + (o.group.length > 1 ? "-" + (i.index + 1) : "")),
                                "replaceState" in e.history
                                    ? (c && clearTimeout(c),
                                      (c = setTimeout(function () {
                                          e.history[s ? "pushState" : "replaceState"]({}, t.title, e.location.pathname + e.location.search + "#" + r), (c = null), (s = !1);
                                      }, 300)))
                                    : (e.location.hash = r)));
                    },
                    "beforeClose.fb": function (o, i, s) {
                        var l, u;
                        c && clearTimeout(c),
                            s.opts.hash !== !1 &&
                                ((l = a(i)),
                                (u = i && i.opts.origHash ? i.opts.origHash : ""),
                                l && "" !== l && ("replaceState" in history ? e.history.replaceState({}, t.title, e.location.pathname + e.location.search + u) : ((e.location.hash = u), n(e).scrollTop(i.scrollTop).scrollLeft(i.scrollLeft))),
                                (r = null));
                    },
                }),
                n(e).on("hashchange.fb", function () {
                    var t = o();
                    n.fancybox.getInstance() ? !r || r === t.gallery + "-" + t.index || (1 === t.index && r == t.gallery) || ((r = null), n.fancybox.close()) : "" !== t.gallery && i(t);
                }),
                setTimeout(function () {
                    i(o());
                }, 50));
        });
    })(document, window, window.jQuery || jQuery),
    (function (t, e) {
        "use strict";
        var n = new Date().getTime();
        e(t).on({
            "onInit.fb": function (t, e, o) {
                e.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll", function (t) {
                    var o = e.current,
                        i = new Date().getTime();
                    e.group.length < 1 ||
                        o.opts.wheel === !1 ||
                        ("auto" === o.opts.wheel && "image" !== o.type) ||
                        (t.preventDefault(),
                        t.stopPropagation(),
                        o.$slide.hasClass("fancybox-animated") || ((t = t.originalEvent || t), i - n < 250 || ((n = i), e[(-t.deltaY || -t.deltaX || t.wheelDelta || -t.detail) < 0 ? "next" : "previous"]())));
                });
            },
        });
    })(document, window.jQuery || jQuery);
!(function (n) {
    n.fn.dropdown = function (o) {
        var t = {},
            d = n(this),
            a = function () {
                n("[data-dropdown]").removeClass("hover"), n("[data-dropdown-menu]").fadeOut(75);
            };
        return this.each(function () {
            o && (o = n.extend(t, o)),
                (function (o, t) {
                    t.children("a").click(function (n) {
                        n.preventDefault();
                    });
                    var d = t.data("dropdown") || "menu",
                        c = t.data("dropdown-callback"),
                        e = n('[data-dropdown-menu="' + d + '"]'),
                        i = !!("ontouchstart" in window || (window.DocumentTouch && document instanceof DocumentTouch)),
                        u = !i && "hover" == t.data("dropdown-action");
                    t.click(function (o) {
                        o.stopPropagation(),
                            "block" != e.css("display")
                                ? (void 0 !== c && null != c && "" != c && ("function" == typeof window[c] ? window[c](d) : "function" == typeof c && c(d)), a(), e.fadeIn(75), n(this).addClass("hover"))
                                : (!u || (u && i)) && a();
                    }),
                        u &&
                            t
                                .mouseenter(function (o) {
                                    n(this).click();
                                })
                                .mouseleave(function () {
                                    a();
                                });
                })(0, d);
        });
    };
})(window.jQuery);
!(function (a) {
    a.fn.tabs = function (b) {
        var c = { current: "" },
            d = a(this),
            e = d.children(),
            f = d.find("li a"),
            g = a('[data-role="' + d.data("target") + '"] [data-role="frame"]'),
            h = function (b) {
                b.click(function (b) {
                    "#" == a(this).attr("href").charAt(0) &&
                        (b.preventDefault(), i(a(this)), "undefined" !== d.attr("id") && (($button = a("[data-mobilenav=" + d.attr("id") + "]")), $button && $(document).width() < 480 && $button.click()));
                });
            },
            i = function (b) {
                if (b.parent("li").hasClass("active")) return !1;
                g.hide(),
                    e.removeClass("active"),
                    a('[data-frame="' + b.attr("href").substr(1) + '"]').show(),
                    b.parent("li").addClass("active"),
                    "undefined" !== d.attr("id") && (($button = a("[data-mobilenav=" + d.attr("id") + "]")), $button && $button.html(b.html()));
            },
            j = function () {
                return (
                    window.location.hash
                        ? ($tab = e.find('a[href=#"' + window.location.hash.slice(1) + '"]'))
                        : "" != c.current
                        ? ($tab = e.find('a[href="#' + c.current + '"]'))
                        : (($tab = e.find("a.active")), $tab.length || ($tab = f.eq(0))),
                    $tab
                );
            };
        return this.each(function () {
            b && a.extend(c, b), h(f), i(j());
        });
    };
})(window.jQuery);
!(function (t) {
    t.fn.tooltips = function (o) {
        var i = t.extend({}, { position: "top" }, o);
        t("#tooltip-container").length || t("body").append('<div id="tooltip-container"><span class="tooltip-text"></span><span class="arrow"></span></div>'),
            t(this).each(function () {
                t(this).hover(
                    function () {
                        if (!(o = t(this).data("tooltip-title"))) {
                            var o = t(this).attr("title");
                            t(this).data("tooltip-title", o).removeAttr("title");
                        }
                        t("#tooltip-container .tooltip-text").html(o);
                        var n = t(this).offset().top,
                            a = t(this).offset().left - 7,
                            e = t("#tooltip-container").css("height"),
                            s = t(this).css("height");
                        if ("top" == i.position) {
                            var p = parseInt(n) - parseInt(e) - 10;
                            t("#tooltip-container span.arrow").addClass("down");
                        } else {
                            p = parseInt(n) + s + 10;
                            t("#tooltip-container span.arrow").removeClass("down");
                        }
                        t("#tooltip-container").css({ top: p, left: a }), t("#tooltip-container").fadeIn(150);
                    },
                    function () {
                        t("#tooltip-container").fadeOut(150);
                    }
                );
            });
    };
})(window.jQuery);

!(function (e) {
    e.fn.mobilenav = function (n) {
        var a = { duration: 200, easing: "swing" },
            i = e(this),
            l = e("#" + i.data("mobilenav"));
        return this.each(function () {
            n && e.extend(a, n),
                l.length
                    ? i.click(function (e) {
                          e.preventDefault(), i.hasClass("collapsed") ? i.removeClass("collapsed") : i.addClass("collapsed"), l.slideFadeToggle(a.duration, a.easing);
                      })
                    : i.remove();
        });
    };
})(window.jQuery);
!(function (t, e) {
    "use strict";
    var r = t.jQuery || t.Zepto,
        a = 0,
        n = !1;
    function i(a, i, o, u, l) {
        var c = -1,
            f = -1,
            s = !1,
            d = "load",
            h = "error",
            g = "img",
            m = "src",
            p = "srcset",
            v = "sizes",
            b = "background-image";
        function A() {
            var e, n, d, h;
            (s = t.devicePixelRatio > 1),
                (o = y(o)),
                (u.e =
                    ((e = i.throttle),
                    (n = function (t) {
                        "resize" === t.type && (c = f = -1), z(t.all);
                    }),
                    (h = 0),
                    function (t, r) {
                        var o = +new Date() - h;
                        function u() {
                            (h = +new Date()), n.call(a, t);
                        }
                        d && clearTimeout(d), o > e || !i.enableThrottle || r ? u() : (d = setTimeout(u, e - o));
                    })),
                (u.a = function (t) {
                    (t = y(t)), o.push.apply(o, t);
                }),
                (u.g = function () {
                    return (o = r(o).filter(function () {
                        return !r(this).data(i.loadedName);
                    }));
                }),
                (u.f = function (t) {
                    for (var e = 0; e < t.length; e++) {
                        var r = o.filter(function () {
                            return this === t[e];
                        });
                        r.length && z(!1, r);
                    }
                }),
                z(),
                r(i.appendScroll).on("scroll." + l + " resize." + l, u.e);
        }
        function y(t) {
            for (
                var n = i.placeholder,
                    o = i.srcsetAttribute,
                    u = i.loaderAttribute,
                    l = i._f || {},
                    c = 0,
                    f = (t = r(t)
                        .filter(function () {
                            var t = r(this),
                                a = T(this);
                            return !t.data(i.handledName) && (t.attr(i.attribute) || t.attr(o) || t.attr(u) || l[a] !== e);
                        })
                        .data("plugin_" + i.name, a)).length;
                c < f;
                c++
            ) {
                var s = r(t[c]),
                    d = T(t[c]);
                d === g && s.attr(o) && s.attr(o, s.attr(o)), l[d] === e || s.attr(u) ? d === g || !n || (s.css(b) && "none" !== s.css(b)) || s.css(b, "url('" + n + "')") : s.attr(u, l[d]);
            }
            return t;
        }
        function z(t, e) {
            if (o.length) {
                for (var n = e || o, u = !1, l = i.srcsetAttribute, c = i.handledName, f = 0; f < n.length; f++)
                    if (t || e || N(n[f])) {
                        var s = r(n[f]),
                            d = T(n[f]),
                            h = s.attr(i.attribute);
                        s.data(c) || (!h && !s.attr(l)) || ((d !== g || (h === s.attr(m) && s.attr(l) === s.attr(p))) && (d === g || h === s.css(b))) || ((u = !0), s.data(c, !0), w(s, d));
                    }
                u &&
                    (o = r(o).filter(function () {
                        return !r(this).data(c);
                    }));
            } else a.destroy();
        }
        function w(t, e) {
            var a = function () {
                    a = r.noop;
                },
                n = i.attribute,
                o = i.srcsetAttribute,
                u = i.sizesAttribute,
                l = i.retinaAttribute,
                c = i.removeAttribute,
                f = i.loadedName,
                A = t.attr(l),
                y = r(new Image());
            y.one(h, a).one(d, function () {
                t.hide(),
                    e === g ? t.attr(v, y.attr(v)).attr(p, y.attr(p)).attr(m, y.attr(m)).addClass(f) : t.css(b, "url('" + y.attr(m) + "')"),
                    t[i.effect](i.effectTime),
                    c && (t.removeAttr(n + " " + o + " " + l), u !== v && t.removeAttr(u)),
                    t.data(f, !0),
                    y.remove();
            });
            var z = (s && A ? A : t.attr(n)) || "";
            y
                .attr(v, t.attr(u))
                .attr(p, t.attr(o))
                .attr(m, z || null),
                y.complete && y.trigger(d);
        }
        function N(e) {
            var a = e.getBoundingClientRect(),
                n = i.scrollDirection,
                o = i.threshold,
                u = (f >= 0 ? f : (f = r(t).height())) + o > a.top && -o < a.bottom,
                l = (c >= 0 ? c : (c = r(t).width())) + o > a.left && -o < a.right;
            return "vertical" === n ? u : "horizontal" === n ? l : u && l;
        }
        function T(t) {
            return t.tagName.toLowerCase();
        }
        n ? A() : r(t).on(d + "." + l, A);
    }
    function o(n, o) {
        var u = this,
            l = r.extend({}, u.cfg, o),
            c = {},
            f = l.name + "-" + ++a;
        return (
            (u.cfg = function (t, r) {
                return r === e ? l[t] : ((l[t] = r), u);
            }),
            (u.addItems = function (t) {
                return c.a && c.a("string" === r.type(t) ? r(t) : t), u;
            }),
            (u.getItems = function () {
                return c.g ? c.g() : {};
            }),
            (u.update = function (t) {
                return c.e && c.e({}, !t), u;
            }),
            (u.force = function (t) {
                return c.f && c.f("string" === r.type(t) ? r(t) : t), u;
            }),
            (u.loadAll = function () {
                return c.e && c.e({ all: !0 }, !0), u;
            }),
            (u.destroy = function () {
                return r(l.appendScroll).off("." + f, c.e), r(t).off("." + f), (c = {}), e;
            }),
            i(u, l, n, c, f),
            n
        );
    }
    (r.fn.Lazy = r.fn.lazy = function (t) {
        return new o(this, t);
    }),
        (r.Lazy = r.lazy = function (t, a, n) {
            if ((r.isFunction(a) && ((n = a), (a = [])), r.isFunction(n))) {
                (t = r.isArray(t) ? t : [t]), (a = r.isArray(a) ? a : [a]);
                for (var i = o.prototype.cfg, u = i._f || (i._f = {}), l = 0, c = t.length; l < c; l++) (i[t[l]] === e || r.isFunction(i[t[l]])) && (i[t[l]] = n);
                for (var f = 0, s = a.length; f < s; f++) u[a[f]] = t[0];
            }
        }),
        (o.prototype.cfg = {
            name: "lazyload",
            threshold: 500,
            appendScroll: t,
            scrollDirection: "both",
            placeholder: null,
            attribute: "data-src",
            srcsetAttribute: "data-srcset",
            sizesAttribute: "data-sizes",
            retinaAttribute: "data-retina",
            loaderAttribute: "data-loader",
            removeAttribute: !0,
            handledName: "handled",
            loadedName: "loaded",
            effect: "fadeIn",
            effectTime: 100,
            enableThrottle: !0,
            throttle: 250,
        }),
        r(t).on("load", function () {
            n = !0;
        });
})(window);

// Essentials
var base_url = "/",
    site_url = "/",
    config = {},
    cache = {};
function initJS(t) {
    "function" == typeof $.fn.Lazy && ("undedinfed" == typeof window.location.pathname || -1 == window.location.pathname.indexOf("blog") || window.location.pathname.indexOf("blog-disclaimer-generator") > -1) && $("img.lazyload").lazy();
    var i = $(this).data("tooltip-position") || "top";
    $("[data-tooltip]", t).tooltips({ position: i }),
        $("[data-dropdown]", t).each(function () {
            $(this).dropdown();
        }),
        $('[data-role="lightbox"]', t).each(function (t) {
            $(this).fancybox({ buttons: ["close"] });
        }),
        $('a[data-role="modal"]', t).click(function (t) {
            t.preventDefault(), $(this).removeAttr("data-role");
            $(this).data("title");
            var i = $(this).data("type"),
                n = $(this).data("src"),
                e = n || $(this).attr("href");
            0 == (e += e.indexOf("?") > 0 ? "&modal=1" : "?modal=1").indexOf("http://") || 0 == e.indexOf("https://")
                ? $.fancybox.open({ buttons: ["close"], toolbar: !1, type: "ajax", src: e })
                : $.fancybox.open({
                      buttons: ["close"],
                      type: i,
                      src: n,
                      baseTpl:
                          '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-stage modal" style="margin-left:auto;margin-right:auto;"></div></div></div>',
                  });
        }),
        $('a[data-role="confirm"]', t).click(function (t) {
            t.preventDefault(), $(this).removeAttr("data-role");
            $(this).data("confirm"), $(this).attr("html");
            var i = $(this).attr("href");
            (i += i.indexOf("?") > 0 ? "&modal=1" : "?modal=1"), $(this).confirmAction();
        }),
        $("figure div.image").hover(
            function () {
                return $(".hover", this).fadeIn(100), !1;
            },
            function () {
                return $(".hover", this).fadeOut(100), !1;
            }
        ),
        $("ul.gallery figure div.image").hover(
            function () {
                return $(".check", this).fadeIn(100), $(".hover", this).fadeIn(100), !1;
            },
            function () {
                return $(".hover", this).fadeOut(100), $("input.checkbox", this).prop("checked") || $(".check", this).fadeOut(100), !1;
            }
        ),
        $("ul.gallery figure div.image div.check").click(function (t) {
            $(this).find("input.checkbox").click();
        }),
        $("ul.gallery figure input.checkbox").click(function (t) {
            var i = $(this),
                n = $(this).siblings(".icon");
            return i.prop("checked") ? n.addClass("checked") : n.removeClass("checked"), !0;
        });
}
function confirmForm(t) {
    (t = $.extend(!0, { form: null, html: "Confirm it", okButton: "Continue", noButton: "Cancel" }, t || {})),
        $.fancybox.open({
            type: "html",
            src:
                '<div class="modal"><div class="lightbox-confirmation"><p>' +
                t.html +
                '</p><div class="clearfix"><a href="#" onclick="$(\'' +
                t.form +
                '\').submit();return false;" class="button small success float-left margin-right" data-value="1" data-fancybox-close>' +
                t.okButton +
                '</button><a href="#" onclick="return false" class="button small danger float-left" data-value="0" data-fancybox-close>' +
                t.noButton +
                "</button></div></div></div>",
            opts: {
                animationDuration: 350,
                animationEffect: "material",
                modal: !0,
                baseTpl: '<div class="fancybox-container fc-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-stage"></div></div></div>',
                afterShow: function (t, i, n) {
                    $("div.lightbox-confirmation a.success").focus();
                },
                beforeClose: function (i, n, e) {
                    if ("function" == typeof t.callback) {
                        var o = e ? e.target || e.currentTarget : null,
                            a = o ? $(o).data("value") : 0;
                        t.callback(a);
                    }
                    return !0;
                },
            },
        });
}
function toggleFormItems(t, i, n) {
    return (
        "" != t &&
            (void 0 !== n && "gallery" == n
                ? $("#" + t + " ul.gallery li").each(function () {
                      ($checkbox = $(this).find("div.check")),
                          ($input = $checkbox.find("input.checkbox")),
                          1 != i || $input.prop("checked") ? 0 == i && $input.prop("checked") && ($checkbox.click(), $checkbox.hide()) : ($checkbox.click(), $checkbox.show());
                  })
                : $("#" + t + " input.checkbox").each(function () {
                      0 != $(this).val() && $(this).prop("checked", 1 == i);
                  })),
        !0
    );
}
$(function () {
    initJS(this),
        $("[data-mobilenav]").each(function () {
            $(this).mobilenav();
        }),
        $("#tabs ul").tabs({ current: "undefined" == typeof currentTab ? "" : currentTab });
}),
    ($.fn.confirmAction = function (t) {
        ((t = $.extend(!0, { okButton: "Continue", noButton: "Cancel" }, t || {})).html = this.data("html")),
            (t.href = this.attr("href")),
            (t.href = t.href + (t.href.indexOf("?") > 0 ? "&modal=1" : "?modal=1")),
            $.fancybox.open({
                type: "html",
                src:
                    '<div class="modal"><div class="lightbox-confirmation"><p>' +
                    t.html +
                    '</p><div class="clearfix"><a href="#" onclick="' +
                    ("function" != typeof t.callback ? "window.location='" + t.href + "'\";" : "") +
                    'return false;" class="button small success float-left margin-right" data-value="1" data-fancybox-close>' +
                    t.okButton +
                    '</button><a href="#" onclick="return false" class="button small danger float-left" data-value="0" data-fancybox-close>' +
                    t.noButton +
                    "</button></div></div></div>",
                opts: {
                    animationDuration: 350,
                    animationEffect: "material",
                    modal: !0,
                    baseTpl: '<div class="fancybox-container fc-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-stage"></div></div></div>',
                    afterShow: function (t, i, n) {
                        $("div.lightbox-confirmation a.success").focus();
                    },
                    beforeClose: function (i, n, e) {
                        if ("function" == typeof t.callback) {
                            var o = e ? e.target || e.currentTarget : null,
                                a = o ? $(o).data("value") : 0;
                            t.callback(a);
                        }
                        return !0;
                    },
                },
            });
    });
var infinite_loop_pages = {};
function infiniteScrollLoader(t, i, n) {
    $("#infinitescroll-" + n + "-status").attr("onclick", ""),
        $("#infinitescroll-" + n + "-status").click(function () {
            return !1;
        }),
        void 0 === infinite_loop_pages[n] && (infinite_loop_pages[n] = 0),
        infinite_loop_pages[n]++,
        runAjax(
            t,
            { page: i },
            function (t, e) {
                $("#infinitescroll-" + n + "-pagination").remove(), $("#infinitescroll-" + n + "-container").append(t), initJS($(".infinitescroll-page-" + i));
            },
            "",
            "#infinitescroll-" + n + "-status",
            "icon-system-ajax"
        );
}
function infiniteScrollAutoLoader(t) {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() >= $(document).height() - $(window).height() && $("#infinitescroll-" + t + "-status").length) {
            if ((void 0 === infinite_loop_pages[t] && (infinite_loop_pages[t] = 0), infinite_loop_pages[t] >= 0)) return !1;
            $("#infinitescroll-" + t + "-status").click();
        }
    });
}
function picturesRotate(t, i, n, e) {
    runAjax(
        t,
        { thumb: void 0 === e || e ? 1 : 0 },
        function (t, i) {
            $(n).is("img") ? $(n).attr("src", t.src) : $(n).css("background-image", "url('" + t.src + "')");
        },
        {},
        i,
        "icon-overlay-ajax"
    );
}
function scrollToElement(t, i) {
    (i = void 0 !== i ? i : 250), $("html, body").animate({ scrollTop: $(t).offset().top }, i, "linear");
}
($.fn.toggleText = function (t, i) {
    return this.text(this.text() == i ? t : i);
}),
    ($.fn.slideFadeToggle = function (t, i, n) {
        return this.animate({ opacity: "toggle", height: "toggle" }, t, i, n);
    }),
    ($.fn.slideFadeShow = function (t, i, n) {
        return this.animate({ opacity: "show", height: "show" }, t, i, n);
    }),
    ($.fn.slideFadeHide = function (t, i, n) {
        return this.animate({ opacity: "hide", height: "hide" }, t, i, n);
    }),
    ($.fn.insertAtCaret = function (t) {
        return this.each(function () {
            var i = this;
            if (document.selection) i.focus(), (sel = document.selection.createRange()), (sel.text = t), i.focus();
            else if (i.selectionStart || "0" == i.selectionStart) {
                var n = i.selectionStart,
                    e = i.selectionEnd,
                    o = i.scrollTop;
                (i.value = i.value.substring(0, n) + t + i.value.substring(e, i.value.length)), i.focus(), (i.selectionStart = n + t.length), (i.selectionEnd = n + t.length), (i.scrollTop = o);
            } else (i.value += t), i.focus();
        });
    });
function startAjax(e, a) {
    void 0 === a || null == a || "" == a ? $(e).show() : "string" == typeof e ? $(e).addClass(a) : e.addClass(a);
}
function stopAjax(e, a) {
    void 0 === a || null == a || "" == a ? $(e).hide() : "string" == typeof e ? $(e).removeClass(a) : e.removeClass(a);
}
var activeAjaxURLs = {};
function runAjax(e, a, t, o, i, n, s, r, l, c) {
    if (void 0 !== activeAjaxURLs[e] && activeAjaxURLs[e]) return !1;
    (activeAjaxURLs[e] = !0),
        void 0 !== i && null != i && "" != i && startAjax(i, n),
        void 0 !== l && null != l && "" != l && ("function" == typeof l ? l(c) : window[l](c)),
        (a._ajax = 1),
        $.ajax({
            type: "POST",
            url: e,
            data: a,
            dataType: "json",
            success: function (a) {
                void 0 !== i && null != i && "" != i && stopAjax(i, n),
                    (activeAjaxURLs[e] = !1),
                    null != a
                        ? void 0 !== a.status && void 0 !== a.code && void 0 !== a.message
                            ? "error" != a.status
                                ? void 0 !== t && null != t && "" != t && ("function" == typeof t ? t(a.message, o) : window[t](a.message, o))
                                : void 0 !== s && null != s && "" != s
                                ? "function" == typeof s
                                    ? s(a.code, a.message, r)
                                    : window[s](a.code, a.message, r)
                                : alert("Error occurred processing request:\n" + a.message + " (#" + a.code + ")")
                            : alert("Response is missing parameters (#1012)")
                        : alert("Invalid response received (#1011)");
            },
            error: function (a, t, o) {
                void 0 !== i && null != i && "" != i && stopAjax(i, n), (activeAjaxURLs[e] = !1);
            },
        });
}
function ajaxObjectConfirmDelete(e, a, t, o, i, n) {
    void 0 === n ? (n = "ajaxHTMLDelete") : "function" != typeof n && (n = "ajaxHTMLReplaceWith");
    var s = void 0 !== a.confirmid ? a.confirmid : o;
    $(s).confirmAction({
        callback: function (r) {
            r && ($(s).attr("title", ""), $(s).data("tooltip", ""), $(s).qtip("destroy", !0), runAjax(e, void 0 === a || null == a || "" == a ? {} : a, n, t, o, void 0 === i || null == i || "" == i ? "icon-system-ajax" : i));
        },
    });
}
function ajaxHTML(e, a) {
    $(a).html(e), initJS($(a));
}
function ajaxHTMLReplaceWith(e, a) {
    $(a).replaceWith(e), initJS($(a));
}
function ajaxHTMLDelete(e, a) {
    "string" == typeof a ? $(a).remove() : a.remove();
}
function geoGetStates(t, e) {
    var a = $("#" + e + "_country").val();
    "" != a && void 0 !== geoDBCache[a] ? geoBuildElements(e, t, geoDBCache[a]) : geoResetElements(e);
}
function geoBuildElements(t, e, a) {
    var n = $("#" + t + "_state").html("");
    e = "any" == e ? "Any" : "Select";
    $("#" + t + "_state").append($("<option></option>").attr("value", $.trim("")).text(e)),
        $.each(a, function (t, e) {
            n.append($("<option></option>").attr("value", $.trim(t)).text(e));
        });
    var o = t.replace("input_edit_", "input_row_");
    void 0 !== "#" + o + "_state" && $("#" + o + "_state").show(), $("#" + t + "_state").show();
}
function geoResetElements(t) {
    $("#" + t + "_state").html("");
    var e = t.replace("input_edit_", "input_row_");
    void 0 !== "#" + e + "_state" && $("#" + e + "_state").hide(), $("#" + t + "_state").hide();
}

// Plugins
function toggleCommentsPost(e) {
    0 == $("#comments-container-" + e.resource + "-" + e.item_id + " div.comments-list").length
        ? "none" == $("#comments-container-" + e.resource + "-" + e.item_id).css("display")
            ? ("none" == $("#post-comment-" + e.resource + "-" + e.item_id).css("display") && $("#post-comment-" + e.resource + "-" + e.item_id).show(), $("#comments-container-" + e.resource + "-" + e.item_id).slideFadeShow(100))
            : $("#comments-container-" + e.resource + "-" + e.item_id).slideFadeHide(100)
        : $("#post-comment-" + e.resource + "-" + e.item_id).slideFadeToggle(100);
}
function changeOnlineStatus(s) {
    runAjax(site_url + "users/changestatus", { status: s }, "ajaxHTMLReplaceWith", "#user-online-status", "#user-online-status", "icon-system-ajax");
}

// Custom scripts (? indicates that the file is optional and won't trigger an error if it doesn't exist)

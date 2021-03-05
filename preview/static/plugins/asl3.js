! function(n) {
    var e = {};

    function t(i) {
        if (e[i]) return e[i].exports;
        var r = e[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return n[i].call(r.exports, r, r.exports, t), r.l = !0, r.exports
    }
    t.m = n, t.c = e, t.d = function(n, e, i) {
        t.o(n, e) || Object.defineProperty(n, e, {
            enumerable: !0,
            get: i
        })
    }, t.r = function(n) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(n, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(n, "__esModule", {
            value: !0
        })
    }, t.t = function(n, e) {
        if (1 & e && (n = t(n)), 8 & e) return n;
        if (4 & e && "object" == typeof n && n && n.__esModule) return n;
        var i = Object.create(null);
        if (t.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: n
            }), 2 & e && "string" != typeof n)
            for (var r in n) t.d(i, r, function(e) {
                return n[e]
            }.bind(null, r));
        return i
    }, t.n = function(n) {
        var e = n && n.__esModule ? function() {
            return n.default
        } : function() {
            return n
        };
        return t.d(e, "a", e), e
    }, t.o = function(n, e) {
        return Object.prototype.hasOwnProperty.call(n, e)
    }, t.p = "", t(t.s = 27)
}([function(n, e, t) {
    "use strict";

    function i(n, e, t, i, r, s, o, a) {
        var c, u = "function" == typeof n ? n.options : n;
        if (e && (u.render = e, u.staticRenderFns = t, u._compiled = !0), i && (u.functional = !0), s && (u._scopeId = "data-v-" + s), o ? (c = function(n) {
                (n = n || this.$vnode && this.$vnode.ssrContext || this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) || "undefined" == typeof __VUE_SSR_CONTEXT__ || (n = __VUE_SSR_CONTEXT__), r && r.call(this, n), n && n._registeredComponents && n._registeredComponents.add(o)
            }, u._ssrRegister = c) : r && (c = a ? function() {
                r.call(this, this.$root.$options.shadowRoot)
            } : r), c)
            if (u.functional) {
                u._injectStyles = c;
                var l = u.render;
                u.render = function(n, e) {
                    return c.call(e), l(n, e)
                }
            } else {
                var f = u.beforeCreate;
                u.beforeCreate = f ? [].concat(f, c) : [c]
            }
        return {
            exports: n,
            options: u
        }
    }
    t.d(e, "a", function() {
        return i
    })
}, function(n, e, t) {
    var i = t(17);
    "string" == typeof i && (i = [
        [n.i, i, ""]
    ]);
    var r = {
        hmr: !0,
        transform: void 0,
        insertInto: void 0
    };
    t(15)(i, r);
    i.locals && (n.exports = i.locals)
}, function(n, e, t) {
    "use strict";
    "kiwi public";
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var i = kiwi.require("components/AwayStatusIndicator"),
        r = kiwi.require("components/TypingStatusIndicator");
    e.default = {
        components: {
            AwayStatusIndicator: i,
            TypingStatusIndicator: r
        },
        props: ["network", "user", "nicklist"],
        computed: {
            userColour: function() {
                return this.nicklist.useColouredNicks ? this.user.getColour() : ""
            }
        }
    }
}, function(n, e, t) {
    "use strict";
    t.r(e);
    var i = t(2),
        r = t.n(i);
    for (var s in i) "default" !== s && function(n) {
        t.d(e, n, function() {
            return i[n]
        })
    }(s);
    e.default = r.a
}, function(n, e, t) {
    var i = t(20);
    "string" == typeof i && (i = [
        [n.i, i, ""]
    ]), i.locals && (n.exports = i.locals);
    (0, t(16).default)("38cb9b94", i, !1, {})
}, function(n, e, t) {
    "use strict";
    "kiwi public";
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var i = function(n) {
        if (n && n.__esModule) return n;
        var e = {};
        if (null != n)
            for (var t in n) Object.prototype.hasOwnProperty.call(n, t) && (e[t] = n[t]);
        return e.default = n, e
    }(t(14));
    var r = kiwi.require("helpers/TextFormatting"),
        s = kiwi.require("components/AwayStatusIndicator");
    e.default = {
        components: {
            AwayStatusIndicator: s
        },
        props: ["buffer", "network", "user"],
        data: function() {
            return {
                whoisRequested: !1,
                whoisLoading: !1,
                realname: ""
            }
        },
        computed: {
            asl: function() {
                return i.getASL(this.user.realname)
            },
            availableChannelModes: function() {
                var n = [],
                    e = {
                        q: "Owner",
                        a: "Admin",
                        o: "Operator",
                        h: "Half-Operator",
                        v: "Voice"
                    };
                return this.network.ircClient.network.options.PREFIX.forEach(function(t) {
                    var i = t.mode;
                    e[i] && n.push({
                        mode: i,
                        description: e[i]
                    })
                }), n
            },
            areWeAnOp: function() {
                return !!this.buffer && this.buffer.isUserAnOp(this.buffer.getNetwork().nick)
            },
            isUserOnBuffer: function() {
                return !!this.buffer && !!this.user.buffers[this.buffer.id]
            },
            userMode: {
                get: function() {
                    if (!this.buffer) return "";
                    var n = this.user.buffers[this.buffer.id];
                    if (!n) return "";
                    var e = n.modes;
                    return e.length > 0 ? e[0] : ""
                },
                set: function(n) {
                    var e = this.network.ircClient,
                        t = this.userMode,
                        i = [],
                        r = [];
                    t && (i.push("-" + t), r.push(this.user.nick)), n && (i.push("+" + n), r.push(this.user.nick));
                    var s = ["MODE", this.buffer.name, i.join("")].concat(r);
                    e.raw(s)
                }
            },
            userChannels: function() {
                for (var n = this.user.channels.trim().split(" "), e = 0; e < n.length; e++) n[e] = r.linkifyChannels(n[e]);
                return n.join(" ")
            },
            isSelf: function() {
                return this.user === this.network.currentUser()
            }
        },
        watch: {
            user: function() {
                this.whoisRequested = !1, this.whoisLoading = !1
            }
        },
        methods: {
            userModeOnThisBuffer: function(n) {
                if (!this.buffer) return "";
                var e = n.buffers[this.buffer.id].modes;
                return e.length > 0 ? e[0] : ""
            },
            openQuery: function() {
                var n = this.$state.addBuffer(this.network.id, this.user.nick);
                this.$state.setActiveBuffer(this.network.id, n.name), this.$state.ui.is_narrow && this.$state.$emit("userbox.hide")
            },
            onChannelsClick: function(n) {
                var e = n.target.getAttribute("data-channel-name");
                if (e) {
                    var t = this.buffer.getNetwork();
                    this.$state.addBuffer(this.buffer.networkid, e), t.ircClient.join(e)
                }
            },
            updateWhoisData: function() {
                var n = this;
                this.whoisRequested = !0, this.whoisLoading = !0, this.network.ircClient.whois(this.user.nick, function() {
                    n.whoisLoading = !1
                })
            },
            kickUser: function() {
                var n = this.$state.setting("buffers.default_kick_reason");
                this.network.ircClient.raw("KICK", this.buffer.name, this.user.nick, n)
            },
            createBanMask: function() {
                var n = this.$state.setting("buffers.default_ban_mask");
                return n = (n = (n = n.replace("%n", this.user.nick)).replace("%i", this.user.username)).replace("%h", this.user.host)
            },
            banUser: function() {
                if (this.user.username && this.user.host) {
                    var n = this.createBanMask();
                    this.network.ircClient.raw("MODE", this.buffer.name, "+b", n)
                }
            },
            kickbanUser: function() {
                if (this.user.username && this.user.host) {
                    var n = this.createBanMask(),
                        e = this.$state.setting("buffers.default_kick_reason");
                    this.network.ircClient.raw("MODE", this.buffer.name, "+b", n), this.network.ircClient.raw("KICK", this.buffer.name, this.user.nick, e)
                }
            }
        }
    }
}, function(n, e, t) {
    "use strict";
    t.r(e);
    var i = t(5),
        r = t.n(i);
    for (var s in i) "default" !== s && function(n) {
        t.d(e, n, function() {
            return i[n]
        })
    }(s);
    e.default = r.a
}, function(n, e, t) {
    var i = t(24);
    "string" == typeof i && (i = [
        [n.i, i, ""]
    ]);
    var r = {
        hmr: !0,
        transform: void 0,
        insertInto: void 0
    };
    t(15)(i, r);
    i.locals && (n.exports = i.locals)
}, function(n, e, t) {
    "use strict";
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var i = kiwi.state,
        r = kiwi.require("helpers/Misc"),
        s = kiwi.require("components/startups/CommonLayout"),
        o = kiwi.require("libs/Logger").namespace("Welcome.vue");
    e.default = {
        components: {
            StartupLayout: s
        },
        data: function() {
            return {
                network: null,
                channel: "",
                nick: "",
                password: "",
                showChannel: !0,
                showPass: !0,
                toggablePass: !0,
                showNick: !0,
                show_password_box: !1,
                recaptchaSiteId: "",
                recaptchaResponseCache: "",
                connectWithoutChannel: !1,
                showPlainText: !1,
                age: null,
                sex: null,
                location: null
            }
        },
        computed: {
            greetingText: function() {
                var n = i.settings.startupOptions.greetingText;
                return "string" == typeof n ? n : this.$t("start_greeting")
            },
            buttonText: function() {
                var n = i.settings.startupOptions.buttonText;
                return "string" == typeof n ? n : this.$t("start_button")
            },
            readyToStart: function() {
                var n = !!this.nick;
                this.connectWithoutChannel || this.channel || (n = !1);
                var e = this.$state.setting("startupOptions.nick_format"),
                    t = "";
                if (e) {
                    var i = "",
                        r = "";
                    if ("/" === e[0]) {
                        var s = e.lastIndexOf("/");
                        i = e.substring(1, s), r = e.substr(s + 1)
                    } else i = _.escapeRegExp(e), r = "i";
                    try {
                        t = new RegExp(i, r)
                    } catch (n) {
                        return o.error("Nick format error: " + n.message), !1
                    }
                } else t = /^[a-z_\\[\]{}^`|][a-z0-9_\-\\[\]{}^`|]*$/i;
                return this.nick.match(t) || (n = !1), n
            }
        },
        created: function() {
            var n = i.settings.startupOptions;
            this.nick = this.processNickRandomNumber(r.queryStringVal("nick") || n.nick || ""), this.age = r.queryStringVal("age") || n.age || "", this.sex = r.queryStringVal("sex") || n.sex || "", this.location = r.queryStringVal("location") || n.location || "", this.password = n.password || "", this.channel = decodeURIComponent(window.location.hash) || n.channel || "", this.showChannel = "boolean" != typeof n.showChannel || n.showChannel, this.showNick = "boolean" != typeof n.showNick || n.showNick, this.showPass = "boolean" != typeof n.showPassword || n.showPassword, this.toggablePass = "boolean" != typeof n.toggablePassword || n.toggablePassword, this.connectWithoutChannel = !!n.allowNoChannel, n.autoConnect && this.nick && (this.channel || this.connectWithoutChannel) && this.startUp(), this.recaptchaSiteId = n.recaptchaSiteId || ""
        },
        mounted: function() {
            if (this.recaptchaSiteId) {
                var n = document.createElement("script");
                n.src = "https://www.google.com/recaptcha/api.js", this.$el.appendChild(n)
            }
        },
        methods: {
            captchaSuccess: function() {
                return !this.recaptchaSiteId || !!this.captchaResponse()
            },
            captchaResponse: function() {
                if (this.recaptchaResponseCache) return this.recaptchaResponseCache;
                var n = this.$el.querySelector("#g-recaptcha-response");
                return this.recaptchaResponseCache = n ? n.value : "", this.recaptchaResponseCache
            },
            readableStateError: function(n) {
                return r.networkErrorMessage(n)
            },
            formSubmit: function() {
                this.readyToStart && this.startUp()
            },
            startUp: function() {
                var n = this,
                    e = i.settings.startupOptions;
                if (this.captchaSuccess()) {
                    var t = _.trim(e.server),
                        s = this.network || i.getNetworkFromAddress(t);
                    (s = s || i.addNetwork("Network", this.nick, {
                        server: t,
                        port: e.port,
                        tls: e.tls,
                        password: this.password,
                        encoding: _.trim(e.encoding),
                        direct: !!e.direct,
                        path: e.direct_path || "",
                        gecos: this.buildGecos()
                    })).connection.nick = this.nick, s.password = this.password, s.gecos = this.buildGecos(), !this.network && e.recaptchaSiteId && (s.captchaResponse = this.captchaResponse()), this.network = s;
                    var o = !1;
                    r.extractBuffers(this.channel).forEach(function(n) {
                        var e = i.addBuffer(s.id, n.name);
                        e.enabled = !0, e && !o && (i.setActiveBuffer(s.id, e.name), o = !0), n.key && (e.key = n.key)
                    }), o || i.setActiveBuffer(s.id, s.serverBuffer().name), s.ircClient.connect();
                    var a = function e() {
                            n.$refs.layout && n.$refs.layout.close(), s.ircClient.off("registered", e), s.ircClient.off("close", c)
                        },
                        c = function n() {
                            s.ircClient.off("registered", a), s.ircClient.off("close", n)
                        };
                    s.ircClient.once("registered", a), s.ircClient.once("close", c)
                }
            },
            processNickRandomNumber: function(n) {
                var e = (n || "").replace(/\?/g, function() {
                    return Math.floor(100 * Math.random()).toString()
                });
                return _.trim(e)
            },
            buildGecos: function() {
                return "[" + (this.age || "U") + "/" + (this.sex || "U") + "/" + (this.location || "U") + "]"
            }
        }
    }
}, function(n, e, t) {
    "use strict";
    t.r(e);
    var i = t(8),
        r = t.n(i);
    for (var s in i) "default" !== s && function(n) {
        t.d(e, n, function() {
            return i[n]
        })
    }(s);
    e.default = r.a
}, function(n, e) {
    n.exports = function(n) {
        var e = [];
        return e.toString = function() {
            return this.map(function(e) {
                var t = function(n, e) {
                    var t = n[1] || "",
                        i = n[3];
                    if (!i) return t;
                    if (e && "function" == typeof btoa) {
                        var r = function(n) {
                                return "/*# sourceMappingURL=data:application/json;charset=utf-8;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(n)))) + " */"
                            }(i),
                            s = i.sources.map(function(n) {
                                return "/*# sourceURL=" + i.sourceRoot + n + " */"
                            });
                        return [t].concat(s).concat([r]).join("\n")
                    }
                    return [t].join("\n")
                }(e, n);
                return e[2] ? "@media " + e[2] + "{" + t + "}" : t
            }).join("")
        }, e.i = function(n, t) {
            "string" == typeof n && (n = [
                [null, n, ""]
            ]);
            for (var i = {}, r = 0; r < this.length; r++) {
                var s = this[r][0];
                "number" == typeof s && (i[s] = !0)
            }
            for (r = 0; r < n.length; r++) {
                var o = n[r];
                "number" == typeof o[0] && i[o[0]] || (t && !o[2] ? o[2] = t : t && (o[2] = "(" + o[2] + ") and (" + t + ")"), e.push(o))
            }
        }, e
    }
}, function(n, e, t) {
    "use strict";
    var i = function() {
            var n = this,
                e = n.$createElement,
                t = n._self._c || e;
            return t("li", {
                staticClass: "kiwi-nicklist-user",
                class: [n.nicklist.userMode(n.user) ? "kiwi-nicklist-user--mode-" + n.nicklist.userMode(n.user) : "", n.user.away ? "kiwi-nicklist-user--away" : "", n.user.ignore ? "kiwi-nicklist-user--ignore" : "", n.user.gender ? "kiwi-nicklist-user--gender-" + n.user.gender : ""],
                attrs: {
                    "data-nick": (n.user.nick || "").toLowerCase()
                },
                on: {
                    click: function(e) {
                        return n.nicklist.openUserbox(n.user)
                    }
                }
            }, [t("away-status-indicator", {
                attrs: {
                    network: n.network,
                    user: n.user,
                    toggle: !1
                }
            }), n._v(" "), t("span", {
                staticClass: "kiwi-nicklist-user-prefix"
            }, [n._v(n._s(n.nicklist.userModePrefix(n.user)))]), n._v(" "), t("span", {
                staticClass: "kiwi-nicklist-user-nick",
                style: {
                    color: n.userColour
                }
            }, [n._v(n._s(n.user.nick) + "\n    ")]), n._v(" "), t("span", {
                staticClass: "kiwi-nicklist-messageuser",
                on: {
                    click: function(e) {
                        return e.stopPropagation(), n.nicklist.openQuery(n.user)
                    }
                }
            }, [t("i", {
                staticClass: "fa fa-comment",
                attrs: {
                    "aria-hidden": "true"
                }
            })]), n._v(" "), t("typing-status-indicator", {
                attrs: {
                    user: n.user,
                    buffer: n.nicklist.buffer
                }
            })], 1)
        },
        r = [];
    i._withStripped = !0, t.d(e, "a", function() {
        return i
    }), t.d(e, "b", function() {
        return r
    })
}, function(n, e, t) {
    "use strict";
    var i = function() {
            var n = this,
                e = n.$createElement,
                t = n._self._c || e;
            return t("div", {
                staticClass: "kiwi-userbox"
            }, [n.isSelf ? t("span", {
                staticClass: "kiwi-userbox-selfprofile"
            }, [n._v("\n        " + n._s(n.$t("user_you")) + "\n    ")]) : n._e(), n._v(" "), t("div", {
                staticClass: "kiwi-userbox-header"
            }, [t("div", {
                staticClass: "kiwi-userbox-header-nick"
            }, [t("div", {
                staticClass: "kiwi-avatar-container kiwi-avatar-userbox"
            }, [t("avatar", {
                attrs: {
                    network: n.network,
					
                    user: n.user,
                    size: "small"
                }
            }), n._v(" "), t("away-status-indicator", {
                attrs: {
                    network: n.network,
                    user: n.user
                }
            })], 1), n._v(" "), t("h3", [t("span", {
                style: {
                    color: n.user.getColour()
                }
            }, [n._v(n._s(n.user.nick))]), n._v(" "), n.userMode ? t("span", {
                staticClass: "kiwi-userbox-modestring"
            }, [n._v("+" + n._s(n.userMode))]) : n._e()])]), n._v(" "), t("div", {
                staticClass: "kiwi-userbox-usermask"
            }, [n._v(n._s(n.user.username) + "@" + n._s(n.user.host))])]), n._v(" "), t("div", {
                staticClass: "kiwi-userbox-basicinfo"
            }, [n.user.asl && n.singleLine ? t("div", [t("span", {
                staticClass: "kiwi-userbox-basicinfo-title"
            }, [n._v(n._s(n.$t("plugin-asl:info")))]), n._v(" "), t("span", {
                staticClass: "kiwi-userbox-basicinfo-data"
            }, [n._v(n._s(n.aslString))])]) : n.user.asl ? t("div", [n.user.asl.a ? t("div", [t("span", {
                staticClass: "kiwi-userbox-basicinfo-title"
            }, [n._v(n._s(n.$t("plugin-asl:edad")))]), n._v(" "), t("span", {
                staticClass: "kiwi-userbox-basicinfo-data"
            }, [n._v(n._s(n.user.asl.a))])]) : n._e(), n._v(" "), n.user.asl.s ? t("div", [t("span", {
                staticClass: "kiwi-userbox-basicinfo-title"
            }, [n._v(n._s(n.$t("plugin-asl:sexo")))]), n._v(" "), t("span", {
                staticClass: "kiwi-userbox-basicinfo-data"
            }, [n._v("\n                    " + n._s("_" === n.user.asl.s[0] ? n.$t("plugin-asl:" + n.user.asl.s.substr(1)) : n.user.asl.s) + "\n                ")])]) : n._e(), n._v(" "), n.user.asl.l ? t("div", [t("span", {
                staticClass: "kiwi-userbox-basicinfo-title"
            }, [n._v("\n                    " + n._s(n.$t("plugin-asl:pais")) + "\n                ")]), n._v(" "), t("span", {
                staticClass: "kiwi-userbox-basicinfo-data"
            }, [n._v(n._s(n.user.asl.l))])]) : n._e()]) : n._e(), n._v(" "), n.user.aslRealname ? t("div", [t("span", {
                staticClass: "kiwi-userbox-basicinfo-title"
            }, [n._v(n._s(n.$t("whois_realname")) + ":")]), n._v(" "), t("span", {
                staticClass: "kiwi-userbox-basicinfo-data",
                domProps: {
                    innerHTML: n._s(n.formattedRealname)
                }
            })]) : n._e()]), n._v(" "), t("p", {
                staticClass: "kiwi-userbox-actions"
            }, [n.isSelf || n.buffer.isQuery() ? n._e() : t("a", {
                staticClass: "kiwi-userbox-action",
                on: {
                    click: n.openQuery
                }
            }, [t("i", {
                staticClass: "fa fa-comment-o",
                attrs: {
                    "aria-hidden": "true"
                }
            }), n._v("\n            " + n._s(n.$t("send_a_message")) + "\n        ")]), n._v(" "), n.whoisRequested ? n._e() : t("a", {
                staticClass: "kiwi-userbox-action",
                on: {
                    click: n.updateWhoisData
                }
            }, [t("i", {
                staticClass: "fa fa-question-circle",
                attrs: {
                    "aria-hidden": "true"
                }
            }), n._v("\n            " + n._s(n.$t("more_information")) + "\n        ")])]), n._v(" "), n.isSelf ? n._e() : t("form", {
                staticClass: "u-form kiwi-userbox-ignoreuser"
            }, [t("label", [t("input", {
                directives: [{
                    name: "model",
                    rawName: "v-model",
                    value: n.user.ignore,
                    expression: "user.ignore"
                }],
                attrs: {
                    type: "checkbox"
                },
                domProps: {
                    checked: Array.isArray(n.user.ignore) ? n._i(n.user.ignore, null) > -1 : n.user.ignore
                },
                on: {
                    change: function(e) {
                        var t = n.user.ignore,
                            s = e.target,
                            i = !!s.checked;
                        if (Array.isArray(t)) {
                            var a = n._i(t, null);
                            s.checked ? a < 0 && n.$set(n.user, "ignore", t.concat([null])) : a > -1 && n.$set(n.user, "ignore", t.slice(0, a).concat(t.slice(a + 1)))
                        } else n.$set(n.user, "ignore", i)
                    }
                }
            }), n._v(" "), t("span", [n._v(" " + n._s(n.$t("ignore_user")) + " ")])])]), n._v(" "), n.whoisRequested ? t("div", {
                staticClass: "kiwi-userbox-whois",
                class: [n.whoisLoading ? "kiwi-userbox-whois--loading" : ""]
            }, [n.whoisLoading ? [t("i", {
                staticClass: "fa fa-spinner",
                attrs: {
                    "aria-hidden": "true"
                }
            })] : [t("span", {
                staticClass: "kiwi-userbox-whois-line"
            }, [n._v("\n                " + n._s(n.user.away ? n.$t("whois_status") + ": " + n.user.away : n.$t("whois_status_available")) + "\n            ")]), n._v(" "), n.user.account ? t("span", {
                staticClass: "kiwi-userbox-whois-line"
            }, [n._v("\n                " + n._s(n.$t("user_account", {
                user: n.user.account
            })) + "\n            ")]) : n._e(), n._v(" "), t("span", {
                staticClass: "kiwi-userbox-whois-line"
            }, [n._v("\n                " + n._s(n.$t("user_realname", {
                realname: n.user.realname
            })) + "\n            ")]), n._v(" "), n.user.bot ? t("span", {
                staticClass: "kiwi-userbox-whois-line"
            }, [n._v(n._s(n.$t("user_bot")))]) : n._e(), n._v(" "), n.user.helpop ? t("span", {
                staticClass: "kiwi-userbox-whois-line"
            }, [n._v("\n                " + n._s(n.$t("user_help")) + "\n            ")]) : n._e(), n._v(" "), n.user.operator ? t("span", {
                staticClass: "kiwi-userbox-whois-line"
            }, [n._v("\n                " + n._s(n.$t("user_op")) + "\n            ")]) : n._e(), n._v(" "), n.user.server ? t("span", {
                staticClass: "kiwi-userbox-whois-line"
            }, [n._v("\n                " + n._s(n.$t("user_server", {
                server: n.user.server,
                info: n.user.server_info ? "(" + n.user.server_info + ")" : ""
            })) + "\n            ")]) : n._e(), n._v(" "), n.user.secure ? t("span", {
                staticClass: "kiwi-userbox-whois-line"
            }, [n._v("\n                " + n._s(n.$t("user_secure")) + "\n            ")]) : n._e(), n._v(" "), n.user.channels ? t("span", {
                staticClass: "kiwi-userbox-whois-line",
                domProps: {
                    innerHTML: n._s(n.$t("user_channels", {
                        channels: n.userChannels
                    }))
                },
                on: {
                    click: function(e) {
                        return n.onChannelsClick(e)
                    }
                }
            }) : n._e()]], 2) : n._e(), n._v(" "), n.buffer.isChannel() && n.areWeAnOp && !n.isSelf ? t("div", {
                staticClass: "kiwi-userbox-opactions"
            }, [t("form", {
                staticClass: "u-form",
                on: {
                    submit: function(n) {
                        n.preventDefault()
                    }
                }
            }, [n.isUserOnBuffer ? t("label", [n._v("\n                " + n._s(n.$t("user_access")) + " "), t("select", {
                directives: [{
                    name: "model",
                    rawName: "v-model",
                    value: n.userMode,
                    expression: "userMode"
                }],
                on: {
                    change: function(e) {
                        var t = Array.prototype.filter.call(e.target.options, (function(n) {
                            return n.selected
                        })).map((function(n) {
                            return "_value" in n ? n._value : n.value
                        }));
                        n.userMode = e.target.multiple ? t : t[0]
                    }
                }
            }, [n._l(n.availableChannelModes, (function(e) {
                return t("option", {
                    key: e.mode,
                    domProps: {
                        value: e.mode
                    }
                }, [n._v("\n                        " + n._s(e.description) + "\n                    ")])
            })), n._v(" "), t("option", {
                attrs: {
                    value: ""
                }
            }, [n._v(n._s(n.$t("user_normal")))])], 2)]) : n._e(), n._v(" "), n.isUserOnBuffer ? t("label", [t("button", {
                staticClass: "u-button u-button-secondary\n                           kiwi-userbox-opaction-kick kiwi-userbox-opaction",
                on: {
                    click: n.kickUser
                }
            }, [t("i", {
                staticClass: "fa fa-sign-out",
                attrs: {
                    "aria-hidden": "true"
                }
            }), n._v("\n                    " + n._s(n.$t("user_kick")) + "\n                ")])]) : n._e(), n._v(" "), t("label", [t("button", {
                staticClass: "u-button u-button-secondary\n                           kiwi-userbox-opaction-ban kiwi-userbox-opaction",
                on: {
                    click: n.banUser
                }
            }, [t("i", {
                staticClass: "fa fa-ban",
                attrs: {
                    "aria-hidden": "true"
                }
            }), n._v("\n                    " + n._s(n.$t("user_ban")) + "\n                ")])]), n._v(" "), n.isUserOnBuffer ? t("label", [t("button", {
                staticClass: "u-button u-button-secondary\n                           kiwi-userbox-opaction-kickban kiwi-userbox-opaction",
                on: {
                    click: n.kickbanUser
                }
            }, [t("i", {
                staticClass: "fa fa-exclamation-triangle",
                attrs: {
                    "aria-hidden": "true"
                }
            }), n._v("\n                    " + n._s(n.$t("user_kickban")) + "\n                ")])]) : n._e()])]) : n._e()])
        },
        r = [];
    i._withStripped = !0, t.d(e, "a", function() {
        return i
    }), t.d(e, "b", function() {
        return r
    })
}, function(n, e, t) {
    "use strict";
    var i = function() {
            var n = this,
                e = n.$createElement,
                t = n._self._c || e;
            return t("startup-layout", {
                ref: "layout",
                staticClass: "kiwi-welcome-simple",
                class: {
                    "kiwi-welcome-simple--recaptcha": n.recaptchaSiteId
                },
                scopedSlots: n._u([n.network && "disconnected" !== n.network.state ? {
                    key: "connection",
                    fn: function() {
                        return [t("i", {
                            staticClass: "fa fa-spin fa-spinner",
                            attrs: {
                                "aria-hidden": "true"
                            }
                        })]
                    },
                    proxy: !0
                } : {
                    key: "connection",
                    fn: function() {
                        return [t("form", {
                            staticClass: "u-form u-form--big kiwi-welcome-simple-form",
                            on: {
                                submit: function(e) {
                                    return e.preventDefault(), n.formSubmit(e)
                                }
                            }
                        }, [t("h2", {
                            domProps: {
                                innerHTML: n._s(n.greetingText)
                            }
                        }), n._v(" "), n.network && (n.network.last_error || n.network.state_error) ? t("div", {
                            staticClass: "kiwi-welcome-simple-error"
                        }, [n._v("\n                        No pudimos conectar con el servidor :(\n                        "), t("span", [n._v("\n                            " + n._s(n.network.last_error || n.readableStateError(n.network.state_error)) + "\n                        ")])]) : n._e(), n._v(" "), t("input-text", {
                            attrs: {
                                label: n.$t("nick"),
                                type: "text"
                            },
                            model: {
                                value: n.nick,
                                callback: function(e) {
                                    n.nick = e
                                },
                                expression: "nick"
                            }
                        }), n._v(" "), n.showPass && n.toggablePass ? t("div", {
                            staticClass: "kiwi-welcome-simple-input-container"
                        }, [t("label", {
                            staticClass: "kiwi-welcome-simple-have-password"
                        }, [t("input", {
                            directives: [{
                                name: "model",
                                rawName: "v-model",
                                value: n.show_password_box,
                                expression: "show_password_box"
                            }],
                            attrs: {
                                type: "checkbox"
                            },
                            domProps: {
                                checked: Array.isArray(n.show_password_box) ? n._i(n.show_password_box, null) > -1 : n.show_password_box
                            },
                            on: {
                                change: function(e) {
                                    var t = n.show_password_box,
                                        i = e.target,
                                        r = !!i.checked;
                                    if (Array.isArray(t)) {
                                        var s = n._i(t, null);
                                        i.checked ? s < 0 && (n.show_password_box = t.concat([null])) : s > -1 && (n.show_password_box = t.slice(0, s).concat(t.slice(s + 1)))
                                    } else n.show_password_box = r
                                }
                            }
                        }), n._v(" "), t("span", [n._v(" " + n._s(n.$t("password_have")) + " ")])])]) : n._e(), n._v(" "), !n.showPass || !n.show_password_box && n.toggablePass ? n._e() : t("div", {
                            staticClass: "kiwi-welcome-simple-input-container"
                        }, [t("input-text", {
                            directives: [{
                                name: "focus",
                                rawName: "v-focus"
                            }],
                            attrs: {
                                "show-plain-text": !0,
                                label: n.$t("password"),
                                type: "password"
                            },
                            model: {
                                value: n.password,
                                callback: function(e) {
                                    n.password = e
                                },
                                expression: "password"
                            }
                        })], 1), n._v(" "), t("div", {
                            staticClass: "kiwi-welcome-simple-asl-container"
                        }, [t("input-text", {
                            staticClass: "kiwi-welcome-simple-age",
                            attrs: {
                                label: "Edad",
                                type: "number"
                            },
                            model: {
                                value: n.age,
                                callback: function(e) {
                                    n.age = e
                                },
                                expression: "age"
                            }
                        }), n._v(" "), t("div", {
                            staticClass: "kiwi-welcome-simple-sex"
                        }, [t("label", {
                            staticClass: "kiwi-welcome-simple-sex"
                        }, [n._v("Sexo")]), n._v(" "), t("select", {
                            directives: [{
                                name: "model",
                                rawName: "v-model",
                                value: n.sex,
                                expression: "sex"
                            }],
                            staticClass: "kiwi-welcome-simple-sex-select",
                            attrs: {
                                label: "Sexo"
                            },
                            on: {
                                change: function(e) {
                                    var t = Array.prototype.filter.call(e.target.options, function(n) {
                                        return n.selected
                                    }).map(function(n) {
                                        return "_value" in n ? n._value : n.value
                                    });
                                    n.sex = e.target.multiple ? t : t[0]
                                }
                            }
                        }, [t("option", {
                            attrs: {
                                selected: "",
                                disabled: ""
                            },
                            domProps: {
                                value: null
                            }
                        }, [n._v("elegir ...")]), n._v(" "), t("option", {
                            attrs: {
                                value: "M"
                            }
                        }, [n._v("Hombre")]), n._v(" "), t("option", {
                            attrs: {
                                value: "F"
                            }
                        }, [n._v("Mujer")]), n._v(" "), t("option", {
                            attrs: {
                                value: "O"
                            }
                        }, [n._v("Otro")])])])], 1), n._v(" "), t("input-text", {
                            attrs: {
                                label: "Pais"
                            },
                            model: {
                                value: n.location,
                                callback: function(e) {
                                    n.location = e
                                },
                                expression: "Pais"
                            }
                        }), n._v(" "), n.showChannel ? t("div", {
                            staticClass: "kiwi-welcome-simple-input-container"
                        }, [t("input-text", {
                            attrs: {
                                label: n.$t("channel")
                            },
                            model: {
                                value: n.channel,
                                callback: function(e) {
                                    n.channel = e
                                },
                                expression: "Salas"
                            }
                        })], 1) : n._e(), n._v(" "), n.recaptchaSiteId ? t("div", {
                            staticClass: "g-recaptcha",
                            attrs: {
                                "data-sitekey": n.recaptchaSiteId
                            }
                        }) : n._e(), n._v(" "), t("button", {
                            staticClass: "u-button u-button-primary u-submit kiwi-welcome-simple-start",
                            attrs: {
                                disabled: !n.readyToStart,
                                type: "submit"
                            },
                            domProps: {
                                innerHTML: n._s(n.buttonText)
                            }
                        })], 1)]
                    },
                    proxy: !0
                }], null, !0)
            })
        },
        r = [];
    i._withStripped = !0, t.d(e, "a", function() {
        return i
    }), t.d(e, "b", function() {
        return r
    })
}, function(n, e, t) {
    "use strict";
    Object.defineProperty(e, "__esModule", {
        value: !0
    }), e.getASL = function(n) {
        var e = n.match(/\[(\d+|U)\/([MFOU])\/(.*)\]/);
        if (e && 4 === e.length) {
            var t = "U" === e[1] ? null : e[1],
                i = "U" === e[2] ? null : {
                    M: "Hombre",
                    F: "Mujer",
                    O: "Otro"
                }[e[2]],
                r = "U" === e[3] ? null : e[3];
            return {
                a: t,
                s: i,
                l: r
            }
        }
        return {}
    }
}, function(n, e, t) {
    var i = {},
        r = function(n) {
            var e;
            return function() {
                return void 0 === e && (e = n.apply(this, arguments)), e
            }
        }(function() {
            return window && document && document.all && !window.atob
        }),
        s = function(n) {
            var e = {};
            return function(n) {
                if ("function" == typeof n) return n();
                if (void 0 === e[n]) {
                    var t = function(n) {
                        return document.querySelector(n)
                    }.call(this, n);
                    if (window.HTMLIFrameElement && t instanceof window.HTMLIFrameElement) try {
                        t = t.contentDocument.head
                    } catch (n) {
                        t = null
                    }
                    e[n] = t
                }
                return e[n]
            }
        }(),
        o = null,
        a = 0,
        c = [],
        u = t(23);

    function l(n, e) {
        for (var t = 0; t < n.length; t++) {
            var r = n[t],
                s = i[r.id];
            if (s) {
                s.refs++;
                for (var o = 0; o < s.parts.length; o++) s.parts[o](r.parts[o]);
                for (; o < r.parts.length; o++) s.parts.push(m(r.parts[o], e))
            } else {
                var a = [];
                for (o = 0; o < r.parts.length; o++) a.push(m(r.parts[o], e));
                i[r.id] = {
                    id: r.id,
                    refs: 1,
                    parts: a
                }
            }
        }
    }

    function f(n, e) {
        for (var t = [], i = {}, r = 0; r < n.length; r++) {
            var s = n[r],
                o = e.base ? s[0] + e.base : s[0],
                a = {
                    css: s[1],
                    media: s[2],
                    sourceMap: s[3]
                };
            i[o] ? i[o].parts.push(a) : t.push(i[o] = {
                id: o,
                parts: [a]
            })
        }
        return t
    }

    function p(n, e) {
        var t = s(n.insertInto);
        if (!t) throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
        var i = c[c.length - 1];
        if ("top" === n.insertAt) i ? i.nextSibling ? t.insertBefore(e, i.nextSibling) : t.appendChild(e) : t.insertBefore(e, t.firstChild), c.push(e);
        else if ("bottom" === n.insertAt) t.appendChild(e);
        else {
            if ("object" != typeof n.insertAt || !n.insertAt.before) throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
            var r = s(n.insertInto + " " + n.insertAt.before);
            t.insertBefore(e, r)
        }
    }

    function d(n) {
        if (null === n.parentNode) return !1;
        n.parentNode.removeChild(n);
        var e = c.indexOf(n);
        e >= 0 && c.splice(e, 1)
    }

    function h(n) {
        var e = document.createElement("style");
        return void 0 === n.attrs.type && (n.attrs.type = "text/css"), w(e, n.attrs), p(n, e), e
    }

    function w(n, e) {
        Object.keys(e).forEach(function(t) {
            n.setAttribute(t, e[t])
        })
    }

    function m(n, e) {
        var t, i, r, s;
        if (e.transform && n.css) {
            if (!(s = e.transform(n.css))) return function() {};
            n.css = s
        }
        if (e.singleton) {
            var c = a++;
            t = o || (o = h(e)), i = k.bind(null, t, c, !1), r = k.bind(null, t, c, !0)
        } else n.sourceMap && "function" == typeof URL && "function" == typeof URL.createObjectURL && "function" == typeof URL.revokeObjectURL && "function" == typeof Blob && "function" == typeof btoa ? (t = function(n) {
            var e = document.createElement("link");
            return void 0 === n.attrs.type && (n.attrs.type = "text/css"), n.attrs.rel = "stylesheet", w(e, n.attrs), p(n, e), e
        }(e), i = function(n, e, t) {
            var i = t.css,
                r = t.sourceMap,
                s = void 0 === e.convertToAbsoluteUrls && r;
            (e.convertToAbsoluteUrls || s) && (i = u(i));
            r && (i += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(r)))) + " */");
            var o = new Blob([i], {
                    type: "text/css"
                }),
                a = n.href;
            n.href = URL.createObjectURL(o), a && URL.revokeObjectURL(a)
        }.bind(null, t, e), r = function() {
            d(t), t.href && URL.revokeObjectURL(t.href)
        }) : (t = h(e), i = function(n, e) {
            var t = e.css,
                i = e.media;
            i && n.setAttribute("media", i);
            if (n.styleSheet) n.styleSheet.cssText = t;
            else {
                for (; n.firstChild;) n.removeChild(n.firstChild);
                n.appendChild(document.createTextNode(t))
            }
        }.bind(null, t), r = function() {
            d(t)
        });
        return i(n),
            function(e) {
                if (e) {
                    if (e.css === n.css && e.media === n.media && e.sourceMap === n.sourceMap) return;
                    i(n = e)
                } else r()
            }
    }
    n.exports = function(n, e) {
        if ("undefined" != typeof DEBUG && DEBUG && "object" != typeof document) throw new Error("The style-loader cannot be used in a non-browser environment");
        (e = e || {}).attrs = "object" == typeof e.attrs ? e.attrs : {}, e.singleton || "boolean" == typeof e.singleton || (e.singleton = r()), e.insertInto || (e.insertInto = "head"), e.insertAt || (e.insertAt = "bottom");
        var t = f(n, e);
        return l(t, e),
            function(n) {
                for (var r = [], s = 0; s < t.length; s++) {
                    var o = t[s];
                    (a = i[o.id]).refs--, r.push(a)
                }
                n && l(f(n, e), e);
                for (s = 0; s < r.length; s++) {
                    var a;
                    if (0 === (a = r[s]).refs) {
                        for (var c = 0; c < a.parts.length; c++) a.parts[c]();
                        delete i[a.id]
                    }
                }
            }
    };
    var b = function() {
        var n = [];
        return function(e, t) {
            return n[e] = t, n.filter(Boolean).join("\n")
        }
    }();

    function k(n, e, t, i) {
        var r = t ? "" : i.css;
        if (n.styleSheet) n.styleSheet.cssText = b(e, r);
        else {
            var s = document.createTextNode(r),
                o = n.childNodes;
            o[e] && n.removeChild(o[e]), o.length ? n.insertBefore(s, o[e]) : n.appendChild(s)
        }
    }
}, function(n, e, t) {
    "use strict";

    function i(n, e) {
        for (var t = [], i = {}, r = 0; r < e.length; r++) {
            var s = e[r],
                o = s[0],
                a = {
                    id: n + ":" + r,
                    css: s[1],
                    media: s[2],
                    sourceMap: s[3]
                };
            i[o] ? i[o].parts.push(a) : t.push(i[o] = {
                id: o,
                parts: [a]
            })
        }
        return t
    }
    t.r(e), t.d(e, "default", function() {
        return h
    });
    var r = "undefined" != typeof document;
    if ("undefined" != typeof DEBUG && DEBUG && !r) throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");
    var s = {},
        o = r && (document.head || document.getElementsByTagName("head")[0]),
        a = null,
        c = 0,
        u = !1,
        l = function() {},
        f = null,
        p = "data-vue-ssr-id",
        d = "undefined" != typeof navigator && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase());

    function h(n, e, t, r) {
        u = t, f = r || {};
        var o = i(n, e);
        return w(o),
            function(e) {
                for (var t = [], r = 0; r < o.length; r++) {
                    var a = o[r];
                    (c = s[a.id]).refs--, t.push(c)
                }
                e ? w(o = i(n, e)) : o = [];
                for (r = 0; r < t.length; r++) {
                    var c;
                    if (0 === (c = t[r]).refs) {
                        for (var u = 0; u < c.parts.length; u++) c.parts[u]();
                        delete s[c.id]
                    }
                }
            }
    }

    function w(n) {
        for (var e = 0; e < n.length; e++) {
            var t = n[e],
                i = s[t.id];
            if (i) {
                i.refs++;
                for (var r = 0; r < i.parts.length; r++) i.parts[r](t.parts[r]);
                for (; r < t.parts.length; r++) i.parts.push(b(t.parts[r]));
                i.parts.length > t.parts.length && (i.parts.length = t.parts.length)
            } else {
                var o = [];
                for (r = 0; r < t.parts.length; r++) o.push(b(t.parts[r]));
                s[t.id] = {
                    id: t.id,
                    refs: 1,
                    parts: o
                }
            }
        }
    }

    function m() {
        var n = document.createElement("style");
        return n.type = "text/css", o.appendChild(n), n
    }

    function b(n) {
        var e, t, i = document.querySelector("style[" + p + '~="' + n.id + '"]');
        if (i) {
            if (u) return l;
            i.parentNode.removeChild(i)
        }
        if (d) {
            var r = c++;
            i = a || (a = m()), e = v.bind(null, i, r, !1), t = v.bind(null, i, r, !0)
        } else i = m(), e = function(n, e) {
            var t = e.css,
                i = e.media,
                r = e.sourceMap;
            i && n.setAttribute("media", i);
            f.ssrId && n.setAttribute(p, e.id);
            r && (t += "\n/*# sourceURL=" + r.sources[0] + " */", t += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(r)))) + " */");
            if (n.styleSheet) n.styleSheet.cssText = t;
            else {
                for (; n.firstChild;) n.removeChild(n.firstChild);
                n.appendChild(document.createTextNode(t))
            }
        }.bind(null, i), t = function() {
            i.parentNode.removeChild(i)
        };
        return e(n),
            function(i) {
                if (i) {
                    if (i.css === n.css && i.media === n.media && i.sourceMap === n.sourceMap) return;
                    e(n = i)
                } else t()
            }
    }
    var k = function() {
        var n = [];
        return function(e, t) {
            return n[e] = t, n.filter(Boolean).join("\n")
        }
    }();

    function v(n, e, t, i) {
        var r = t ? "" : i.css;
        if (n.styleSheet) n.styleSheet.cssText = k(e, r);
        else {
            var s = document.createTextNode(r),
                o = n.childNodes;
            o[e] && n.removeChild(o[e]), o.length ? n.insertBefore(s, o[e]) : n.appendChild(s)
        }
    }
}, function(n, e, t) {
    (n.exports = t(10)(!1)).push([n.i, '\n.kiwi-nicklist-user {\n    line-height: 26px;\n    padding: 0 12px 0 12px;\n    border-left: 4px solid;\n    margin: 0;\n    position: relative;\n    box-sizing: border-box;\n    transition: all 0.1s;\n    cursor: pointer;\n}\n.kiwi-nicklist-user--gender-Male .kiwi-nicklist-user-nick::after {\n    content:"\\F222";\n    font-size: 0.25em;\n    vertical-align: super;\n    font-family: fontawesome;\n}\n.kiwi-nicklist-user--gender-Female .kiwi-nicklist-user-nick::after {\n    content:"\\F221";\n    font-size: 0.25em;\n    vertical-align: super;\n    font-family: fontawesome;\n}\n.kiwi-nicklist-user--gender-Other .kiwi-nicklist-user-nick::after {\n    content:"\\F224";\n    font-size: 0.25em;\n    vertical-align: super;\n    font-family: fontawesome;\n}\n.kiwi-nicklist-user--away.kiwi-nicklist-user--gender-Male .kiwi-nicklist-user-nick::after {\n    content:"\\F222   Away";\n    font-size: 0.25em;\n    vertical-align: super;\n    font-family: fontawesome;\n}\n.kiwi-nicklist-user--away.kiwi-nicklist-user--gender-Female .kiwi-nicklist-user-nick::after {\n    content:"\\F221   Away";\n    font-size: 0.25em;\n    vertical-align: super;\n    font-family: fontawesome;\n}\n.kiwi-nicklist-user--away.kiwi-nicklist-user--gender-Other .kiwi-nicklist-user-nick::after {\n    content:"\\F224   Away";\n    font-size: 0.25em;\n    vertical-align: super;\n    font-family: fontawesome;\n}\n.kiwi-nicklist-user-nick {\n    font-weight: bold;\n    cursor: pointer;\n}\n.kiwi-nicklist-messageuser {\n    position: absolute;\n    content: \'\\F075\';\n    right: -1em;\n    font-family: fontAwesome, sans-serif;\n    line-height: 26px;\n    opacity: 0;\n}\n.kiwi-nicklist-messageuser:hover {\n    cursor: pointer;\n    transition: all 0.2s;\n}\n.kiwi-nicklist-user:hover .kiwi-nicklist-messageuser {\n    opacity: 1;\n    right: 1em;\n    transition: all 0.2s;\n    transition-delay: 0.1s;\n}\n\n', ""])
}, function(n, e, t) {
    "use strict";
    var i = t(1);
    t.n(i).a
}, function(n, e, t) {
    "use strict";
    t.r(e);
    var i = t(11),
        r = t(3);
    for (var s in r) "default" !== s && function(n) {
        t.d(e, n, function() {
            return r[n]
        })
    }(s);
    t(18);
    var o = t(0),
        a = Object(o.a)(r.default, i.a, i.b, !1, null, null, null);
    a.options.__file = "src/components/CustomNicklistUser.vue", e.default = a.exports
}, function(n, e, t) {
    (n.exports = t(10)(!1)).push([n.i, "\n.kiwi-sidebar.kiwi-sidebar-section-user {\n  right: 0;\n  width: 380px;\n}\n.kiwi-userbox {\n  box-sizing: border-box;\n  overflow-y: auto;\n  height: 100%;\n}\n.kiwi-userbox-selfprofile {\n  display: block;\n  margin: 0 auto;\n  width: 100%;\n  padding: 1em;\n  text-align: center;\n  border-bottom: 1px solid rgba(64, 121, 140, 0.2);\n  box-sizing: border-box;\n}\n.kiwi-userbox-header {\n  position: relative;\n  padding: 0.5em 1em;\n  overflow: hidden;\n}\n.kiwi-userbox-header h3 {\n  width: 100%;\n  padding: 0;\n  cursor: default;\n  display: inline-block;\n}\n.kiwi-userbox-modestring {\n  font-weight: normal;\n  font-size: 0.8em;\n}\n.fa-user.kiwi-userbox-icon {\n  display: inline-block;\n  font-size: 2em;\n}\n.kiwi-userbox-usermask {\n  width: 100%;\n  opacity: 0.6;\n  cursor: default;\n}\n.kiwi-userbox-basicinfo {\n  width: 100%;\n  margin: 0;\n  display: block;\n  padding: 0.5em 1em;\n  box-sizing: border-box;\n}\n.kiwi-userbox-basicinfo-title,\n.kiwi-userbox-basicinfo-data {\n  display: block;\n  width: 100%;\n  cursor: default;\n  margin: 0;\n}\n.kiwi-userbox-basicinfo-title {\n  font-size: 1em;\n  line-height: 1em;\n  padding: 0;\n  text-align: left;\n  font-weight: 900;\n}\n.kiwi-userbox-basicinfo-data {\n  margin-bottom: 1em;\n  font-weight: normal;\n  font-weight: 100;\n  opacity: 1;\n}\n.kiwi-userbox-actions {\n  width: 100%;\n  padding: 1em;\n  text-align: center;\n  margin: 0;\n  box-sizing: border-box;\n}\n.kiwi-userbox-actions .kiwi-userbox-action {\n  display: inline-block;\n  border: 1px solid;\n  padding: 0.5em 1em;\n  cursor: pointer;\n  margin: 0 2px;\n  transition: all 0.3s;\n  border-radius: 3px;\n}\n.kiwi-userbox-actions label {\n  display: block;\n  cursor: pointer;\n}\n.kiwi-userbox-actions label span {\n  text-align: left;\n  width: auto;\n}\n.kiwi-userbox-opactions {\n  width: 100%;\n  text-align: center;\n  box-sizing: border-box;\n  margin: 0 0 1em 0;\n  border-top: 1px solid;\n  padding: 1em;\n}\n.kiwi-userbox-opactions label {\n  width: 100%;\n  font-size: 1.2em;\n  font-weight: 600;\n  display: block;\n  margin-bottom: 0.7em;\n}\n.kiwi-userbox-opactions label select {\n  display: block;\n  clear: both;\n  padding: 10px;\n  border-radius: 0.25em;\n  box-shadow: none;\n  border: 1px solid;\n  width: 100%;\n  margin-top: 10px;\n  cursor: pointer;\n}\n.kiwi-userbox-opaction {\n  width: 100%;\n  padding: 0 1em;\n  text-align: left;\n  border: none;\n  line-height: 2.2em;\n  font-size: 0.8em;\n}\n.kiwi-userbox-opaction i {\n  margin-right: 0.2em;\n  font-size: 1.2em;\n}\n.kiwi-userbox-actions a {\n  margin-right: 1em;\n}\n.kiwi-userbox-whois {\n  line-height: 1.4em;\n  padding: 1em;\n  width: 90%;\n  margin: 0 5% 20px 5%;\n  background: none;\n  box-sizing: border-box;\n  border-radius: 2px;\n}\n.kiwi-userbox-whois-line {\n  display: block;\n}\n.kiwi-userbox-ignoreuser {\n  display: flex;\n  flex-direction: row;\n  justify-content: center;\n}\n.kiwi-userbox-ignoreuser span {\n  /* This fixes a vertical align issue between the checkbox and span */\n  float: right;\n}\n@media screen and (max-width: 769px) {\n.kiwi-container--sidebar-drawn .kiwi-sidebar-userbox {\n    width: 100%;\n}\n.kiwi-userbox {\n    left: 0;\n    right: 0;\n    bottom: 40px;\n    top: auto;\n    max-width: 100%;\n    border-width: 1px 0;\n}\n.kiwi-userbox .kiwi-userbox-header {\n    padding-left: 10px;\n}\n.kiwi-userbox .kiwi-userbox-header i {\n    display: none;\n}\n.kiwi-userbox .kiwi-userbox-basicinfo {\n    padding: 10px 10px;\n    margin-bottom: 20px;\n}\n.kiwi-userbox-actions {\n    padding: 0;\n    width: 100%;\n    box-sizing: border-box;\n}\n.kiwi-userbox-actions .kiwi-userbox-action {\n    width: 200px;\n    clear: both;\n    display: block;\n    margin: 0 auto 20px auto;\n}\n}\n", ""])
}, function(n, e, t) {
    "use strict";
    var i = t(4);
    t.n(i).a
}, function(n, e, t) {
    "use strict";
    t.r(e);
    var i = t(12),
        r = t(6);
    for (var s in r) "default" !== s && function(n) {
        t.d(e, n, function() {
            return r[n]
        })
    }(s);
    t(21);
    var o = t(0),
        a = Object(o.a)(r.default, i.a, i.b, !1, null, null, null);
    a.options.__file = "src/components/CustomUserBox.vue", e.default = a.exports
}, function(n, e) {
    n.exports = function(n) {
        var e = "undefined" != typeof window && window.location;
        if (!e) throw new Error("fixUrls requires window.location");
        if (!n || "string" != typeof n) return n;
        var t = e.protocol + "//" + e.host,
            i = t + e.pathname.replace(/\/[^\/]*$/, "/");
        return n.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function(n, e) {
            var r, s = e.trim().replace(/^"(.*)"$/, function(n, e) {
                return e
            }).replace(/^'(.*)'$/, function(n, e) {
                return e
            });
            return /^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(s) ? n : (r = 0 === s.indexOf("//") ? s : 0 === s.indexOf("/") ? t + s : i + s.replace(/^\.\//, ""), "url(" + JSON.stringify(r) + ")")
        })
    }
}, function(n, e, t) {
    (n.exports = t(10)(!1)).push([n.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n/* Containers */\n.kiwi-startup-common-section-connection {\n-webkit-box-align: center;\nalign-items: center;\n-webkit-box-pack: center;\njustify-content: center;\n}\n.kiwi-startup-common-section-connection {\n\toverflow-y:auto;\n}\n.kiwi-startup-common-section-info {\n-webkit-box-align: center;\nalign-items: center;\n-webkit-box-pack: center;\njustify-content: center;\npadding:0px !important;\n}\n.kiwi-startup-common-section-info-content {\n\tmargin:0px !important;\n\tpadding:0px !important;\n}\nform.kiwi-welcome-simple-form {\n    width: 70%;\n    padding: 0 20px;\n}\n@media (max-width: 1025px) {\nform.kiwi-welcome-simple-form {\n        width: 100%;\n}\n}\nform.kiwi-welcome-simple-form h2 {\n    margin: 0 0 20px 0;\n    padding: 0;\n    cursor: default;\n    font-weight: 600;\n    font-size: 1.7em;\n    text-align: center;\n}\nform.kiwi-welcome-simple-form label {\n    margin-bottom:5px !important;\n}\n.kiwi-welcome-simple-error {\n    text-align: center;\n    margin: 1em 0;\n    padding: 0.3em;\n}\n.kiwi-welcome-simple-error span {\n    display: block;\n    font-style: italic;\n}\n.kiwi-welcome-simple-age input[type=number] {\n    -moz-appearance: textfield;\n}\n.kiwi-welcome-simple-age input[type=number]::-webkit-inner-spin-button,\n.kiwi-welcome-simple-age input[type=number]::-webkit-outer-spin-button {\n    -webkit-appearance: none;\n    margin: 0;\n}\n.kiwi-welcome-simple-asl-container {\n    width: 100%;\n    height: auto;\n    position: relative;\n    margin: 0 0 0px 0;\n    display:flex;\n}\n.kiwi-welcome-simple-age {\n}\n.kiwi-welcome-simple-sex {\n    flex:1;\n    margin-left:5px;\n}\n.kiwi-welcome-simple-sex-select {\n   -webkit-appearance: button;\n   -webkit-border-radius: 2px;\n   -webkit-box-shadow: 0px;\n   -webkit-padding-end: 20px;\n   -webkit-padding-start: 2px;\n   -webkit-user-select: none;\n   background-image: url(\"data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' version='1.1' height='32px' width='24px'><text x='0' y='24' fill='grey' style='font: 24px Verdana;'>Â»</text></svg>\"), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);\n   background-position:95% center;\n   background-repeat: no-repeat;\n   border: 1px solid  !important;\n   border-color: #e2e2e2 !important;\n   border-radius: 5px;\n   color: #555;\n   font-size: inherit;\n   overflow: hidden;\n   padding: 15px 15px;\n   text-overflow: ellipsis;\n   white-space: nowrap;\n   box-sizing: border-box;\n   width:100%;\n}\n.kiwi-welcome-simple-sex-select:focus {\n    outline: 0;\n    border-color:#42b992 !important;\n}\n.kiwi-welcome-simple-form .kiwi-welcome-simple-input-container {\n    width: 100%;\n    height: auto;\n    position: relative;\n    margin: 0 0 10x 0;\n}\n.kiwi-welcome-simple-input-container .u-input-text {\n    margin-top: 0px !important;\n}\n.kiwi-welcome-simple-input-container:last-of-type {\n    margin-top:0px !important;\n    margin-bottom:0px !important;\n}\n\n/* Make the preloader icon larger */\n.kiwi-welcome-simple .fa-spinner {\n    font-size:6em;\n}\n@media (max-height: 720px) {\n.kiwi-startup-common-section-connection {\n    -webkit-box-align: start;\n    align-items: start;\n    -webkit-box-pack: center;\n    justify-content: center;\n}\n}\n\n", ""])
}, function(n, e, t) {
    "use strict";
    var i = t(7);
    t.n(i).a
}, function(n, e, t) {
    "use strict";
    t.r(e);
    var i = t(13),
        r = t(9);
    for (var s in r) "default" !== s && function(n) {
        t.d(e, n, function() {
            return r[n]
        })
    }(s);
    t(25);
    var o = t(0),
        a = Object(o.a)(r.default, i.a, i.b, !1, null, null, null);
    a.options.__file = "src/components/CustomWelcome.vue", e.default = a.exports
}, function(n, e, t) {
    "use strict";
    var i = a(t(26)),
        r = a(t(22)),
        s = a(t(19)),
        o = function(n) {
            if (n && n.__esModule) return n;
            var e = {};
            if (null != n)
                for (var t in n) Object.prototype.hasOwnProperty.call(n, t) && (e[t] = n[t]);
            return e.default = n, e
        }(t(14));

    function a(n) {
        return n && n.__esModule ? n : {
            default: n
        }
    }
    kiwi.plugin("custom-welcome", function(n) {
        n.addStartup("custom-welcome", i.default), n.replaceModule("components/UserBox", r.default), n.replaceModule("components/NicklistUser", s.default);
        var e = !0,
            t = !0;

        function a(n) {
            switch (o.getASL(n).s) {
                case "Male":
                    return "#00F";
                case "Female":
                    return "#F0F";
                case "Other":
                    return "#0F0";
                default:
                    return "#000"
            }
        }

        function c(n) {
            return o.getASL(n).s
        }!1 === n.state.setting("asl.icons") && (e = n.state.setting("asl.icons")), !1 === n.state.setting("asl.colours") && (t = n.state.setting("asl.colours")), n.on("irc.join", function(i, r) {
            i.gecos && n.state.addUser(r, {
                nick: i.nick,
                username: i.ident,
                host: i.hostname,
                realname: i.gecos,
                colour: 1 == t ? a(i.gecos) : "",
                gender: 1 == e ? c(i.gecos) : null
            })
        }), n.on("irc.wholist", function(i, r) {
            i.users.forEach(function(i) {
                n.state.addUser(r, {
                    nick: i.nick,
                    colour: 1 == t ? a(i.real_name) : "",
                    gender: 1 == e ? c(i.real_name) : null
                })
            })
        })
    })
}]);
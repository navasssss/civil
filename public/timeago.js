!(function (t) {
    "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == typeof module && "object" == typeof module.exports ? t(require("jquery")) : t(jQuery);
})(function (t) {
    t.timeago = function (e) {
        return e instanceof Date ? n(e) : n("string" == typeof e ? t.timeago.parse(e) : "number" == typeof e ? new Date(e) : t.timeago.datetime(e));
    };
    var e = t.timeago;
    t.extend(t.timeago, {
        settings: {
            refreshMillis: 6e4,
            allowPast: !0,
            allowFuture: !1,
            localeTitle: !1,
            cutoff: 0,
            autoDispose: !0,
            strings: {
                prefixAgo: null,
                prefixFromNow: null,
                suffixAgo: "ago",
                suffixFromNow: "from now",
                inPast: "any moment now",
                seconds: "less than a minute",
                minute: "about a minute",
                minutes: "%d minutes",
                hour: "about an hour",
                hours: "about %d hours",
                day: "a day",
                days: "%d days",
                month: "about a month",
                months: "%d months",
                year: "about a year",
                years: "%d years",
                wordSeparator: " ",
                numbers: [],
            },
        },
        inWords: function (e) {
            if (!this.settings.allowPast && !this.settings.allowFuture) throw "timeago allowPast and allowFuture settings can not both be set to false.";
            var i = this.settings.strings,
                a = i.prefixAgo,
                n = i.suffixAgo;
            if ((this.settings.allowFuture && e < 0 && ((a = i.prefixFromNow), (n = i.suffixFromNow)), !this.settings.allowPast && e >= 0)) return this.settings.strings.inPast;
            var r = Math.abs(e) / 1e3,
                o = r / 60,
                s = o / 60,
                u = s / 24,
                m = u / 365;
            function l(a, n) {
                var r = t.isFunction(a) ? a(n, e) : a,
                    o = (i.numbers && i.numbers[n]) || n;
                return r.replace(/%d/i, o);
            }
            var d =
                    (r < 45 && l(i.seconds, Math.round(r))) ||
                    (r < 90 && l(i.minute, 1)) ||
                    (o < 45 && l(i.minutes, Math.round(o))) ||
                    (o < 90 && l(i.hour, 1)) ||
                    (s < 24 && l(i.hours, Math.round(s))) ||
                    (s < 42 && l(i.day, 1)) ||
                    (u < 30 && l(i.days, Math.round(u))) ||
                    (u < 45 && l(i.month, 1)) ||
                    (u < 365 && l(i.months, Math.round(u / 30))) ||
                    (m < 1.5 && l(i.year, 1)) ||
                    l(i.years, Math.round(m)),
                h = i.wordSeparator || "";
            return void 0 === i.wordSeparator && (h = " "), t.trim([a, d, n].join(h));
        },
        parse: function (e) {
            var i = t.trim(e);
            return (i = (i = (i = (i = (i = i.replace(/\.\d+/, "")).replace(/-/, "/").replace(/-/, "/")).replace(/T/, " ").replace(/Z/, " UTC")).replace(/([\+\-]\d\d)\:?(\d\d)/, " $1$2")).replace(/([\+\-]\d\d)$/, " $100")), new Date(i);
        },
        datetime: function (i) {
            var a = e.isTime(i) ? t(i).attr("datetime") : t(i).attr("title");
            return e.parse(a);
        },
        isTime: function (e) {
            return "time" === t(e).get(0).tagName.toLowerCase();
        },
    });
    var i = {
        init: function () {
            i.dispose.call(this);
            var n = t.proxy(a, this);
            n();
            var r = e.settings;
            r.refreshMillis > 0 && (this._timeagoInterval = setInterval(n, r.refreshMillis));
        },
        update: function (i) {
            var n = i instanceof Date ? i : e.parse(i);
            t(this).data("timeago", { datetime: n }), e.settings.localeTitle && t(this).attr("title", n.toLocaleString()), a.apply(this);
        },
        updateFromDOM: function () {
            t(this).data("timeago", { datetime: e.parse(e.isTime(this) ? t(this).attr("datetime") : t(this).attr("title")) }), a.apply(this);
        },
        dispose: function () {
            this._timeagoInterval && (window.clearInterval(this._timeagoInterval), (this._timeagoInterval = null));
        },
    };
    function a() {
        var i = e.settings;
        if (i.autoDispose && !t.contains(document.documentElement, this)) return t(this).timeago("dispose"), this;
        var a = (function (i) {
            if (!(i = t(i)).data("timeago")) {
                i.data("timeago", { datetime: e.datetime(i) });
                var a = t.trim(i.text());
                e.settings.localeTitle ? i.attr("title", i.data("timeago").datetime.toLocaleString()) : !(a.length > 0) || (e.isTime(i) && i.attr("title")) || i.attr("title", a);
            }
            return i.data("timeago");
        })(this);
        return isNaN(a.datetime) || (0 === i.cutoff || Math.abs(r(a.datetime)) < i.cutoff ? t(this).text(n(a.datetime)) : t(this).attr("title").length > 0 && t(this).text(t(this).attr("title"))), this;
    }
    function n(t) {
        return e.inWords(r(t));
    }
    function r(t) {
        return new Date().getTime() - t.getTime();
    }
    (t.fn.timeago = function (t, e) {
        var a = t ? i[t] : i.init;
        if (!a) throw new Error("Unknown function name '" + t + "' for timeago");
        return (
            this.each(function () {
                a.call(this, e);
            }),
            this
        );
    }),
        document.createElement("abbr"),
        document.createElement("time");
});

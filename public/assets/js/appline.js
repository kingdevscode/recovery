(() => {
    var ke = !1,
        De = !1,
        Y = [];

    function gt(e) { Cr(e) }

    function Cr(e) { Y.includes(e) || Y.push(e), Nr() }

    function Nr() {!De && !ke && (ke = !0, queueMicrotask(Mr)) }

    function Mr() {
        ke = !1, De = !0;
        for (let e = 0; e < Y.length; e++) Y[e]();
        Y.length = 0, De = !1
    }
    var b, R, z, Pe, Ie = !0;

    function _t(e) { Ie = !1, e(), Ie = !0 }

    function xt(e) { b = e.reactive, z = e.release, R = t => e.effect(t, { scheduler: r => { Ie ? gt(r) : r() } }), Pe = e.raw }

    function Le(e) { R = e }

    function yt(e) {
        let t = () => {};
        return [n => {
            let i = R(n);
            e._x_effects || (e._x_effects = new Set, e._x_runEffects = () => { e._x_effects.forEach(o => o()) }), e._x_effects.add(i), t = () => { i !== void 0 && (e._x_effects.delete(i), z(i)) }
        }, () => { t() }]
    }
    var bt = [],
        vt = [],
        wt = [];

    function Et(e) { wt.push(e) }

    function St(e) { vt.push(e) }

    function At(e) { bt.push(e) }

    function Ot(e, t, r) { e._x_attributeCleanups || (e._x_attributeCleanups = {}), e._x_attributeCleanups[t] || (e._x_attributeCleanups[t] = []), e._x_attributeCleanups[t].push(r) }

    function Fe(e, t) {
        !e._x_attributeCleanups || Object.entries(e._x_attributeCleanups).forEach(([r, n]) => {
            (t === void 0 || t.includes(r)) && n.forEach(i => i()), delete e._x_attributeCleanups[r]
        })
    }
    var $e = new MutationObserver(Tt),
        je = !1;

    function Ke() { $e.observe(document, { subtree: !0, childList: !0, attributes: !0, attributeOldValue: !0 }), je = !0 }

    function kr() { $e.disconnect(), je = !1 }
    var J = [],
        ze = !1;

    function Pr() { J = J.concat($e.takeRecords()), J.length && !ze && (ze = !0, queueMicrotask(() => { Dr(), ze = !1 })) }

    function Dr() { Tt(J), J.length = 0 }

    function m(e) {
        if (!je) return e();
        Pr(), kr();
        let t = e();
        return Ke(), t
    }

    function Tt(e) {
        let t = [],
            r = [],
            n = new Map,
            i = new Map;
        for (let o = 0; o < e.length; o++)
            if (!e[o].target._x_ignoreMutationObserver && (e[o].type === "childList" && (e[o].addedNodes.forEach(s => s.nodeType === 1 && t.push(s)), e[o].removedNodes.forEach(s => s.nodeType === 1 && r.push(s))), e[o].type === "attributes")) {
                let s = e[o].target,
                    a = e[o].attributeName,
                    c = e[o].oldValue,
                    l = () => { n.has(s) || n.set(s, []), n.get(s).push({ name: a, value: s.getAttribute(a) }) },
                    u = () => { i.has(s) || i.set(s, []), i.get(s).push(a) };
                s.hasAttribute(a) && c === null ? l() : s.hasAttribute(a) ? (u(), l()) : u()
            }
        i.forEach((o, s) => { Fe(s, o) }), n.forEach((o, s) => { bt.forEach(a => a(s, o)) });
        for (let o of t) r.includes(o) || wt.forEach(s => s(o));
        for (let o of r) t.includes(o) || vt.forEach(s => s(o));
        t = null, r = null, n = null, i = null
    }

    function V(e, t, r) { return e._x_dataStack = [t, ...Q(r || e)], () => { e._x_dataStack = e._x_dataStack.filter(n => n !== t) } }

    function Ve(e, t) {
        let r = e._x_dataStack[0];
        Object.entries(t).forEach(([n, i]) => { r[n] = i })
    }

    function Q(e) { return e._x_dataStack ? e._x_dataStack : e instanceof ShadowRoot ? Q(e.host) : e.parentNode ? Q(e.parentNode) : [] }

    function He(e) { return new Proxy({}, { ownKeys: () => Array.from(new Set(e.flatMap(t => Object.keys(t)))), has: (t, r) => e.some(n => n.hasOwnProperty(r)), get: (t, r) => (e.find(n => n.hasOwnProperty(r)) || {})[r], set: (t, r, n) => { let i = e.find(o => o.hasOwnProperty(r)); return i ? i[r] = n : e[e.length - 1][r] = n, !0 } }) }

    function Rt(e) {
        let t = n => typeof n == "object" && !Array.isArray(n) && n !== null,
            r = (n, i = "") => {
                Object.entries(n).forEach(([o, s]) => {
                    let a = i === "" ? o : `${i}.${o}`;
                    typeof s == "object" && s !== null && s._x_interceptor ? n[o] = s.initialize(e, a, o) : t(s) && s !== n && !(s instanceof Element) && r(s, a)
                })
            };
        return r(e)
    }

    function fe(e, t = () => {}) {
        let r = { initialValue: void 0, _x_interceptor: !0, initialize(n, i, o) { return e(this.initialValue, () => Ir(n, i), s => Be(n, i, s), i, o) } };
        return t(r), n => {
            if (typeof n == "object" && n !== null && n._x_interceptor) {
                let i = r.initialize.bind(r);
                r.initialize = (o, s, a) => { let c = n.initialize(o, s, a); return r.initialValue = c, i(o, s, a) }
            } else r.initialValue = n;
            return r
        }
    }

    function Ir(e, t) { return t.split(".").reduce((r, n) => r[n], e) }

    function Be(e, t, r) {
        if (typeof t == "string" && (t = t.split(".")), t.length === 1) e[t[0]] = r;
        else { if (t.length === 0) throw error; return e[t[0]] || (e[t[0]] = {}), Be(e[t[0]], t.slice(1), r) }
    }
    var Ct = {};

    function y(e, t) { Ct[e] = t }

    function Z(e, t) { return Object.entries(Ct).forEach(([r, n]) => { Object.defineProperty(e, `$${r}`, {get() { return n(t, { Alpine: E, interceptor: fe }) }, enumerable: !1 }) }), e }

    function C(e, t, r = {}) { let n; return h(e, t)(i => n = i, r), n }

    function h(...e) { return Nt(...e) }
    var Nt = qe;

    function Mt(e) { Nt = e }

    function qe(e, t) {
        let r = {};
        Z(r, e);
        let n = [r, ...Q(e)];
        if (typeof t == "function") return Lr(n, t);
        let i = Fr(n, t);
        return $r.bind(null, e, t, i)
    }

    function Lr(e, t) {
        return (r = () => {}, { scope: n = {}, params: i = [] } = {}) => {
            let o = t.apply(He([n, ...e]), i);
            de(r, o)
        }
    }
    var Ue = {};

    function jr(e) {
        if (Ue[e]) return Ue[e];
        let t = Object.getPrototypeOf(async function() {}).constructor,
            r = /^[\n\s]*if.*\(.*\)/.test(e) || /^(let|const)/.test(e) ? `(() => { ${e} })()` : e,
            n = new t(["__self", "scope"], `with (scope) { __self.result = ${r} }; __self.finished = true; return __self.result;`);
        return Ue[e] = n, n
    }

    function Fr(e, t) {
        let r = jr(t);
        return (n = () => {}, { scope: i = {}, params: o = [] } = {}) => {
            r.result = void 0, r.finished = !1;
            let s = He([i, ...e]),
                a = r(r, s);
            r.finished ? de(n, r.result, s, o) : a.then(c => { de(n, c, s, o) })
        }
    }

    function de(e, t, r, n) {
        if (typeof t == "function") {
            let i = t.apply(r, n);
            i instanceof Promise ? i.then(o => de(e, o, r, n)) : e(i)
        } else e(t)
    }

    function $r(e, t, r, ...n) { try { return r(...n) } catch (i) { throw console.warn(`Alpine Expression Error: ${i.message}

Expression: "${t}"

`, e), i } }
    var We = "x-";

    function S(e = "") { return We + e }

    function kt(e) { We = e }
    var Dt = {};

    function p(e, t) { Dt[e] = t }

    function X(e, t, r) { let n = {}; return Array.from(t).map(zr((o, s) => n[o] = s)).filter(Vr).map(Hr(n, r)).sort(Br).map(o => Kr(e, o)) }
    var Ge = !1,
        Ye = [];

    function Pt(e) {
        Ge = !0;
        let t = () => { for (; Ye.length;) Ye.shift()() },
            r = () => { Ge = !1, t() };
        e(t), r()
    }

    function Kr(e, t) {
        let r = () => {},
            n = Dt[t.type] || r,
            i = [],
            o = d => i.push(d),
            [s, a] = yt(e);
        i.push(a);
        let c = { Alpine: E, effect: s, cleanup: o, evaluateLater: h.bind(h, e), evaluate: C.bind(C, e) },
            l = () => i.forEach(d => d());
        Ot(e, t.original, l);
        let u = () => { e._x_ignore || e._x_ignoreSelf || (n.inline && n.inline(e, t, c), n = n.bind(n, e, t, c), Ge ? Ye.push(n) : n()) };
        return u.runCleanups = l, u
    }
    var pe = (e, t) => ({ name: r, value: n }) => (r.startsWith(e) && (r = r.replace(e, t)), { name: r, value: n }),
        me = e => e;

    function zr(e) { return ({ name: t, value: r }) => { let { name: n, value: i } = It.reduce((o, s) => s(o), { name: t, value: r }); return n !== t && e(n, t), { name: n, value: i } } }
    var It = [];

    function H(e) { It.push(e) }

    function Vr({ name: e }) { return Lt().test(e) }
    var Lt = () => new RegExp(`^${We}([^:^.]+)\\b`);

    function Hr(e, t) {
        return ({ name: r, value: n }) => {
            let i = r.match(Lt()),
                o = r.match(/:([a-zA-Z0-9\-:]+)/),
                s = r.match(/\.[^.\]]+(?=[^\]]*$)/g) || [],
                a = t || e[r] || r;
            return { type: i ? i[1] : null, value: o ? o[1] : null, modifiers: s.map(c => c.replace(".", "")), expression: n, original: a }
        }
    }
    var Je = "DEFAULT",
        he = ["ignore", "ref", "data", "bind", "init", "for", "model", "transition", "show", "if", Je, "element"];

    function Br(e, t) {
        let r = he.indexOf(e.type) === -1 ? Je : e.type,
            n = he.indexOf(t.type) === -1 ? Je : t.type;
        return he.indexOf(r) - he.indexOf(n)
    }

    function F(e, t, r = {}) { e.dispatchEvent(new CustomEvent(t, { detail: r, bubbles: !0, composed: !0, cancelable: !0 })) }
    var Qe = [],
        Ze = !1;

    function B(e) { Qe.push(e), queueMicrotask(() => { Ze || setTimeout(() => { ge() }) }) }

    function ge() { for (Ze = !1; Qe.length;) Qe.shift()() }

    function Ft() { Ze = !0 }

    function k(e, t) { if (e instanceof ShadowRoot) { Array.from(e.children).forEach(i => k(i, t)); return } let r = !1; if (t(e, () => r = !0), r) return; let n = e.firstElementChild; for (; n;) k(n, t, !1), n = n.nextElementSibling }

    function _e(e, ...t) { console.warn(`Alpine Warning: ${e}`, ...t) }

    function $t() {
        document.body || _e("Unable to initialize. Trying to load Alpine before `<body>` is available. Did you forget to add `defer` in Alpine's `<script>` tag?"), F(document, "alpine:init"), F(document, "alpine:initializing"), Ke(), Et(t => A(t, k)), St(t => B(() => Ur(t))), At((t, r) => { X(t, r).forEach(n => n()) });
        let e = t => !N(t.parentNode || N(t));
        Array.from(document.querySelectorAll(qr())).filter(e).forEach(t => { A(t) }), F(document, "alpine:initialized")
    }
    var Xe = [],
        jt = [];

    function Kt() { return Xe.map(e => e()) }

    function qr() { return Xe.concat(jt).map(e => e()) }

    function xe(e) { Xe.push(e) }

    function zt(e) { jt.push(e) }

    function N(e) { if (Kt().some(t => e.matches(t))) return e; if (!!e.parentElement) return N(e.parentElement) }

    function Vt(e) { return Kt().some(t => e.matches(t)) }

    function A(e, t = k) { Pt(() => { t(e, (r, n) => { X(r, r.attributes).forEach(i => i()), r._x_ignore && n() }) }) }

    function Ur(e) { k(e, t => Fe(t)) }

    function Ht(e) { e(E) }
    var q = {},
        Bt = !1;

    function qt(e, t) {
        if (Bt || (q = b(q), Bt = !0), t === void 0) return q[e];
        q[e] = t, typeof t == "object" && t !== null && t.hasOwnProperty("init") && typeof t.init == "function" && q[e].init()
    }

    function Ut() { return q }
    var et = !1;

    function U(e) { return (...t) => et || e(...t) }

    function Wt(e, t) { t._x_dataStack = e._x_dataStack, et = !0, Gr(() => { Wr(t) }), et = !1 }

    function Wr(e) {
        let t = !1;
        A(e, (n, i) => {
            k(n, (o, s) => {
                if (t && Vt(o)) return s();
                t = !0, i(o, s)
            })
        })
    }

    function Gr(e) {
        let t = R;
        Le((r, n) => { let i = t(r); return z(i), () => {} }), e(), Le(t)
    }
    var Gt = {};

    function Yt(e, t) { Gt[e] = t }

    function Jt(e, t) { return Object.entries(Gt).forEach(([r, n]) => { Object.defineProperty(e, r, {get() { return (...i) => n.bind(t)(...i) }, enumerable: !1 }) }), e }
    var Yr = {get reactive() { return b }, get release() { return z }, get effect() { return R }, get raw() { return Pe }, version: "3.2.0", disableEffectScheduling: _t, setReactivityEngine: xt, addRootSelector: xe, mapAttributes: H, evaluateLater: h, setEvaluator: Mt, closestRoot: N, interceptor: fe, mutateDom: m, directive: p, evaluate: C, initTree: A, nextTick: B, prefix: kt, plugin: Ht, magic: y, store: qt, start: $t, clone: Wt, data: Yt },
        E = Yr;

    function tt(e, t) {
        let r = Object.create(null),
            n = e.split(",");
        for (let i = 0; i < n.length; i++) r[n[i]] = !0;
        return t ? i => !!r[i.toLowerCase()] : i => !!r[i]
    }
    var Zi = {
            [1]: "TEXT",
            [2]: "CLASS",
            [4]: "STYLE",
            [8]: "PROPS",
            [16]: "FULL_PROPS",
            [32]: "HYDRATE_EVENTS",
            [64]: "STABLE_FRAGMENT",
            [128]: "KEYED_FRAGMENT",
            [256]: "UNKEYED_FRAGMENT",
            [512]: "NEED_PATCH",
            [1024]: "DYNAMIC_SLOTS",
            [2048]: "DEV_ROOT_FRAGMENT",
            [-1]: "HOISTED",
            [-2]: "BAIL"
        },
        Xi = {
            [1]: "STABLE",
            [2]: "DYNAMIC",
            [3]: "FORWARDED"
        };
    var Jr = "itemscope,allowfullscreen,formnovalidate,ismap,nomodule,novalidate,readonly";
    var eo = tt(Jr + ",async,autofocus,autoplay,controls,default,defer,disabled,hidden,loop,open,required,reversed,scoped,seamless,checked,muted,multiple,selected");
    var Qt = Object.freeze({}),
        to = Object.freeze([]);
    var rt = Object.assign;
    var Qr = Object.prototype.hasOwnProperty,
        ee = (e, t) => Qr.call(e, t),
        D = Array.isArray,
        W = e => Zt(e) === "[object Map]";
    var Zr = e => typeof e == "string",
        ye = e => typeof e == "symbol",
        te = e => e !== null && typeof e == "object";
    var Xr = Object.prototype.toString,
        Zt = e => Xr.call(e),
        nt = e => Zt(e).slice(8, -1);
    var be = e => Zr(e) && e !== "NaN" && e[0] !== "-" && "" + parseInt(e, 10) === e;
    var ve = e => { let t = Object.create(null); return r => t[r] || (t[r] = e(r)) },
        en = /-(\w)/g,
        ro = ve(e => e.replace(en, (t, r) => r ? r.toUpperCase() : "")),
        tn = /\B([A-Z])/g,
        no = ve(e => e.replace(tn, "-$1").toLowerCase()),
        it = ve(e => e.charAt(0).toUpperCase() + e.slice(1)),
        io = ve(e => e ? `on${it(e)}` : ""),
        ot = (e, t) => e !== t && (e === e || t === t);
    var st = new WeakMap,
        re = [],
        O, $ = Symbol("iterate"),
        at = Symbol("Map key iterate");

    function rn(e) { return e && e._isEffect === !0 }

    function Xt(e, t = Qt) { rn(e) && (e = e.raw); let r = nn(e, t); return t.lazy || r(), r }

    function tr(e) { e.active && (er(e), e.options.onStop && e.options.onStop(), e.active = !1) }
    var on = 0;

    function nn(e, t) { let r = function() { if (!r.active) return e(); if (!re.includes(r)) { er(r); try { return sn(), re.push(r), O = r, e() } finally { re.pop(), rr(), O = re[re.length - 1] } } }; return r.id = on++, r.allowRecurse = !!t.allowRecurse, r._isEffect = !0, r.active = !0, r.raw = e, r.deps = [], r.options = t, r }

    function er(e) {
        let { deps: t } = e;
        if (t.length) {
            for (let r = 0; r < t.length; r++) t[r].delete(e);
            t.length = 0
        }
    }
    var G = !0,
        ct = [];

    function an() { ct.push(G), G = !1 }

    function sn() { ct.push(G), G = !0 }

    function rr() {
        let e = ct.pop();
        G = e === void 0 ? !0 : e
    }

    function v(e, t, r) {
        if (!G || O === void 0) return;
        let n = st.get(e);
        n || st.set(e, n = new Map);
        let i = n.get(r);
        i || n.set(r, i = new Set), i.has(O) || (i.add(O), O.deps.push(i), O.options.onTrack && O.options.onTrack({ effect: O, target: e, type: t, key: r }))
    }

    function P(e, t, r, n, i, o) {
        let s = st.get(e);
        if (!s) return;
        let a = new Set,
            c = u => {
                u && u.forEach(d => {
                    (d !== O || d.allowRecurse) && a.add(d)
                })
            };
        if (t === "clear") s.forEach(c);
        else if (r === "length" && D(e)) s.forEach((u, d) => {
            (d === "length" || d >= n) && c(u)
        });
        else switch (r !== void 0 && c(s.get(r)), t) {
            case "add":
                D(e) ? be(r) && c(s.get("length")) : (c(s.get($)), W(e) && c(s.get(at)));
                break;
            case "delete":
                D(e) || (c(s.get($)), W(e) && c(s.get(at)));
                break;
            case "set":
                W(e) && c(s.get($));
                break
        }
        let l = u => { u.options.onTrigger && u.options.onTrigger({ effect: u, target: e, key: r, type: t, newValue: n, oldValue: i, oldTarget: o }), u.options.scheduler ? u.options.scheduler(u) : u() };
        a.forEach(l)
    }
    var cn = tt("__proto__,__v_isRef,__isVue"),
        nr = new Set(Object.getOwnPropertyNames(Symbol).map(e => Symbol[e]).filter(ye)),
        ln = we(),
        un = we(!1, !0),
        fn = we(!0),
        dn = we(!0, !0),
        Ee = {};
    ["includes", "indexOf", "lastIndexOf"].forEach(e => {
        let t = Array.prototype[e];
        Ee[e] = function(...r) { let n = g(this); for (let o = 0, s = this.length; o < s; o++) v(n, "get", o + ""); let i = t.apply(n, r); return i === -1 || i === !1 ? t.apply(n, r.map(g)) : i }
    });
    ["push", "pop", "shift", "unshift", "splice"].forEach(e => {
        let t = Array.prototype[e];
        Ee[e] = function(...r) { an(); let n = t.apply(this, r); return rr(), n }
    });

    function we(e = !1, t = !1) { return function(n, i, o) { if (i === "__v_isReactive") return !e; if (i === "__v_isReadonly") return e; if (i === "__v_raw" && o === (e ? t ? mn : or : t ? pn : ir).get(n)) return n; let s = D(n); if (!e && s && ee(Ee, i)) return Reflect.get(Ee, i, o); let a = Reflect.get(n, i, o); return (ye(i) ? nr.has(i) : cn(i)) || (e || v(n, "get", i), t) ? a : lt(a) ? !s || !be(i) ? a.value : a : te(a) ? e ? sr(a) : Se(a) : a } }
    var hn = ar(),
        gn = ar(!0);

    function ar(e = !1) {
        return function(r, n, i, o) {
            let s = r[n];
            if (!e && (i = g(i), s = g(s), !D(r) && lt(s) && !lt(i))) return s.value = i, !0;
            let a = D(r) && be(n) ? Number(n) < r.length : ee(r, n),
                c = Reflect.set(r, n, i, o);
            return r === g(o) && (a ? ot(i, s) && P(r, "set", n, i, s) : P(r, "add", n, i)), c
        }
    }

    function _n(e, t) {
        let r = ee(e, t),
            n = e[t],
            i = Reflect.deleteProperty(e, t);
        return i && r && P(e, "delete", t, void 0, n), i
    }

    function xn(e, t) { let r = Reflect.has(e, t); return (!ye(t) || !nr.has(t)) && v(e, "has", t), r }

    function yn(e) { return v(e, "iterate", D(e) ? "length" : $), Reflect.ownKeys(e) }
    var cr = { get: ln, set: hn, deleteProperty: _n, has: xn, ownKeys: yn },
        lr = { get: fn, set(e, t) { return console.warn(`Set operation on key "${String(t)}" failed: target is readonly.`, e), !0 }, deleteProperty(e, t) { return console.warn(`Delete operation on key "${String(t)}" failed: target is readonly.`, e), !0 } },
        uo = rt({}, cr, { get: un, set: gn }),
        fo = rt({}, lr, { get: dn }),
        ut = e => te(e) ? Se(e) : e,
        ft = e => te(e) ? sr(e) : e,
        dt = e => e,
        Ae = e => Reflect.getPrototypeOf(e);

    function Oe(e, t, r = !1, n = !1) {
        e = e.__v_raw;
        let i = g(e),
            o = g(t);
        t !== o && !r && v(i, "get", t), !r && v(i, "get", o);
        let { has: s } = Ae(i), a = n ? dt : r ? ft : ut;
        if (s.call(i, t)) return a(e.get(t));
        if (s.call(i, o)) return a(e.get(o));
        e !== i && e.get(t)
    }

    function Te(e, t = !1) {
        let r = this.__v_raw,
            n = g(r),
            i = g(e);
        return e !== i && !t && v(n, "has", e), !t && v(n, "has", i), e === i ? r.has(e) : r.has(e) || r.has(i)
    }

    function Re(e, t = !1) { return e = e.__v_raw, !t && v(g(e), "iterate", $), Reflect.get(e, "size", e) }

    function ur(e) { e = g(e); let t = g(this); return Ae(t).has.call(t, e) || (t.add(e), P(t, "add", e, e)), this }

    function dr(e, t) {
        t = g(t);
        let r = g(this),
            { has: n, get: i } = Ae(r),
            o = n.call(r, e);
        o ? fr(r, n, e) : (e = g(e), o = n.call(r, e));
        let s = i.call(r, e);
        return r.set(e, t), o ? ot(t, s) && P(r, "set", e, t, s) : P(r, "add", e, t), this
    }

    function pr(e) {
        let t = g(this),
            { has: r, get: n } = Ae(t),
            i = r.call(t, e);
        i ? fr(t, r, e) : (e = g(e), i = r.call(t, e));
        let o = n ? n.call(t, e) : void 0,
            s = t.delete(e);
        return i && P(t, "delete", e, void 0, o), s
    }

    function mr() {
        let e = g(this),
            t = e.size !== 0,
            r = W(e) ? new Map(e) : new Set(e),
            n = e.clear();
        return t && P(e, "clear", void 0, void 0, r), n
    }

    function Ce(e, t) {
        return function(n, i) {
            let o = this,
                s = o.__v_raw,
                a = g(s),
                c = t ? dt : e ? ft : ut;
            return !e && v(a, "iterate", $), s.forEach((l, u) => n.call(i, c(l), c(u), o))
        }
    }

    function Ne(e, t, r) {
        return function(...n) {
            let i = this.__v_raw,
                o = g(i),
                s = W(o),
                a = e === "entries" || e === Symbol.iterator && s,
                c = e === "keys" && s,
                l = i[e](...n),
                u = r ? dt : t ? ft : ut;
            return !t && v(o, "iterate", c ? at : $), { next() { let { value: d, done: w } = l.next(); return w ? { value: d, done: w } : { value: a ? [u(d[0]), u(d[1])] : u(d), done: w } }, [Symbol.iterator]() { return this } }
        }
    }

    function I(e) {
        return function(...t) {
            {
                let r = t[0] ? `on key "${t[0]}" ` : "";
                console.warn(`${it(e)} operation ${r}failed: target is readonly.`, g(this))
            }
            return e === "delete" ? !1 : this
        }
    }
    var hr = {get(e) { return Oe(this, e) }, get size() { return Re(this) }, has: Te, add: ur, set: dr, delete: pr, clear: mr, forEach: Ce(!1, !1) },
        gr = {get(e) { return Oe(this, e, !1, !0) }, get size() { return Re(this) }, has: Te, add: ur, set: dr, delete: pr, clear: mr, forEach: Ce(!1, !0) },
        _r = {get(e) { return Oe(this, e, !0) }, get size() { return Re(this, !0) }, has(e) { return Te.call(this, e, !0) }, add: I("add"), set: I("set"), delete: I("delete"), clear: I("clear"), forEach: Ce(!0, !1) },
        xr = {get(e) { return Oe(this, e, !0, !0) }, get size() { return Re(this, !0) }, has(e) { return Te.call(this, e, !0) }, add: I("add"), set: I("set"), delete: I("delete"), clear: I("clear"), forEach: Ce(!0, !0) },
        bn = ["keys", "values", "entries", Symbol.iterator];
    bn.forEach(e => { hr[e] = Ne(e, !1, !1), _r[e] = Ne(e, !0, !1), gr[e] = Ne(e, !1, !0), xr[e] = Ne(e, !0, !0) });

    function Me(e, t) { let r = t ? e ? xr : gr : e ? _r : hr; return (n, i, o) => i === "__v_isReactive" ? !e : i === "__v_isReadonly" ? e : i === "__v_raw" ? n : Reflect.get(ee(r, i) && i in n ? r : n, i, o) }
    var vn = { get: Me(!1, !1) },
        po = { get: Me(!1, !0) },
        wn = { get: Me(!0, !1) },
        mo = { get: Me(!0, !0) };

    function fr(e, t, r) {
        let n = g(r);
        if (n !== r && t.call(e, n)) {
            let i = nt(e);
            console.warn(`Reactive ${i} contains both the raw and reactive versions of the same object${i==="Map"?" as keys":""}, which can lead to inconsistencies. Avoid differentiating between the raw and reactive versions of an object and only use the reactive version if possible.`)
        }
    }
    var ir = new WeakMap,
        pn = new WeakMap,
        or = new WeakMap,
        mn = new WeakMap;

    function En(e) {
        switch (e) {
            case "Object":
            case "Array":
                return 1;
            case "Map":
            case "Set":
            case "WeakMap":
            case "WeakSet":
                return 2;
            default:
                return 0
        }
    }

    function Sn(e) { return e.__v_skip || !Object.isExtensible(e) ? 0 : En(nt(e)) }

    function Se(e) { return e && e.__v_isReadonly ? e : yr(e, !1, cr, vn, ir) }

    function sr(e) { return yr(e, !0, lr, wn, or) }

    function yr(e, t, r, n, i) { if (!te(e)) return console.warn(`value cannot be made reactive: ${String(e)}`), e; if (e.__v_raw && !(t && e.__v_isReactive)) return e; let o = i.get(e); if (o) return o; let s = Sn(e); if (s === 0) return e; let a = new Proxy(e, s === 2 ? n : r); return i.set(e, a), a }

    function g(e) { return e && g(e.__v_raw) || e }

    function lt(e) { return Boolean(e && e.__v_isRef === !0) }
    y("nextTick", () => B);
    y("dispatch", e => F.bind(F, e));
    y("watch", e => (t, r) => {
        let n = h(e, t),
            i = !0,
            o;
        R(() => n(s => {
            let a = document.createElement("div");
            a.dataset.throwAway = s, i ? o = s : queueMicrotask(() => { r(s, o), o = s }), i = !1
        }))
    });
    y("store", Ut);
    y("refs", e => N(e)._x_refs || {});
    y("el", e => e);

    function ne(e, t) { return Array.isArray(t) ? br(e, t.join(" ")) : typeof t == "object" && t !== null ? An(e, t) : typeof t == "function" ? ne(e, t()) : br(e, t) }

    function br(e, t) {
        let r = o => o.split(" ").filter(Boolean),
            n = o => o.split(" ").filter(s => !e.classList.contains(s)).filter(Boolean),
            i = o => (e.classList.add(...o), () => { e.classList.remove(...o) });
        return t = t === !0 ? t = "" : t || "", i(n(t))
    }

    function An(e, t) {
        let r = a => a.split(" ").filter(Boolean),
            n = Object.entries(t).flatMap(([a, c]) => c ? r(a) : !1).filter(Boolean),
            i = Object.entries(t).flatMap(([a, c]) => c ? !1 : r(a)).filter(Boolean),
            o = [],
            s = [];
        return i.forEach(a => { e.classList.contains(a) && (e.classList.remove(a), s.push(a)) }), n.forEach(a => { e.classList.contains(a) || (e.classList.add(a), o.push(a)) }), () => { s.forEach(a => e.classList.add(a)), o.forEach(a => e.classList.remove(a)) }
    }

    function ie(e, t) { return typeof t == "object" && t !== null ? On(e, t) : Tn(e, t) }

    function On(e, t) { let r = {}; return Object.entries(t).forEach(([n, i]) => { r[n] = e.style[n], e.style[n] = i }), setTimeout(() => { e.style.length === 0 && e.removeAttribute("style") }), () => { ie(e, r) } }

    function Tn(e, t) { let r = e.getAttribute("style", t); return e.setAttribute("style", t), () => { e.setAttribute("style", r) } }

    function oe(e, t = () => {}) { let r = !1; return function() { r ? t.apply(this, arguments) : (r = !0, e.apply(this, arguments)) } }
    p("transition", (e, { value: t, modifiers: r, expression: n }) => { n ? Rn(e, n, t) : Cn(e, r, t) });

    function Rn(e, t, r) { vr(e, ne, ""), { enter: i => { e._x_transition.enter.during = i }, "enter-start": i => { e._x_transition.enter.start = i }, "enter-end": i => { e._x_transition.enter.end = i }, leave: i => { e._x_transition.leave.during = i }, "leave-start": i => { e._x_transition.leave.start = i }, "leave-end": i => { e._x_transition.leave.end = i } }[r](t) }

    function Cn(e, t, r) {
        vr(e, ie);
        let n = !t.includes("in") && !t.includes("out") && !r,
            i = n || t.includes("in") || ["enter"].includes(r),
            o = n || t.includes("out") || ["leave"].includes(r);
        t.includes("in") && !n && (t = t.filter((_, x) => x < t.indexOf("out"))), t.includes("out") && !n && (t = t.filter((_, x) => x > t.indexOf("out")));
        let s = !t.includes("opacity") && !t.includes("scale"),
            a = s || t.includes("opacity"),
            c = s || t.includes("scale"),
            l = a ? 0 : 1,
            u = c ? se(t, "scale", 95) / 100 : 1,
            d = se(t, "delay", 0),
            w = se(t, "origin", "center"),
            L = "opacity, transform",
            j = se(t, "duration", 150) / 1e3,
            le = se(t, "duration", 75) / 1e3,
            f = "cubic-bezier(0.4, 0.0, 0.2, 1)";
        i && (e._x_transition.enter.during = { transformOrigin: w, transitionDelay: d, transitionProperty: L, transitionDuration: `${j}s`, transitionTimingFunction: f }, e._x_transition.enter.start = { opacity: l, transform: `scale(${u})` }, e._x_transition.enter.end = { opacity: 1, transform: "scale(1)" }), o && (e._x_transition.leave.during = { transformOrigin: w, transitionDelay: d, transitionProperty: L, transitionDuration: `${le}s`, transitionTimingFunction: f }, e._x_transition.leave.start = { opacity: 1, transform: "scale(1)" }, e._x_transition.leave.end = { opacity: l, transform: `scale(${u})` })
    }

    function vr(e, t, r = {}) { e._x_transition || (e._x_transition = { enter: { during: r, start: r, end: r }, leave: { during: r, start: r, end: r }, in (n = () => {}, i = () => {}) { wr(e, t, { during: this.enter.during, start: this.enter.start, end: this.enter.end, entering: !0 }, n, i) }, out(n = () => {}, i = () => {}) { wr(e, t, { during: this.leave.during, start: this.leave.start, end: this.leave.end, entering: !1 }, n, i) } }) }
    window.Element.prototype._x_toggleAndCascadeWithTransitions = function(e, t, r, n) {
        let i = () => requestAnimationFrame(r);
        if (t) { e._x_transition ? e._x_transition.in(r) : i(); return }
        e._x_hidePromise = e._x_transition ? new Promise((o, s) => { e._x_transition.out(() => {}, () => o(n)), e._x_transitioning.beforeCancel(() => s({ isFromCancelledTransition: !0 })) }) : Promise.resolve(n), queueMicrotask(() => {
            let o = Er(e);
            o ? (o._x_hideChildren || (o._x_hideChildren = []), o._x_hideChildren.push(e)) : queueMicrotask(() => {
                let s = a => { let c = Promise.all([a._x_hidePromise, ...(a._x_hideChildren || []).map(s)]).then(([l]) => l()); return delete a._x_hidePromise, delete a._x_hideChildren, c };
                s(e).catch(a => { if (!a.isFromCancelledTransition) throw a })
            })
        })
    };

    function Er(e) { let t = e.parentNode; if (!!t) return t._x_hidePromise ? t : Er(t) }

    function wr(e, t, { during: r, start: n, end: i, entering: o } = {}, s = () => {}, a = () => {}) {
        if (e._x_transitioning && e._x_transitioning.cancel(), Object.keys(r).length === 0 && Object.keys(n).length === 0 && Object.keys(i).length === 0) { s(), a(); return }
        let c, l, u;
        Nn(e, { start() { c = t(e, n) }, during() { l = t(e, r) }, before: s, end() { c(), u = t(e, i) }, after: a, cleanup() { l(), u() } }, o)
    }

    function Nn(e, t, r) {
        let n, i, o, s = oe(() => { m(() => { n = !0, i || t.before(), o || (t.end(), ge()), t.after(), e.isConnected && t.cleanup(), delete e._x_transitioning }) });
        e._x_transitioning = {
            beforeCancels: [],
            beforeCancel(a) { this.beforeCancels.push(a) },
            cancel: oe(function() {
                for (; this.beforeCancels.length;) this.beforeCancels.shift()();
                s()
            }),
            finish: s,
            entering: r
        }, m(() => { t.start(), t.during() }), Ft(), requestAnimationFrame(() => {
            if (n) return;
            let a = Number(getComputedStyle(e).transitionDuration.replace(/,.*/, "").replace("s", "")) * 1e3,
                c = Number(getComputedStyle(e).transitionDelay.replace(/,.*/, "").replace("s", "")) * 1e3;
            a === 0 && (a = Number(getComputedStyle(e).animationDuration.replace("s", "")) * 1e3), m(() => { t.before() }), i = !0, requestAnimationFrame(() => { n || (m(() => { t.end() }), ge(), setTimeout(e._x_transitioning.finish, a + c), o = !0) })
        })
    }

    function se(e, t, r) { if (e.indexOf(t) === -1) return r; let n = e[e.indexOf(t) + 1]; if (!n || t === "scale" && isNaN(n)) return r; if (t === "duration") { let i = n.match(/([0-9]+)ms/); if (i) return i[1] } return t === "origin" && ["top", "right", "left", "center", "bottom"].includes(e[e.indexOf(t) + 2]) ? [n, e[e.indexOf(t) + 2]].join(" ") : n }
    var Sr = () => {};
    Sr.inline = (e, { modifiers: t }, { cleanup: r }) => { t.includes("self") ? e._x_ignoreSelf = !0 : e._x_ignore = !0, r(() => { t.includes("self") ? delete e._x_ignoreSelf : delete e._x_ignore }) };
    p("ignore", Sr);
    p("effect", (e, { expression: t }, { effect: r }) => r(h(e, t)));

    function ae(e, t, r, n = []) {
        switch (e._x_bindings || (e._x_bindings = b({})), e._x_bindings[t] = r, t = n.includes("camel") ? In(t) : t, t) {
            case "value":
                Mn(e, r);
                break;
            case "style":
                Dn(e, r);
                break;
            case "class":
                kn(e, r);
                break;
            default:
                Pn(e, t, r);
                break
        }
    }

    function Mn(e, t) {
        if (e.type === "radio") e.attributes.value === void 0 && (e.value = t), window.fromModel && (e.checked = Ar(e.value, t));
        else if (e.type === "checkbox") Number.isInteger(t) ? e.value = t : !Number.isInteger(t) && !Array.isArray(t) && typeof t != "boolean" && ![null, void 0].includes(t) ? e.value = String(t) : Array.isArray(t) ? e.checked = t.some(r => Ar(r, e.value)) : e.checked = !!t;
        else if (e.tagName === "SELECT") Ln(e, t);
        else {
            if (e.value === t) return;
            e.value = t
        }
    }

    function kn(e, t) { e._x_undoAddedClasses && e._x_undoAddedClasses(), e._x_undoAddedClasses = ne(e, t) }

    function Dn(e, t) { e._x_undoAddedStyles && e._x_undoAddedStyles(), e._x_undoAddedStyles = ie(e, t) }

    function Pn(e, t, r) {
        [null, void 0, !1].includes(r) && jn(t) ? e.removeAttribute(t) : ($n(t) && (r = t), Fn(e, t, r))
    }

    function Fn(e, t, r) { e.getAttribute(t) != r && e.setAttribute(t, r) }

    function Ln(e, t) {
        let r = [].concat(t).map(n => n + "");
        Array.from(e.options).forEach(n => { n.selected = r.includes(n.value) })
    }

    function In(e) { return e.toLowerCase().replace(/-(\w)/g, (t, r) => r.toUpperCase()) }

    function Ar(e, t) { return e == t }

    function $n(e) { return ["disabled", "checked", "required", "readonly", "hidden", "open", "selected", "autofocus", "itemscope", "multiple", "novalidate", "allowfullscreen", "allowpaymentrequest", "formnovalidate", "autoplay", "controls", "loop", "muted", "playsinline", "default", "ismap", "reversed", "async", "defer", "nomodule"].includes(e) }

    function jn(e) { return !["aria-pressed", "aria-checked"].includes(e) }

    function ce(e, t, r, n) {
        let i = e,
            o = c => n(c),
            s = {},
            a = (c, l) => u => l(c, u);
        if (r.includes("camel") && (t = Kn(t)), r.includes("passive") && (s.passive = !0), r.includes("window") && (i = window), r.includes("document") && (i = document), r.includes("prevent") && (o = a(o, (c, l) => { l.preventDefault(), c(l) })), r.includes("stop") && (o = a(o, (c, l) => { l.stopPropagation(), c(l) })), r.includes("self") && (o = a(o, (c, l) => { l.target === e && c(l) })), (r.includes("away") || r.includes("outside")) && (i = document, o = a(o, (c, l) => { e.contains(l.target) || e.offsetWidth < 1 && e.offsetHeight < 1 || c(l) })), o = a(o, (c, l) => { Hn(t) && Bn(l, r) || c(l) }), r.includes("debounce")) {
            let c = r[r.indexOf("debounce") + 1] || "invalid-wait",
                l = pt(c.split("ms")[0]) ? Number(c.split("ms")[0]) : 250;
            o = zn(o, l, this)
        }
        if (r.includes("throttle")) {
            let c = r[r.indexOf("throttle") + 1] || "invalid-wait",
                l = pt(c.split("ms")[0]) ? Number(c.split("ms")[0]) : 250;
            o = Vn(o, l, this)
        }
        return r.includes("once") && (o = a(o, (c, l) => { c(l), i.removeEventListener(t, o, s) })), i.addEventListener(t, o, s), () => { i.removeEventListener(t, o, s) }
    }

    function Kn(e) { return e.toLowerCase().replace(/-(\w)/g, (t, r) => r.toUpperCase()) }

    function zn(e, t) {
        var r;
        return function() {
            var n = this,
                i = arguments,
                o = function() { r = null, e.apply(n, i) };
            clearTimeout(r), r = setTimeout(o, t)
        }
    }

    function Vn(e, t) {
        let r;
        return function() {
            let n = this,
                i = arguments;
            r || (e.apply(n, i), r = !0, setTimeout(() => r = !1, t))
        }
    }

    function pt(e) { return !Array.isArray(e) && !isNaN(e) }

    function qn(e) { return e.replace(/([a-z])([A-Z])/g, "$1-$2").replace(/[_\s]/, "-").toLowerCase() }

    function Hn(e) { return ["keydown", "keyup"].includes(e) }

    function Bn(e, t) {
        let r = t.filter(o => !["window", "document", "prevent", "stop", "once"].includes(o));
        if (r.includes("debounce")) {
            let o = r.indexOf("debounce");
            r.splice(o, pt((r[o + 1] || "invalid-wait").split("ms")[0]) ? 2 : 1)
        }
        if (r.length === 0 || r.length === 1 && r[0] === Or(e.key)) return !1;
        let i = ["ctrl", "shift", "alt", "meta", "cmd", "super"].filter(o => r.includes(o));
        return r = r.filter(o => !i.includes(o)), !(i.length > 0 && i.filter(s => ((s === "cmd" || s === "super") && (s = "meta"), e[`${s}Key`])).length === i.length && r[0] === Or(e.key))
    }

    function Or(e) {
        switch (e) {
            case "/":
                return "slash";
            case " ":
            case "Spacebar":
                return "space";
            default:
                return e && qn(e)
        }
    }
    p("model", (e, { modifiers: t, expression: r }, { effect: n, cleanup: i }) => {
        let o = h(e, r),
            s = `${r} = rightSideOfExpression($event, ${r})`,
            a = h(e, s);
        var c = e.tagName.toLowerCase() === "select" || ["checkbox", "radio"].includes(e.type) || t.includes("lazy") ? "change" : "input";
        let l = Un(e, t, r),
            u = ce(e, c, t, d => { a(() => {}, { scope: { $event: d, rightSideOfExpression: l } }) });
        i(() => u()), e._x_forceModelUpdate = () => { o(d => { d === void 0 && r.match(/\./) && (d = ""), window.fromModel = !0, m(() => ae(e, "value", d)), delete window.fromModel }) }, n(() => { t.includes("unintrusive") && document.activeElement.isSameNode(e) || e._x_forceModelUpdate() })
    });

    function Un(e, t, r) {
        return e.type === "radio" && m(() => { e.hasAttribute("name") || e.setAttribute("name", r) }), (n, i) => m(() => {
            if (n instanceof CustomEvent && n.detail !== void 0) return n.detail;
            if (e.type === "checkbox")
                if (Array.isArray(i)) { let o = t.includes("number") ? mt(n.target.value) : n.target.value; return n.target.checked ? i.concat([o]) : i.filter(s => !Wn(s, o)) } else return n.target.checked;
            else { if (e.tagName.toLowerCase() === "select" && e.multiple) return t.includes("number") ? Array.from(n.target.selectedOptions).map(o => { let s = o.value || o.text; return mt(s) }) : Array.from(n.target.selectedOptions).map(o => o.value || o.text); { let o = n.target.value; return t.includes("number") ? mt(o) : t.includes("trim") ? o.trim() : o } }
        })
    }

    function mt(e) { let t = e ? parseFloat(e) : null; return Gn(t) ? t : e }

    function Wn(e, t) { return e == t }

    function Gn(e) { return !Array.isArray(e) && !isNaN(e) }
    p("cloak", e => queueMicrotask(() => m(() => e.removeAttribute(S("cloak")))));
    zt(() => `[${S("init")}]`);
    p("init", U((e, { expression: t }) => C(e, t, {}, !1)));
    p("text", (e, { expression: t }, { effect: r, evaluateLater: n }) => {
        let i = n(t);
        r(() => { i(o => { m(() => { e.textContent = o }) }) })
    });
    p("html", (e, { expression: t }, { effect: r, evaluateLater: n }) => {
        let i = n(t);
        r(() => { i(o => { e.innerHTML = o }) })
    });
    H(pe(":", me(S("bind:"))));
    p("bind", (e, { value: t, modifiers: r, expression: n, original: i }, { effect: o }) => {
        if (!t) return Yn(e, n, i, o);
        if (t === "key") return Jn(e, n);
        let s = h(e, n);
        o(() => s(a => { a === void 0 && n.match(/\./) && (a = ""), m(() => ae(e, t, a, r)) }))
    });

    function Yn(e, t, r, n) {
        let i = h(e, t),
            o = [];
        n(() => {
            for (; o.length;) o.pop()();
            i(s => {
                let a = Object.entries(s).map(([c, l]) => ({ name: c, value: l }));
                X(e, a, r).map(c => { o.push(c.runCleanups), c() })
            })
        })
    }

    function Jn(e, t) { e._x_keyExpression = t }
    xe(() => `[${S("data")}]`);
    p("data", U((e, { expression: t }, { cleanup: r }) => {
        t = t === "" ? "{}" : t;
        let n = {};
        Z(n, e);
        let i = {};
        Jt(i, n);
        let o = C(e, t, { scope: i });
        Z(o, e);
        let s = b(o);
        Rt(s);
        let a = V(e, s);
        s.init && s.init(), r(() => { a(), s.destroy && s.destroy() })
    }));
    p("show", (e, { modifiers: t, expression: r }, { effect: n }) => {
        let i = h(e, r),
            o = () => m(() => { e.style.display = "none", e._x_isShown = !1 }),
            s = () => m(() => { e.style.length === 1 && e.style.display === "none" ? e.removeAttribute("style") : e.style.removeProperty("display"), e._x_isShown = !0 }),
            a = () => setTimeout(s),
            c = oe(d => d ? s() : o(), d => { typeof e._x_toggleAndCascadeWithTransitions == "function" ? e._x_toggleAndCascadeWithTransitions(e, d, s, o) : d ? a() : o() }),
            l, u = !0;
        n(() => i(d => {!u && d === l || (t.includes("immediate") && (d ? a() : o()), c(d), l = d, u = !1) }))
    });
    p("for", (e, { expression: t }, { effect: r, cleanup: n }) => {
        let i = Zn(t),
            o = h(e, i.items),
            s = h(e, e._x_keyExpression || "index");
        e._x_prevKeys = [], e._x_lookup = {}, r(() => Qn(e, i, o, s)), n(() => { Object.values(e._x_lookup).forEach(a => a.remove()), delete e._x_prevKeys, delete e._x_lookup })
    });

    function Qn(e, t, r, n) {
        let i = s => typeof s == "object" && !Array.isArray(s),
            o = e;
        r(s => {
            Xn(s) && s >= 0 && (s = Array.from(Array(s).keys(), f => f + 1));
            let a = e._x_lookup,
                c = e._x_prevKeys,
                l = [],
                u = [];
            if (i(s)) s = Object.entries(s).map(([f, _]) => {
                let x = Tr(t, _, f, s);
                n(T => u.push(T), { scope: { index: f, ...x } }), l.push(x)
            });
            else
                for (let f = 0; f < s.length; f++) {
                    let _ = Tr(t, s[f], f, s);
                    n(x => u.push(x), { scope: { index: f, ..._ } }), l.push(_)
                }
            let d = [],
                w = [],
                L = [],
                j = [];
            for (let f = 0; f < c.length; f++) {
                let _ = c[f];
                u.indexOf(_) === -1 && L.push(_)
            }
            c = c.filter(f => !L.includes(f));
            let le = "template";
            for (let f = 0; f < u.length; f++) {
                let _ = u[f],
                    x = c.indexOf(_);
                if (x === -1) c.splice(f, 0, _), d.push([le, f]);
                else if (x !== f) {
                    let T = c.splice(f, 1)[0],
                        M = c.splice(x - 1, 1)[0];
                    c.splice(f, 0, M), c.splice(x, 0, T), w.push([T, M])
                } else j.push(_);
                le = _
            }
            for (let f = 0; f < L.length; f++) {
                let _ = L[f];
                a[_].remove(), a[_] = null, delete a[_]
            }
            for (let f = 0; f < w.length; f++) {
                let [_, x] = w[f], T = a[_], M = a[x], K = document.createElement("div");
                m(() => { M.after(K), T.after(M), K.before(T), K.remove() }), Ve(M, l[u.indexOf(x)])
            }
            for (let f = 0; f < d.length; f++) {
                let [_, x] = d[f], T = _ === "template" ? o : a[_], M = l[x], K = u[x], ue = document.importNode(o.content, !0).firstElementChild;
                V(ue, b(M), o), m(() => { T.after(ue), A(ue) }), typeof K == "object" && _e("x-for key cannot be an object, it must be a string or an integer", o), a[K] = ue
            }
            for (let f = 0; f < j.length; f++) Ve(a[j[f]], l[u.indexOf(j[f])]);
            o._x_prevKeys = u
        })
    }

    function Zn(e) {
        let t = /,([^,\}\]]*)(?:,([^,\}\]]*))?$/,
            r = /^\s*\(|\)\s*$/g,
            n = /([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,
            i = e.match(n);
        if (!i) return;
        let o = {};
        o.items = i[2].trim();
        let s = i[1].replace(r, "").trim(),
            a = s.match(t);
        return a ? (o.item = s.replace(t, "").trim(), o.index = a[1].trim(), a[2] && (o.collection = a[2].trim())) : o.item = s, o
    }

    function Tr(e, t, r, n) { let i = {}; return /^\[.*\]$/.test(e.item) && Array.isArray(t) ? e.item.replace("[", "").replace("]", "").split(",").map(s => s.trim()).forEach((s, a) => { i[s] = t[a] }) : i[e.item] = t, e.index && (i[e.index] = r), e.collection && (i[e.collection] = n), i }

    function Xn(e) { return !Array.isArray(e) && !isNaN(e) }

    function Rr() {}
    Rr.inline = (e, { expression: t }, { cleanup: r }) => {
        let n = N(e);
        n._x_refs || (n._x_refs = {}), n._x_refs[t] = e, r(() => delete n._x_refs[t])
    };
    p("ref", Rr);
    p("if", (e, { expression: t }, { effect: r, cleanup: n }) => {
        let i = h(e, t),
            o = () => { if (e._x_currentIfEl) return e._x_currentIfEl; let a = e.content.cloneNode(!0).firstElementChild; return V(a, {}, e), m(() => { e.after(a), A(a) }), e._x_currentIfEl = a, e._x_undoIf = () => { a.remove(), delete e._x_currentIfEl }, a },
            s = () => {!e._x_undoIf || (e._x_undoIf(), delete e._x_undoIf) };
        r(() => i(a => { a ? o() : s() })), n(() => e._x_undoIf && e._x_undoIf())
    });
    H(pe("@", me(S("on:"))));
    p("on", U((e, { value: t, modifiers: r, expression: n }, { cleanup: i }) => {
        let o = n ? h(e, n) : () => {},
            s = ce(e, t, r, a => { o(() => {}, { scope: { $event: a }, params: [a] }) });
        i(() => s())
    }));
    E.setEvaluator(qe);
    E.setReactivityEngine({ reactive: Se, effect: Xt, release: tr, raw: g });
    var ht = E;
    window.Alpine = ht;
    queueMicrotask(() => { ht.start() });
})();
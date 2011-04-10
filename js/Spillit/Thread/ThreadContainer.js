Ext.ns('Spillit.Thread.ThreadContainer');
Spillit.Thread.ThreadContainer = Ext.extend(Ext.Panel, {
    constructor: function (args) {
        var me = this;
        me.contentLabel = new Ext.form.Label({
            html: args.content || 'empty'
        });

    },
    baseCls: 'x-bubble',
    frame: true
});

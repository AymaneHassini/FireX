(function(t,e,undefined){function a(){var e=this;e.name="Footable Sortable",e.init=function(a){e.footable=a,a.options.sort===!0&&t(a.table).unbind(".sorting").bind({"footable_initialized.sorting":function(){var i,o,n=t(a.table),r=(n.find("> tbody"),a.options.classes.sort);if(n.data("sort")!==!1){n.find("> thead > tr:last-child > th, > thead > tr:last-child > td").each(function(){var e=t(this),i=a.columns[e.index()];i.sort.ignore===!0||e.hasClass(r.sortable)||(e.addClass(r.sortable),t("<span />").addClass(r.indicator).appendTo(e))}),n.find("> thead > tr:last-child > th."+r.sortable+", > thead > tr:last-child > td."+r.sortable).unbind("click.footable").bind("click.footable",function(a){a.preventDefault(),o=t(this);var i=!o.hasClass(r.sorted);return e.doSort(o.index(),i),!1});var l=!1;for(var s in a.columns)if(i=a.columns[s],i.sort.initial){var d="descending"!==i.sort.initial;e.doSort(i.index,d);break}l&&a.bindToggleSelectors()}},"footable_redrawn.sorting":function(){var i=t(a.table),o=a.options.classes.sort;i.data("sorted")>=0&&i.find("> thead > tr:last-child > th").each(function(a){var i=t(this);return i.hasClass(o.sorted)||i.hasClass(o.descending)?(e.doSort(a),undefined):undefined})},"footable_column_data.sorting":function(e){var a=t(e.column.th);e.column.data.sort=e.column.data.sort||{},e.column.data.sort.initial=a.data("sort-initial")||!1,e.column.data.sort.ignore=a.data("sort-ignore")||!1,e.column.data.sort.selector=a.data("sort-selector")||null;var i=a.data("sort-match")||0;i>=e.column.data.matches.length&&(i=0),e.column.data.sort.match=e.column.data.matches[i]}}).data("footable-sort",e)},e.doSort=function(a,i){var o=e.footable;if(t(o.table).data("sort")!==!1){var n=t(o.table),r=n.find("> tbody"),l=o.columns[a],s=n.find("> thead > tr:last-child > th:eq("+a+")"),d=o.options.classes.sort,f=o.options.events.sort;if(i=i===undefined?s.hasClass(d.sorted):"toggle"===i?!s.hasClass(d.sorted):i,l.sort.ignore===!0)return!0;var u=o.raise(f.sorting,{column:l,direction:i?"ASC":"DESC"});u&&u.result===!1||(n.data("sorted",l.index),n.find("> thead > tr:last-child > th, > thead > tr:last-child > td").not(s).removeClass(d.sorted+" "+d.descending),i===undefined&&(i=s.hasClass(d.sorted)),i?s.removeClass(d.descending).addClass(d.sorted):s.removeClass(d.sorted).addClass(d.descending),e.sort(o,r,l,i),o.bindToggleSelectors(),o.raise(f.sorted,{column:l,direction:i?"ASC":"DESC"}))}},e.rows=function(e,a,i){var o=[];return a.find("> tr").each(function(){var a=t(this),n=null;if(a.hasClass(e.options.classes.detail))return!0;a.next().hasClass(e.options.classes.detail)&&(n=a.next().get(0));var r={row:a,detail:n};return i!==undefined&&(r.value=e.parse(this.cells[i.sort.match],i)),o.push(r),!0}).detach(),o},e.sort=function(t,a,i,o){var n=e.rows(t,a,i),r=t.options.sorters[i.type]||t.options.sorters.alpha;n.sort(function(t,e){return o?r(t.value,e.value):r(e.value,t.value)});for(var l=0;n.length>l;l++)a.append(n[l].row),null!==n[l].detail&&a.append(n[l].detail)}}if(e.footable===undefined||null===e.footable)throw Error("Please check and make sure footable.js is included in the page and is loaded prior to this script.");var i={sort:!0,sorters:{alpha:function(t,e){return"string"==typeof t&&(t=t.toLowerCase()),"string"==typeof e&&(e=e.toLowerCase()),t===e?0:e>t?-1:1},numeric:function(t,e){return t-e}},classes:{sort:{sortable:"footable-sortable",sorted:"footable-sorted",descending:"footable-sorted-desc",indicator:"footable-sort-indicator"}},events:{sort:{sorting:"footable_sorting",sorted:"footable_sorted"}}};e.footable.plugins.register(a,i)})(jQuery,window);
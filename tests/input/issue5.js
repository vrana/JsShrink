loop:
for (var i1 = 0, len1 = val.length; i1 < len1; i1++) {
	for (var i2 = 0, len2 = arg.length; i2 < len2; i2++) {
		if (toString(val[i1]) === toString(arg[i2])) {
			continue loop;
		}
	}
}

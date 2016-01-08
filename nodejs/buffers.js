// initialize buffer with 10 octets
var buf1 = new Buffer(10);

// initialise buffer avec tableau
var buf2 = new Buffer([10, 20, 30, 40, 50]);
console.log(buf2.length);

var buf3 = new Buffer("Simply Easy Learning", "utf-8");
console.log("Size "+buf3.length);
var json = buf3.toJSON(buf3);
console.log(json);

buf4 = new Buffer(256);
len = buf4.write("Simply Easy Learning");
console.log("Octets written "+len);
console.log(buf4.slice(1,4).length);

buf5 = new Buffer(26);
for (var i = 0 ; i < 26 ; i++) {
  buf5[i] = i + 97;
}

console.log( buf5.toString('ascii'));       // outputs: abcdefghijklmnopqrstuvwxyz
console.log( buf5.toString('ascii',0,5));   // outputs: abcde
console.log( buf5.toString('utf8',0,5));    // outputs: abcde
console.log( buf5.toString(undefined,0,5)); // encoding defaults to 'utf8', outputs abcde

buf6= new Buffer(256);
buf6.write("Allo");

buf7= new Buffer(256);
buf7.write("Allo");

console.log(buf6.compare(buf7));
console.log(Buffer.compare(buf6,buf7));

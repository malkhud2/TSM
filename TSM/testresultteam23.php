Begin test. Note that tests are async and may not return in order.
Test #1 Passed! Expected 422, got StatusCodeError: 422 - {"error":"status not set!"}
Test #2 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
Test #3 Passed! Expected 422, got StatusCodeError: 422 - {"error":"timestamp not set!"}
Test #4 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
Test #5 Passed! Response body = {"gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"}
Test #6 Passed! Response body = [{"_id":"5bdb15cc3ace67095168f463","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb16c53ace67095168f467","gw_uuid":"1","timestamp":"2","status":"3"},{"_id":"5bdb73eb97ce430d4b5d7003","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"}]
root@team23:~/QA# npm test

> QA@1.0.0 test /root/QA
> node blackbox.js

Begin test. Note that tests are async and may not return in order.
Test #1 Passed! Expected 422, got StatusCodeError: 422 - {"error":"status not set!"}
Test #2 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
Test #3 Passed! Expected 422, got StatusCodeError: 422 - {"error":"timestamp not set!"}
Test #5 Passed! Response body = {"gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass","_id":"5bdb73f897ce430d4b5d7009"}
Test #6 Passed! Response body = [{"_id":"5bdb15cc3ace67095168f463","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb16c53ace67095168f467","gw_uuid":"1","timestamp":"2","status":"3"},{"_id":"5bdb73eb97ce430d4b5d7003","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb73f897ce430d4b5d7009","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"}]
Test #4 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
root@team23:~/QA# 
root@team23:~/QA# npm test
^[[A

> QA@1.0.0 test /root/QA
> node blackbox.js

^[[A
^[[ABegin test. Note that tests are async and may not return in order.
Test #1 Passed! Expected 422, got StatusCodeError: 422 - {"error":"status not set!"}
Test #2 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
Test #3 Passed! Expected 422, got StatusCodeError: 422 - {"error":"timestamp not set!"}
Test #5 Passed! Response body = {"gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass","_id":"5bdb743797ce430d4b5d7010"}
Test #6 Passed! Response body = [{"_id":"5bdb15cc3ace67095168f463","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb16c53ace67095168f467","gw_uuid":"1","timestamp":"2","status":"3"},{"_id":"5bdb73eb97ce430d4b5d7003","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb73f897ce430d4b5d7009","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb743797ce430d4b5d7010","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"}]
Test #4 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
root@team23:~/QA# npm test
^[[A^[[A
> QA@1.0.0 test /root/QA
> node blackbox.js

Begin test. Note that tests are async and may not return in order.
Test #1 Passed! Expected 422, got StatusCodeError: 422 - {"error":"status not set!"}
Test #5 Passed! Response body = {"gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass","_id":"5bdb743897ce430d4b5d7017"}
Test #4 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
Test #2 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
Test #3 Passed! Expected 422, got StatusCodeError: 422 - {"error":"timestamp not set!"}
Test #6 Passed! Response body = [{"_id":"5bdb15cc3ace67095168f463","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb16c53ace67095168f467","gw_uuid":"1","timestamp":"2","status":"3"},{"_id":"5bdb73eb97ce430d4b5d7003","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb73f897ce430d4b5d7009","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb743797ce430d4b5d7010","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb743897ce430d4b5d7017","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"}]
root@team23:~/QA# npm test

> QA@1.0.0 test /root/QA
> node blackbox.js

^[[ABegin test. Note that tests are async and may not return in order.
Test #1 Passed! Expected 422, got StatusCodeError: 422 - {"error":"status not set!"}
Test #2 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}
Test #3 Passed! Expected 422, got StatusCodeError: 422 - {"error":"timestamp not set!"}
Test #6 Passed! Response body = [{"_id":"5bdb15cc3ace67095168f463","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb16c53ace67095168f467","gw_uuid":"1","timestamp":"2","status":"3"},{"_id":"5bdb73eb97ce430d4b5d7003","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb73f897ce430d4b5d7009","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb743797ce430d4b5d7010","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb743897ce430d4b5d7017","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"},{"_id":"5bdb743997ce430d4b5d701e","gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass"}]
Test #5 Passed! Response body = {"gw_uuid":1,"timestamp":2,"status":"OK","result":"should pass","_id":"5bdb743997ce430d4b5d701e"}
Test #4 Passed! Expected 422, got StatusCodeError: 422 - {"error":"gw_uuid not set!"}

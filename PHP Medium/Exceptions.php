<?php


try {
    echo "Inside try block";
    throw new Exception("Hello new exception was throws in try", 400);
    echo "This will not execute";
} catch (Exception $e) {
    echo $e->getMessage();
} finally {

    echo "Finally this will always be executed";
}

for i in \
1dice1e6pdhLzzWQq7yMidf6j8eAg7pkY \
1dice1Qf4Br5EYjj9rnHWqgMVYnQWehYG \
1dice2pxmRZrtqBVzixvWnxsMa7wN2GCK \
1dice2vQoUkQwDMbfDACM1xz6svEXdhYb \
1dice2WmRTLf1dEk4HH3Xs8LDuXzaHEQU \
1dice2xkjAAiphomEJA5NoowpuJ18HT1s \
1dice2zdoxQHpGRNaAWiqbK82FQhr4fb5 \
1dice37EemX64oHssTreXEFT3DXtZxVXK \
1dice3jkpTvevsohA4Np1yP4uKzG1SRLv \
1dice4J1mFEvVuFqD14HzdViHFGi9h4Pp \
1dice5wwEZT2u6ESAdUGG6MHgCpbQqZiy \
1dice61SNWEKWdA8LN6G44ewsiQfuCvge \
1dice6DPtUMBpWgv8i4pG8HMjXv9qDJWN \
1dice6gJgPDYz8PLQyJb8cgPBnmWqCSuF \
1dice6GV5Rz2iaifPvX7RMjfhaNPC8SXH \
1dice6wBxymYi3t94heUAG6MpG5eceLG1 \
1dice6YgEVBf88erBFra9BHf6ZMoyvG88 \
1dice7EYzJag7SxkdKXLr8Jn14WUb3Cf1 \
1dice7fUkz5h4z2wPc1wLMPWgB5mDwKDx \
1dice7W2AicHosf5EL3GFDUVga7TgtPFn \
1dice8EMZmqKvrGE4Qc9bUFf9PX3xaYDp \
1dice97ECuByXAvqXpaYzSaQuPVvrtmz6 \
1dice9wcMu5hLF4g81u8nioL5mmSHTApw \
1dice9wVtrKZTBbAZqz1XiTmboYyvpD3t
do
wget -qO - http://blockchain.info/address/$i|grep -i "\"total_received"|cut -f 4 -d ">"|cut -f 1 -d " "
done
for i in \
1dice1e6pdhLzzWQq7yMidf6j8eAg7pkY \
1dice1Qf4Br5EYjj9rnHWqgMVYnQWehYG \
1dice2pxmRZrtqBVzixvWnxsMa7wN2GCK \
1dice2vQoUkQwDMbfDACM1xz6svEXdhYb \
1dice2WmRTLf1dEk4HH3Xs8LDuXzaHEQU \
1dice2xkjAAiphomEJA5NoowpuJ18HT1s \
1dice2zdoxQHpGRNaAWiqbK82FQhr4fb5 \
1dice37EemX64oHssTreXEFT3DXtZxVXK \
1dice3jkpTvevsohA4Np1yP4uKzG1SRLv \
1dice4J1mFEvVuFqD14HzdViHFGi9h4Pp \
1dice5wwEZT2u6ESAdUGG6MHgCpbQqZiy \
1dice61SNWEKWdA8LN6G44ewsiQfuCvge \
1dice6DPtUMBpWgv8i4pG8HMjXv9qDJWN \
1dice6gJgPDYz8PLQyJb8cgPBnmWqCSuF \
1dice6GV5Rz2iaifPvX7RMjfhaNPC8SXH \
1dice6wBxymYi3t94heUAG6MpG5eceLG1 \
1dice6YgEVBf88erBFra9BHf6ZMoyvG88 \
1dice7EYzJag7SxkdKXLr8Jn14WUb3Cf1 \
1dice7fUkz5h4z2wPc1wLMPWgB5mDwKDx \
1dice7W2AicHosf5EL3GFDUVga7TgtPFn \
1dice8EMZmqKvrGE4Qc9bUFf9PX3xaYDp \
1dice97ECuByXAvqXpaYzSaQuPVvrtmz6 \
1dice9wcMu5hLF4g81u8nioL5mmSHTApw \
1dice9wVtrKZTBbAZqz1XiTmboYyvpD3t
do
wget -qO - http://blockchain.info/address/$i|grep -i "\"n_transactions"|cut -f 2 -d ">"|cut -f 1 -d "<"
done

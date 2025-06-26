from collections import defaultdict
import math

# 素因数分解
def factorize(n):
    res = defaultdict(int)
    for i in range(2, int(math.isqrt(n)) + 1):
        while n % i == 0:
            res[i] += 1
            n //= i
    if n > 1:
        res[n] += 1
    return res

# メイン処理
def score(n, A, K):
    k_factors = factorize(K)  # Kの素因数分解
    total_factors = defaultdict(int)

    for a in A:
        a_factors = factorize(a)
        for p in k_factors:
            total_factors[p] += a_factors[p]

    # 各素因数でKを何回作れるか → 最小値を取る
    times = float('inf')
    for p in k_factors:
        if total_factors[p] < k_factors[p]:
            return 0
        times = min(times, total_factors[p] // k_factors[p])
    return times
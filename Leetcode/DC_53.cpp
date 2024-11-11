class Solution {
public:
    int maxSubArray(vector<int>& nums) {
        int maxn = INT16_MIN,cur = 0;
        for(int val : nums){
            cur += val;
            maxn = max(maxn,cur);
            if(cur<0){
                cur = 0;
            }
        }
        return maxn;
    }
};
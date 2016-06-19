<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_09c9aa40ce0aa8096872b74aded3047813739c2bb926665686911ca49b322b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a90925bb92e4a710ccafd14ef0c54898964d7504b439882ea32c8baf71cdde3 = $this->env->getExtension("native_profiler");
        $__internal_9a90925bb92e4a710ccafd14ef0c54898964d7504b439882ea32c8baf71cdde3->enter($__internal_9a90925bb92e4a710ccafd14ef0c54898964d7504b439882ea32c8baf71cdde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_9a90925bb92e4a710ccafd14ef0c54898964d7504b439882ea32c8baf71cdde3->leave($__internal_9a90925bb92e4a710ccafd14ef0c54898964d7504b439882ea32c8baf71cdde3_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_86540251f224ce873ddc6220208e782fe16668b0ea0e2d5e12dd8af2c0110b9c = $this->env->getExtension("native_profiler");
        $__internal_86540251f224ce873ddc6220208e782fe16668b0ea0e2d5e12dd8af2c0110b9c->enter($__internal_86540251f224ce873ddc6220208e782fe16668b0ea0e2d5e12dd8af2c0110b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_86540251f224ce873ddc6220208e782fe16668b0ea0e2d5e12dd8af2c0110b9c->leave($__internal_86540251f224ce873ddc6220208e782fe16668b0ea0e2d5e12dd8af2c0110b9c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}<a href="{{ path('logout') }}">Logout</a>{% endblock %}*/
/* */

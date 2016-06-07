<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85536086988f762a740889030910f2e93b537f75cdeb835dcf8696be612eaffa = $this->env->getExtension("native_profiler");
        $__internal_85536086988f762a740889030910f2e93b537f75cdeb835dcf8696be612eaffa->enter($__internal_85536086988f762a740889030910f2e93b537f75cdeb835dcf8696be612eaffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85536086988f762a740889030910f2e93b537f75cdeb835dcf8696be612eaffa->leave($__internal_85536086988f762a740889030910f2e93b537f75cdeb835dcf8696be612eaffa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_366be68c7407988f9c93b328a2c4aece8eeaa4c2507dc65b34004d4d3fca6b63 = $this->env->getExtension("native_profiler");
        $__internal_366be68c7407988f9c93b328a2c4aece8eeaa4c2507dc65b34004d4d3fca6b63->enter($__internal_366be68c7407988f9c93b328a2c4aece8eeaa4c2507dc65b34004d4d3fca6b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_366be68c7407988f9c93b328a2c4aece8eeaa4c2507dc65b34004d4d3fca6b63->leave($__internal_366be68c7407988f9c93b328a2c4aece8eeaa4c2507dc65b34004d4d3fca6b63_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41bcd79147f8db76589d47fca4451a3908fd642757d789944841b2daab6ba6ab = $this->env->getExtension("native_profiler");
        $__internal_41bcd79147f8db76589d47fca4451a3908fd642757d789944841b2daab6ba6ab->enter($__internal_41bcd79147f8db76589d47fca4451a3908fd642757d789944841b2daab6ba6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41bcd79147f8db76589d47fca4451a3908fd642757d789944841b2daab6ba6ab->leave($__internal_41bcd79147f8db76589d47fca4451a3908fd642757d789944841b2daab6ba6ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1623bec90914b16fe98bac29f9d04cbd4784c1d27c4d474da8034b0efafadf2f = $this->env->getExtension("native_profiler");
        $__internal_1623bec90914b16fe98bac29f9d04cbd4784c1d27c4d474da8034b0efafadf2f->enter($__internal_1623bec90914b16fe98bac29f9d04cbd4784c1d27c4d474da8034b0efafadf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1623bec90914b16fe98bac29f9d04cbd4784c1d27c4d474da8034b0efafadf2f->leave($__internal_1623bec90914b16fe98bac29f9d04cbd4784c1d27c4d474da8034b0efafadf2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

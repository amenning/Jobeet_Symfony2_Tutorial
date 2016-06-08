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
        $__internal_f7c8a4545ca16c51abe50dd245f6e1feb1554f3d33427399f4103152992c8db7 = $this->env->getExtension("native_profiler");
        $__internal_f7c8a4545ca16c51abe50dd245f6e1feb1554f3d33427399f4103152992c8db7->enter($__internal_f7c8a4545ca16c51abe50dd245f6e1feb1554f3d33427399f4103152992c8db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7c8a4545ca16c51abe50dd245f6e1feb1554f3d33427399f4103152992c8db7->leave($__internal_f7c8a4545ca16c51abe50dd245f6e1feb1554f3d33427399f4103152992c8db7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2462c7e36c30eb11fcb9518cb5cec11b750d257837e21e710610e0cbb497e7e6 = $this->env->getExtension("native_profiler");
        $__internal_2462c7e36c30eb11fcb9518cb5cec11b750d257837e21e710610e0cbb497e7e6->enter($__internal_2462c7e36c30eb11fcb9518cb5cec11b750d257837e21e710610e0cbb497e7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2462c7e36c30eb11fcb9518cb5cec11b750d257837e21e710610e0cbb497e7e6->leave($__internal_2462c7e36c30eb11fcb9518cb5cec11b750d257837e21e710610e0cbb497e7e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67ba94fda69fb2842fb1c17c7e09f1de1c6a0aee67a17adb5f80c81302a5a937 = $this->env->getExtension("native_profiler");
        $__internal_67ba94fda69fb2842fb1c17c7e09f1de1c6a0aee67a17adb5f80c81302a5a937->enter($__internal_67ba94fda69fb2842fb1c17c7e09f1de1c6a0aee67a17adb5f80c81302a5a937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67ba94fda69fb2842fb1c17c7e09f1de1c6a0aee67a17adb5f80c81302a5a937->leave($__internal_67ba94fda69fb2842fb1c17c7e09f1de1c6a0aee67a17adb5f80c81302a5a937_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2216fe94acffd7001125cea29af9d55ba17d3b0981a18bab1758f09c63354d7f = $this->env->getExtension("native_profiler");
        $__internal_2216fe94acffd7001125cea29af9d55ba17d3b0981a18bab1758f09c63354d7f->enter($__internal_2216fe94acffd7001125cea29af9d55ba17d3b0981a18bab1758f09c63354d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2216fe94acffd7001125cea29af9d55ba17d3b0981a18bab1758f09c63354d7f->leave($__internal_2216fe94acffd7001125cea29af9d55ba17d3b0981a18bab1758f09c63354d7f_prof);

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

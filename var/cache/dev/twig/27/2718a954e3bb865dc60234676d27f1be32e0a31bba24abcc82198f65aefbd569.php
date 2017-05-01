<?php

/* ingredient/show.html.twig */
class __TwigTemplate_97693e959e24b8a62a236e8505c65c921ae72bef996b0d2e739b54f96c0c30b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ingredient/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31117d38b967bc375ff5f06be18713aa1835c4ebe7251594dd25d5f79001dab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31117d38b967bc375ff5f06be18713aa1835c4ebe7251594dd25d5f79001dab8->enter($__internal_31117d38b967bc375ff5f06be18713aa1835c4ebe7251594dd25d5f79001dab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $__internal_66d6d032245fc5117c1fc6c5e9c737d74671aa8d5f28112de6f0e10bf47add2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d6d032245fc5117c1fc6c5e9c737d74671aa8d5f28112de6f0e10bf47add2e->enter($__internal_66d6d032245fc5117c1fc6c5e9c737d74671aa8d5f28112de6f0e10bf47add2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ingredient/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31117d38b967bc375ff5f06be18713aa1835c4ebe7251594dd25d5f79001dab8->leave($__internal_31117d38b967bc375ff5f06be18713aa1835c4ebe7251594dd25d5f79001dab8_prof);

        
        $__internal_66d6d032245fc5117c1fc6c5e9c737d74671aa8d5f28112de6f0e10bf47add2e->leave($__internal_66d6d032245fc5117c1fc6c5e9c737d74671aa8d5f28112de6f0e10bf47add2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e52469eb30b37c313b5e6529ea3cf785860ef2890bfbca539b6302e811cdc40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e52469eb30b37c313b5e6529ea3cf785860ef2890bfbca539b6302e811cdc40->enter($__internal_8e52469eb30b37c313b5e6529ea3cf785860ef2890bfbca539b6302e811cdc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77484d1c5c2ae537ae252875229d04ee8977369637d843cea375190e85789f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77484d1c5c2ae537ae252875229d04ee8977369637d843cea375190e85789f34->enter($__internal_77484d1c5c2ae537ae252875229d04ee8977369637d843cea375190e85789f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ingredient</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Icon</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "icon", array()), "html", null, true);
        echo "</td>
                <img height=32 width=32 src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "icon", array()), "html", null, true);
        echo "\" class=\"gallery-thumb\">
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ingredient_edit", array("id" => $this->getAttribute(($context["ingredient"] ?? $this->getContext($context, "ingredient")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_77484d1c5c2ae537ae252875229d04ee8977369637d843cea375190e85789f34->leave($__internal_77484d1c5c2ae537ae252875229d04ee8977369637d843cea375190e85789f34_prof);

        
        $__internal_8e52469eb30b37c313b5e6529ea3cf785860ef2890bfbca539b6302e811cdc40->leave($__internal_8e52469eb30b37c313b5e6529ea3cf785860ef2890bfbca539b6302e811cdc40_prof);

    }

    public function getTemplateName()
    {
        return "ingredient/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  98 => 32,  92 => 29,  86 => 26,  75 => 19,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Ingredient</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ingredient.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ ingredient.name }}</td>
            </tr>
            <tr>
                <th>Icon</th>
                <td>{{ ingredient.icon }}</td>
                <img height=32 width=32 src=\"{{ asset('uploads/img/') }}{{ingredient.icon}}\" class=\"gallery-thumb\">
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ingredient_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ingredient_edit', { 'id': ingredient.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ingredient/show.html.twig", "/home/kamil/symfony_projects/cookbook-symfony/app/Resources/views/ingredient/show.html.twig");
    }
}
